<?php
/**
 * This file is part of the "BookReader" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */

namespace Jkan\BookReader\Domain\Book;


interface BookLibrary
{
    public function getBook($title);
}