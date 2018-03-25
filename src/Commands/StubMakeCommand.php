<?php

namespace StvnYung\LaravelStuber\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\GeneratorCommand;

class StubMakeCommand extends GeneratorCommand
{
    protected $name = 'make:stub';

    protected $description = 'Create a new stub file';

    protected $type = 'Stub';

    protected function getStub()
    {
        return __DIR__."/stubs/{$this->getNameInput()}.stub";
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Stubs';
    }

    protected function getPath($name)
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);

        return $this->laravel['path'].'/'.str_replace('\\', '/', $name).'.stub';
    }

    protected function buildClass($name)
    {
        return $this->files->get($this->getStub());
    }
}