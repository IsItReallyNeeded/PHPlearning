<?php


class LibraryItem {
    protected $title;
    protected $itemID;

    public function __construct($title, $itemID) {
        $this->title = $title;
        $this->itemID = $itemID;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getItemID() {
        return $this->itemID;
    }

    
    public function displayInfo() {
        echo "ID: {$this->itemID}, Tytuł: {$this->title}";
    }
}


class Book extends LibraryItem {
    private $author;

    public function __construct($title, $itemID, $author) {
        parent::__construct($title, $itemID);
        $this->author = $author;
    }

    public function getAuthor() {
        return $this->author;
    }

    
    public function displayInfo() {
        parent::displayInfo();
        echo ", Autor: {$this->author}";
    }
}


class DVD extends LibraryItem {
    private $director;

    public function __construct($title, $itemID, $director) {
        parent::__construct($title, $itemID);
        $this->director = $director;
    }

    public function getDirector() {
        return $this->director;
    }

    
    public function displayInfo() {
        parent::displayInfo();
        echo ", Reżyser: {$this->director}";
    }
}


$book = new Book("Władca Pierścieni", 123, "J.R.R. Tolkien");
$dvd = new DVD("Incepcja", 456, "Christopher Nolan");


echo "Informacje o książce:\n";
$book->displayInfo();
echo "\n\n";


echo "Informacje o DVD:\n";
$dvd->displayInfo();
echo "\n";

?>