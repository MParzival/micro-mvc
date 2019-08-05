<?php

class BookController
{

    public static function list()
    {

        // 1. Appel du Model
        $books = Book::findAll();

        // 2. Return/include de la view
        include(__DIR__ . '/../views/books/list.php');
    }

    public static function read(int $id)
    {

        // 1. Appel du Model
        $book = Book::findById($id);
        // 2. Include de la view

        include(__DIR__ . '/../views/books/read.php');
    }

    public static function create()
    {
        include(__DIR__ . '/../views/books/create.php');
    }

    public static function new($params)
    {
        var_dump($params);
        $book = Book::create($params);
        echo 'le livre est enregistrer';
    }

    public static function edit(int $id)
    { 
        $donnees = Book :: edit($id);
        include(__DIR__ . '/../views/books/edit.php');
    }

    public static function confirmEdit(int $id, $params){
        $donnees = Book :: confirmEdit($id, $params);
        echo 'Votre livre est mise à jour';
    }

    public static function delete(int $id)
    { 
        $book = Book::delete($id); 
        echo 'le livre a bien été supprimer';
    }
}
