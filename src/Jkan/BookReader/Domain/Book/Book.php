<?php
/**
 * This file is part of the "BookReader" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */

namespace Jkan\BookReader\Domain\Book;


class Book 
{
    private $title;
    private $pages;

    public function __construct($title, array $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function read($pageNumber)
    {
        $pageIndex = $pageNumber-1;
        if (!array_key_exists($pageIndex, $this->pages)) {
            throw new \Exception(sprintf('page %s not found', $pageNumber));
        }

        return $this->pages[$pageIndex]->content();
    }
}
