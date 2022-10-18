<?php 

trait FileManager {

    public $file;
    public $data;

    public function readFile() {
        $this->data = json_decode(file_get_contents($this->file), true);
    }

    public function writeFile($data) {
        file_put_contents($this->file, json_encode($data));
    }
}