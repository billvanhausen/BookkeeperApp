<?php

namespace BookkeeperApp;

class View
{
    private $templatePath;
    private $data = [];

    public function __construct($templatePath)
    {
        $this->templatePath = $templatePath;
    }

    public function assign($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function render()
    {
        // Extract data variables to be accessible directly in the template
        extract($this->data); 

        // Start output buffering to capture the rendered template
        ob_start(); 
        require $this->templatePath;
        return ob_get_clean(); // Return the captured output
    }
}