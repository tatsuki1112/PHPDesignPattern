<?php
require_once("Reader.class.php");

class XMLFileReader implements Reader
{
    private $filename;

    private $handler;

    public function __construct($filename)
    {
        if(!is_readable($filenmae)) {
            throw new Exception('"File' . $filename . '"is not readable');
        }
        $this->fileName = $filename;
    }

    public function read()
    {
        $this->handler = simplexml_load_file($this->filename);
    }

    public function display()
    {
        foreach($this->handler->artist as $artist) {
            echo "<b>" . $this->convert($artist['name']) . "</b>";
            echo "<ul>";
            foreach($artist->music as $music) {
                echo "<li>";
                echo $this->convert($music['name']);
                echo "</li>";
            }
            echo "</ul>";
        }
    }
}