    <?php

    function connection()
    {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=books', 'root', 'root');
        return $pdo;
    }
    function getData($table)
    {
        $connection = connection();
        $query = $connection->query("select * from {$table}");
        $query->execute();
        return $query->fetchAll();
    }

    var_dump(getData("users"));
    var_dump(getData("comentarios"));