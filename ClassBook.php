<?php

abstract class Book
{
    private string $name;
    private string $preview;
    private array $authors;
    private int $readCount;

    public function __construct (string $name, string $preview, array $authors)
    {
        $this -> name = $name;
        $this -> preview = $preview;
        $this -> authors = $authors;
        $this -> readCount = 0;
    }

    public function getPreview (): string
    {
        return $this -> preview;
    }

    public function getAuthors (): array
    {
        return $this -> authors;
    }

    public function increaseReadCount ()
    {
        $this -> readCount++;
    }

    abstract public function getOnHand (): string;
}

class DigitalBook extends Book
{
    private string $text;
    private string $downloadLink;

    public function __construct (string $name, string $preview, array $authors, string $text, string $downloadLink)
    {
        parent ::__construct ($name, $preview, $authors);
        $this -> text = $text;
        $this -> downloadLink = $downloadLink;
    }

    public function getOnHand (): string
    {
        $this -> increaseReadCount ();
        return $this -> downloadLink;
    }
}

class PaperBook extends Book
{
    private string $libraryAddress;

    public function __construct (string $name, string $preview, array $authors, string $libraryAddress)
    {
        parent ::__construct ($name, $preview, $authors);
        $this -> libraryAddress = $libraryAddress;
    }

    public function getOnHand (): string
    {
        $this -> increaseReadCount ();
        return $this -> libraryAddress;
    }
}
