<?php

class SubscriberController
{

    public static function list()
    {

        // 1. Appel du Model
        $subscribers = Subscriber::findAll();

        // 2. Return/include de la view
        include(__DIR__ . '/../views/subscribers/list.php');
    }

    public static function read(int $id)
    {

        // 1. Appel du Model
        $subscribers = Subscriber::findById($id);
        // 2. Include de la view

        include(__DIR__ . '/../views/subscribers/read.php');
    }

    public static function create()
    {
        include(__DIR__ . '/../views/subscribers/create.php');
    }

    public static function new($params)
    {
        var_dump($params);
        $subscribers = Subscriber::create($params);
        echo 'le livre est enregistrer';
    }

    public static function edit(int $id)
    { 
        $donnees = Subscriber :: edit($id);
        include(__DIR__ . '/../views/subscribers/edit.php');
    }

    public static function confirmEdit(int $id, $params){
        $donnees = Subscriber :: confirmEdit($id, $params);
        echo 'Votre auteur est mise à jour';
    }

    public static function delete(int $id)
    { 
        $subscribers = Subscriber::delete($id); 
        echo 'le livre a bien été supprimer';
    }
}