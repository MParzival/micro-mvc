<?php

class Book extends AbstractDb
{

    public static function findAll()
    {

        $bdd = self::connectDb();

        // 2. request
        $request = 'SELECT * FROM book';

        // 3. execution de la request
        $response = $bdd->query($request);

        // 4. return des données
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById(int $id)
    {

        $bdd = self::connectDb();

        $request = 'SELECT * FROM book WHERE id = ' . $id;

        $response = $bdd->query($request);

        return $response->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($params)
    {

        $bdd = self::connectDb();

        $request = 'INSERT INTO book(title, author) VALUES ("' . $params['title'] . '" ,  "' . $params['author'] . '")';

        $bdd->query($request);

        var_dump($bdd->errorInfo());
    }

    public static function delete(int $id)
    {
        $bdd = self::connectDb();

        $request = 'DELETE FROM `book` WHERE id = ' . $id;

        $bdd->query($request);
    }

    public static function edit(int $id)
    {
        $bdd = self::connectDb();
        $request = 'SELECT * FROM `book` WHERE id = ' . $id;
        $response = $bdd->query($request);
        $donnees = $response->fetch();
        return $donnees;
    }

    public static function confirmEdit(int $id, $params)
    {
        $bdd = self::connectDb();
        $request = 'UPDATE `book` SET title = "' . $params['title'] . '" , author = "' . $params['author'] . '" WHERE id= ' . $id;

        var_dump($request);
        $bdd->query($request);
    }
}
