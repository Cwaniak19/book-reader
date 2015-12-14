<?php

require __DIR__.'/vendor/autoload.php';

use Jkan\BookReader\Application\BookService;
use Jkan\BookReader\Infrastructure\Book\InMemoryBookLibrary;

$library = new InMemoryBookLibrary();
$bookService = new BookService($library);

$title = $argv[1];
$page = $argv[2];

echo $bookService->readBook($title, $page);