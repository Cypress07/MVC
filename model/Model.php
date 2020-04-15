<?php

include_once ("model/Book.php");

class Model {

    public function getbooklist() {
        return array(
            "Jungle Book" => new Book("Jungle Book", "Rudyard Kipling", "A classic book."),
            "The Last Tycoon" => new Book("the Last Tycoon", "F. Scott Ftizgerald", "A classic roman"),
            "PHP for Dummiers" => new Book("PHP for Dummies", "Some Smart Guy", "")
        );
    }

    public function getBook($title) {
        $allBooks = $this->getBookList();
        return $allBooks($title);
    }

}
