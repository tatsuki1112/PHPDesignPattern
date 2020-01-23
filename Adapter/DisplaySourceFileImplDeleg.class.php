<?php
require_once 'DisplaySourceFile.class.php';
require_once 'ShowFile.class.php';

class DisplaySourceFileImpl implements DisplaySourceFile
{
    private $show_file;

    public function __construct($filename)
    {
        $this->show_file = new Showfile($filename);
    }

    public function display()
    {
        $this->show_file->showHighlight();
    }

}