<?php
ini_set('error_reporting',E_ALL);
ini_set('display_errors', 1);
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/basics.css">
    <title>Randonnées, ajout</title>
</head>
<body>
<form action="create.php" method="post">
    <label for="name">Nom de la randonnée</label><br>
    <input type="text" name="name" id="name" placeholder="Nom de la randonnée"><br>
    <label for="difficulty">difficulté</label><br>
    <select name="difficulty" id="difficulty">
        <option value="très facile">Très facile</option>
        <option value="facile">Facile</option>
        <option value="moyen">Moyen</option>
        <option value="difficile">Difficile</option>
        <option value="très difficile">Très difficile</option>
    </select><br>
    <label for="distance">distance</label><br>
    <input type="number" id="distance" name="distance"><br>
    <!-- Ajoutez un / des champs pour gérer la donnée de type time à insérer via PHP -->
    <label for="time">durée de la randonée</label><br>
    <input type="time" name="time" id="time"><br>
    <label for="denivelée">denivelée</label><br>
    <input type="number" id="denivelée" name="height_difference"><br>
    <input type="submit" id="submit" name="Envoyer">
</form>
<?php
try {
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'exo_200';

    $conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    if (isset($_POST["name"], $_POST["difficulty"], $_POST["distance"], $_POST['time'], $_POST["height_difference"])) {
        $name = $_POST['name'];
        $difficulty = $_POST['difficulty'];
        $distance = $_POST['distance'];
        $duration = $_POST['time'];
        $height_difference = $_POST['height_difference'];

        $insert = "
            INSERT INTO hiking (name, difficulty, distance, duration, height_difference )
            VALUES ('$name','$difficulty',$distance,'$duration',$height_difference);
        ";
        $conn->prepare($insert)->execute();
        header("Location: read.php");
    }



} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
</body>
</html>