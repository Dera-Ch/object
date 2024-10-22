<?php
class Book {
    public $title;
    public $author;
    public $yearPublished;
    private $isCheckedOut;
    public function __construct($title, $author, $yearPublished) {
        $this->title = $title;
        $this->author = $author;
        $this->yearPublished = $yearPublished;
        $this->isCheckedOut = false;
    }

    public function displayInfo() {
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Year Published: " . $this->yearPublished . "<br>";
    }

    public function checkOut() {
        if (!$this->isCheckedOut) {
            $this->isCheckedOut = true;
            echo $this->title . " has been checked out.<br>";
        } else {
            echo $this->title . " is already checked out.<br>";
        }
    }
    public function returnBook() {
        if ($this->isCheckedOut) {
            $this->isCheckedOut = false;
            echo $this->title . " has been returned.<br>";
        } else {
            echo $this->title . " was not checked out.<br>";
        }
    }
}

$book1 = new Book("1984", "George Orwell", 1949);
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", 1960);

echo "<strong>Book 1:</strong><br>";
$book1->displayInfo();
$book1->checkOut();    /
$book1->returnBook();  

echo "<br><strong>Book 2:</strong><br>";
$book2->displayInfo();
$book2->checkOut();    
?>
