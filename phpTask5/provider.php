<?php

class Provider {
    private $directory;

    public function __construct($directory) {
        $this->directory = $directory;
    }

    public function register() {
        $this->loadFiles($this->directory);
    }

    private function loadFiles($directory) {
        foreach (glob($directory . '/*') as $file) {
            if (is_dir($file)) {
                $this->loadFiles($file); // Рекурсивный вызов для подкаталогов
            } elseif (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                require_once $file;
            }
        }
    }
}