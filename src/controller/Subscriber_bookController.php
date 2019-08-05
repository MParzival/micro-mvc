<?php

class Subscriber_bookController
{

    public static function list()
    {

        // 1. Appel du Model
        $subscribers_book = Subscriber_book::findAll();
        // 2. Return/include de la view
        include(__DIR__ . '/../views/subscribers_book/list.php');
    }

    public static function read(int $id)
    {

        // 1. Appel du Model
        $subscribers_book = Subscriber_book::findById($id);
        // 2. Include de la view

        include(__DIR__ . '/../views/subscribers_book/read.php');
    }

    public static function create()
    {
        $subscribers = Subscriber::findAll();
        $books = Book::findAll();
        var_dump($books, $subscribers);

        include(__DIR__ . '/../views/subscribers_book/create.php');
    }

    public static function new($params)
    {
        $subscribers_book = Subscriber_book::create($params);
        echo "l'emprunt est enregistrer";
    }

    // public static function edit(int $id)
    // {
    //     $donnees = Subscriber_book::edit($id);
    //     include(__DIR__ . '/../views/subscribers_book/edit.php');
    // }

    // public static function confirmEdit(int $id, $params)
    // {
    //     $donnees = Subscriber_book::confirmEdit($id, $params);
    //     echo 'Votre auteur est mise à jour';
    // }

    public static function delete(int $id)
    {
        $subscribers_book = Subscriber_book::delete($id);
        echo 'le livre a bien été supprimer';
    }
}
