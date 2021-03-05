<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/basics.css">
    <title>Document</title>
</head>
<body>
<?php
try {
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'exo_200';

    $conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


    $search = $conn->prepare("SELECT * FROM hiking");

    $result = $search->execute();
    if ($result) { ?>
        <table>
            <tr>
                <th>name</th>
                <th>difficulty</th>
                <th>distance</th>
                <th>duration</th>
                <th>height difference</th>
            </tr>
        <?php foreach ($search->fetchAll() as $hiking) { ?>
            <tr>
                <td><?= $hiking['name'] ?></td>
                <td><?= $hiking['difficulty'] ?></td>
                <td><?= $hiking['distance'] ?></td>
                <td><?= $hiking['duration'] ?></td>
                <td><?= $hiking['height_difference'] ?></td>
            </tr>
       </table> <?php
        }
     }

}
    catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>


</body>
</html>