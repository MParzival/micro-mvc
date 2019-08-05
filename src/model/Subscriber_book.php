<?php

class Subscriber_book extends AbstractDb
{

    public static function findAll()
    {

        $bdd = self::connectDb();

        // 2. request
        $request = 'SELECT subscriber_book.id, book.title, subscriber.firstname
                    FROM `subscriber_book`
                    JOIN book ON subscriber_book.id_book = book.id
                    JOIN subscriber ON subscriber_book.id_subscriber = subscriber.id';

        // 3. execution de la request
        $response = $bdd->query($request);

        // 4. return des données
        $data = $response->fetchAll(PDO::FETCH_ASSOC);

        var_dump($data);

        return $data;
    }

    public static function create($params)
    {

        $bdd = self::connectDb();

        $request = 'INSERT INTO subscriber (firstname, title) VALUES ("' . $params['firstname'] . '" ,  "' . $params['title'] . '")';

        $bdd->query($request);

        var_dump($bdd->errorInfo());
    }
}
