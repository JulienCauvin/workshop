<!doctype html>
<html lang="fr">

    <?php include_once '../partials/head.php'; ?>

    <body>

        <?php include_once '../partials/menu.php'; ?>

        <?php if (isset($_GET['prenom'])) { ?>
            <h1>Je suis la page 2, et je m'appelle <?= $_GET['prenom'] ?>. Enfin je crois 🤔</h1>
            <a href="./page2.php">C'est faux !</a>
        <?php } else { ?>
            <h1>Pardon, je ne me souviens plus de mon prénom 😭 Tu peux m'aider ?</h1>

            <form action="./page2.php" method="GET">
                <label>
                    <input type="text" name="prenom" placeholder="Mon prénom" />
                </label>
                <button>
                    Voilà, je crois que c'est ça !
                </button>
            </form>
        <?php } ?>

    </body>
</html>
