<?php
/**
 * This file is part of the "BookReader" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */

namespace Jkan\BookReader\Application;


use Jkan\BookReader\Domain\Book\BookLibrary;

class BookService
{
    private $library;

    public function __construct(BookLibrary $library)
    {
        $this->library = $library;
    }


    public function readBook($title, $page = 1)
    {
        $book = $this->library->getBook($title);

        return $book->read($page);
    }
}