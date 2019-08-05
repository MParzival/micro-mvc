<?php

class Subscriber extends AbstractDb
{

    public static function findAll()
    {

        $bdd = self::connectDb();

        // 2. request
        $request = 'SELECT * FROM subscriber';

        // 3. execution de la request
        $response = $bdd->query($request);

        // 4. return des données
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById(int $id)
    {

        $bdd = self::connectDb();

        $request = 'SELECT * FROM subscriber WHERE id = ' . $id;

        $response = $bdd->query($request);

        return $response->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($params)
    {

        $bdd = self::connectDb();

        $request = 'INSERT INTO subscriber (firstname, lastname) VALUES ("' . $params['firstname'] . '" ,  "' . $params['lastname'] . '")';

        $bdd->query($request);

        var_dump($bdd->errorInfo());
    }

    public static function delete(int $id)
    {
        $bdd = self::connectDb();

        $request = 'DELETE FROM `subscriber` WHERE id = ' . $id;

        $bdd->query($request);
    }

    public static function edit(int $id)
    {
        $bdd = self::connectDb();
        $request = 'SELECT * FROM `subscriber` WHERE id = ' . $id;
        $response = $bdd->query($request);
        $donnees = $response->fetch();
        return $donnees;
    }

    public static function confirmEdit(int $id, $params)
    {
        $bdd = self::connectDb();
        $request = 'UPDATE `subscriber` SET firstname = "' . $params['firstname'] . '" , lastname = "' . $params['lastname'] . '" WHERE id= ' . $id;
        $bdd->query($request);
    }
}
