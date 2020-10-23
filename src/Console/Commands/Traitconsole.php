<?php


namespace Rifrocket\TraitConsole\Console\Commands;
use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class Traitconsole extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:trait';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new trait';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Trait';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('boot')) {
            return __DIR__ . '/stubs/boot-trait.stub';
        }

        if ($this->option('scope')) {
            return __DIR__ . '/stubs/scope-trait.stub';
        }

        return __DIR__ . '/stubs/trait.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Traits';
    }

    /**
     * Build the trait with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());

        return $this->replaceNamespace($stub, $name)->replaceTrait($stub, $name);
    }

    /**
     * Replace the trait name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceTrait($stub, $name)
    {

        if ($this->option('boot')) {

            $class = str_replace($this->getNamespace($name) . '\\', '', $name);
            $bootMetod='boot'.$this->option('boot');
            str_replace('DummyTrait', $class, $stub);
            return str_replace('bootDummyMethod', $bootMetod, $stub);
        }

        if ($this->option('scope')) {

            $class = str_replace($this->getNamespace($name) . '\\', '', $name);
            $scopeMetod='scope'.$this->option('scope');
            str_replace('DummyTrait', $class, $stub);
            return str_replace('bootDummyMethod', $scopeMetod, $stub);
        }

        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        return str_replace('DummyTrait', $class, $stub);
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['boot', 'b', InputOption::VALUE_OPTIONAL, 'generated trait should contain an eloquent boot method','DummyMethod'],
            ['scope', 's', InputOption::VALUE_OPTIONAL, 'generated trait should contain an eloquent query scope','DummyMethod']
        ];
    }

}
