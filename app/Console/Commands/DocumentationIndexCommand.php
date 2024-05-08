<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DocumentationIndexCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doc:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Indexing the documentation files.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Indexing the documentation files...');
        $files = File::files(base_path('Writerside/topics'));
        $index = [];
        foreach ($files as $file) {
            if (str_ends_with($file->getFilename(), '.md')) {

                $content = file_get_contents($file->getPathname());
                $content = explode("\n", $content);
                $header = trim(strip_tags(Str::markdown($content[0])));
                $content = implode("\n", array_slice($content, 1));

                $index[] = [
                    'name' => pathinfo($file, PATHINFO_BASENAME),
                    'title' => $header,
                    'content_html' => Str::markdown($content),
                    'content_md' => $content,
                ];
            }
        }

        file_put_contents(base_path('Writerside/index.json'), json_encode($index, JSON_PRETTY_PRINT));
        $this->info('Indexing completed.');

//        $this->info('Indexing completed.');
//        $this->info('Parsing the documentation files...');
//
//        $result = $this->parseTreeToArray(
//            file_get_contents(base_path('Writerside/bfg-admin-documentation.tree'))
//        );
//        dd($result);
    }

    function parseTreeToArray($xml)
    {
        $parser = new \SimpleXMLElement($xml);
        $result = [];

        function recursiveParse($xmlElement, &$resultArray) {
            foreach ($xmlElement->children() as $child) {
                $node = [
                    'topic' => (string)$child['topic'],
                    'children' => []
                ];
                recursiveParse($child, $node['children']);
                $resultArray[] = $node;
            }
        }

        recursiveParse($parser, $result);
        return $result;
    }
}
