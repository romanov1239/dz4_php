<?php

require_once 'classBook.php';

//агрегация:
class Shelf
{
    private int $shelfId;
    private int $roomId;
    private int $volume;
    private array $books;

    public function __construct (int $shelfId, int $roomId, int $volume)
    {
        $this -> shelfId = $shelfId;
        $this -> roomId = $roomId;
        $this -> volume = $volume;
        $this -> books = [];
    }

    public function addBook (Book $book)
    {
        $this -> books[] = $book;
    }

    public function removeBook (Book $book)
    {

    }

    public function getBooks (): array
    {
        return $this -> books;
    }
}

// композиция:

class Room
{
    private int $roomId;
    private string $address;
    private Shelf $shelf;

    public function __construct (int $roomId, string $address, Shelf $shelf)
    {
        $this -> roomId = $roomId;
        $this -> address = $address;
        $this -> shelf = $shelf;
    }

    public function getShelf ()
    {

    }

    public function getTotalBook ()
    {

    }
}
