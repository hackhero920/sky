<?php

namespace LaraZeus\Sky\Console;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sky:publish {--force : Overwrite any existing files}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Command for all Zeus and Sky components and resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // publish Sky files
        $this->callSilent('vendor:publish', ['--tag' => 'zeus-sky-config', '--force' => $this->option('force') ?? false]);
        $this->callSilent('vendor:publish', ['--tag' => 'zeus-sky-migrations', '--force' => $this->option('force') ?? false]);
        $this->callSilent('vendor:publish', ['--tag' => 'zeus-sky-translations', '--force' => $this->option('force') ?? false]);

        $this->callSilent('vendor:publish', ['--tag' => 'zeus-sky-seeder', '--force' => $this->option('force') ?? false]);
        $this->callSilent('vendor:publish', ['--tag' => 'zeus-sky-factories', '--force' => $this->option('force') ?? false]);

        // publish Zeus files
        $this->callSilent('vendor:publish', ['--tag' => 'zeus-config', '--force' => $this->option('force') ?? false]);
        $this->callSilent('vendor:publish', ['--tag' => 'zeus-views', '--force' => $this->option('force') ?? false]);
        $this->callSilent('vendor:publish', ['--tag' => 'zeus-assets', '--force' => $this->option('force') ?? false]);

        $this->output->success('Zeus and Sky has been Published successfully');
    }
}
