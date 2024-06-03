<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DocumentationFileCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doc:file';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate documentation from file';

    /**
     * Execute the console command.
     *
     * @return void
     * @throws \ReflectionException
     */
    public function handle(): void
    {
        $file = null;
        while (! $file) {
            $file = $this->ask('Which file do we take the data from?');
        }

        if (! is_file($file)) {
            $file = base_path($file);
        }
        if (! is_file($file)) {
            $this->error('File not found.');
            return ;
        }
        $content = file_get_contents($file);
        $lines = explode("\n", $content);
        $class = null;
        $namespace = null;
        foreach ($lines as $line) {
            if (! $class && preg_match('/^(class|abstract|final|interface|\s)*\s([^\s.]*)/', $line, $matches)) {
                if ($matches[1] === 'class') {
                    $class = $matches[2];
                }
            }
            if (! $namespace && preg_match('/namespace\s(.*);/', $line, $matches)) {
                $namespace = $matches[1];
            }
        }

        $ref = new \ReflectionClass($namespace . '\\' . $class);

        $title = $this->getDocDescription($ref->getDocComment());
        $filename = basename($file);

        $md = "# " . $filename . "\n\n" . $title . "\n\n";

        $properties = [];
        $constants = [];
        $methods = [];

        foreach ($ref->getConstants() as $name => $constant) {

            $constants[] = [
                'name' => $name,
                'descriptions' => null,
                'sign' => $this->getClassMemberDefinitionLine($content, $name, 'constant')
            ];
        }

        foreach ($ref->getProperties() as $property) {

            $properties[] = [
                'name' => $property->getName(),
                'description' => $this->getDocDescription($property->getDocComment()),
                'sign' => $this->getClassMemberDefinitionLine($content, $property->getName(), 'property')
            ];
        }

        foreach ($ref->getMethods() as $method) {

            $methods[] = [
                'name' => $method->getName(),
                'description' => $this->getDocDescription($method->getDocComment()),
                'sign' => $this->getClassMemberDefinitionLine($content, $method->getName(), 'method')
            ];
        }

        foreach (collect($constants)->whereNotNull('sign') as $constant) {

            $md .= "### Constant: " . $constant['name'] . "\n";
            $md .= "```php\n" . $constant['sign'] . "\n```\n\n";
        }

        foreach (collect($properties)->whereNotNull('sign') as $property) {

            $md .= "### Property: " . $property['name'] . "\n";
            $md .= $property['description'] . "\n";
            $md .= "```php\n" . $property['sign'] . "\n```\n\n";
        }

        foreach (collect($methods)->whereNotNull('sign') as $method) {

            $md .= "### Method: " . $method['name'] . "\n";
            $md .= $method['description'] . "\n";
            $md .= "```php\n" . $method['sign'] . "\n```\n\n";
        }

        $fileWrite = $this->ask('Which file will we write to?');

        if ($fileWrite && is_file($fileWrite)) {

            file_put_contents($fileWrite, $md);
        } else {

            echo $md;
        }

        $this->handle();
    }

    /**
     * @param  string  $text
     * @return string|null
     */
    protected function getDocDescription(string $text): string|null
    {
        $pattern = '/^\s*\*\s(.*?)(?=\n\s*\*\s*$|\n\s*\*\s*@|\n\s*\*\/)/ms';

        preg_match($pattern, $text, $matches);
        if (! isset($matches[1])) {
            return null;
        }
        $lines = explode("\n", $matches[1]);

        $lines = array_map(function ($line) {
            return trim($line, " \n\r\t\v\0*");
        }, $lines);

        return trim(preg_replace('/\s+/', ' ', implode(' ', $lines)));
    }

    /**
     * @param  string  $source
     * @param  string  $memberName
     * @param  string  $memberType
     * @return string|null
     */
    protected function getClassMemberDefinitionLine(string $source, string $memberName, string $memberType): ?string
    {
        $source = preg_replace('!/\*.*?\*/!s', '', $source);
        $source = preg_replace('/\/\/.*$/m', '', $source);

        $pattern = match ($memberType) {
            'method' => '/^\s*(public|protected|private|static|\s)*function\s+' . preg_quote($memberName, '/') . '\s*\(.*?\)\s*(:\s*[\w\|]+)?\s*\{/m',
            'property' => '/^\s*(public|protected|private|static|\s)*\s(.*)\$' . preg_quote($memberName, '/') . '\s/m',
            'constant' => '/^\s*(public|protected|private|static|\s)*const\s+' . preg_quote($memberName, '/') . '\s*=/m',
            default => throw new \InvalidArgumentException('Invalid member type specified. Use "method", "property", or "constant".')
        };

        if (preg_match($pattern, $source, $matches, PREG_OFFSET_CAPTURE)) {
            return trim($matches[0][0], " \n\r\t\v\0{}=");
        }

        return null;
    }

}
