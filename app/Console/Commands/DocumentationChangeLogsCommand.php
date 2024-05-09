<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DocumentationChangeLogsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doc:change-logs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Copy the change logs to the documentation from the CHANGELOG.md file.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Copying the change logs to the documentation...');

        $changelog = file_get_contents(base_path('/vendor/bfg/admin/CHANGELOG.md'));

        file_put_contents(base_path('/Writerside/topics/Change-logs.md'), $changelog);

        $this->info('Change logs copied successfully.');
    }
}
