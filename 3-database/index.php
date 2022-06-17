<?php

$databaseName = "formation";
$host = "localhost";
$port = 3306;
$user = "root";
$password = "";

$pdo = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$databaseName, $user, $password);

$params = [];
$query = <<<SQL
    SELECT * FROM `users` 
    SQL;

if (!empty($_GET['search'])) {
    $query .= <<<SQL
        WHERE firstname LIKE :search1 
            OR lastname LIKE :search2 
            OR email LIKE :search3
        SQL;

    $params[':search1'] = '%' . $_GET['search'] . '%';
    $params[':search2'] = '%' . $_GET['search'] . '%';
    $params[':search3'] = '%' . $_GET['search'] . '%';
}

$stmt = $pdo->prepare($query);
$stmt->execute($params);

$results = $stmt->fetchAll();

?>
<!doctype html>
<html lang="fr">
    <head>

    </head>
    <body>
        <h1>Bienvenue sur mon incroyable annuaire !</h1>

        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Email</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($results as $result): ?>

                <tr>
                    <td><?= $result[0] ?></td>
                    <td><?= $result[1] ?></td>
                    <td><?= $result[2] ?></td>
                    <td><?= $result[3] ?></td>
                </tr>

            <?php endforeach; ?>
            </tbody>

        </table>
    </body>

    <br />

    <form method="GET">
        <label>
            <input type="text" name="search" placeholder="Je recherche..." value="<?= $_GET['search'] ?? '' ?>">
        </label>
        <button>
            Go !
        </button>
    </form>
</html>
