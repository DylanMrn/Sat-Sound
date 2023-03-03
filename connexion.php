<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Sat'Sound</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    </head>
    <link rel="stylesheet" href="">
    <style>
        
    </style>
    <body>
    <?php
        $user = 'root';
        $pass = 'root';

        session_start();

        try {
            $dbh = new PDO('mysql:host=localhost;dbname=musique', $user, $pass);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }

        if (isset($_POST['email']) &&  isset($_POST['password']) && !empty($_POST['email']) &&  !empty($_POST['password'])) {
            $stmt = $dbh->prepare("SELECT * FROM user WHERE email = :email");
            $stmt->bindParam(':email', $_POST['email']);
            $stmt->execute(); 
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result){
                $passwordHash = $result['password'];
                if (password_verify($_POST['password'], $passwordHash)) {
                    echo "Connexion réussie !";
                    $_SESSION['name'] = $result['nom'];
                    $_SESSION['email'] = $result['email'];
                    header('Location: sound.php');
                } else {
                    echo "Identifiants invalides";
                }
            }
            else{
                echo 'KO';
            }
        }
    ?>
    <?php if(!isset($_SESSION['name'])): ?>

    <form action="" method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="you@exemple.com">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Envoyer</button>
    </form>
    <!-- Si utilisateur/trice bien connectée on affiche un message de succès -->
    <?php else: ?>
        Bonjour <?php echo $_SESSION['name']; ?> et bienvenue sur le site !
        <a href="deconnexion.php"> deco </a>
    <?php endif; ?>
</body>
<footer></footer>

</html>