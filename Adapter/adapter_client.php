<?php
//require_once 'DisplaySourceFileImpl.class.php';
require_once 'DisplaySourceFileImplDeleg.class.php';

$show_file = new DisplaySourceFileImpl('./showFile.class.php');

$show_file->display();
