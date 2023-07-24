<?php

namespace mthsena;

class Templaty
{
    private string $file;
    private array $params;

    public function __construct(string $file)
    {
        $this->file = $file;
        $this->params = [];
    }

    public function addParam(string $name, string $value)
    {
        $this->params[$name] = $value;
    }

    public function addParamFromFile($name, string $file)
    {
        $this->addParam($name, file_get_contents($file));
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function getOutput(): string
    {
        ob_start();
        extract($this->params, EXTR_OVERWRITE);
        include $this->file;
        return ob_get_clean();
    }
}
