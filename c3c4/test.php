<?php

require_once 'vendor/autoload.php';

$phpword = new \PhpOffice\PhpWord\PhpWord();
$section = $phpword->addSection();

$section->addText("Hello World!");

$phpword->save('PHPWord/samples/hello.docx', 'Word2007');