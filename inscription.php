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
            $db = new PDO('mysql:host=localhost;dbname=musique', $user, $pass);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm'])) {
            if ($_POST['password'] === $_POST['confirm']) {
                $email = $_POST['email'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
                $q = $db->prepare('INSERT INTO user (email, password) VALUES (:email, :password)');
                $q->bindValue('email', $email);
                $q->bindValue('password', $password);
                $res = $q->execute();

                if ($res) {
                    echo "Inscription réussie";
                    header('Location: connexion.php');
                } else {
                    echo 'KO';
                }
            } else {
                echo 'failed';
            }
            
        }
    ?>

    <?php if(!isset($_SESSION['name'])): ?>
    <form method="POST" action="">
        <input type="email" placeholder="Email" name="email"><br>
        <input type="password" placeholder="Mot de passe" name="password"><br>
        <input type="password" placeholder="Confirme le Mot de passe" name="confirm"><br>
        <button type="submit">Inscription</button>
    </form>
    <?php else: ?>
        <?php echo 'unautorized access';
        header('Location: sound.php'); ?>
    <?php endif; ?>

    <script>
        
    </script>
    </body>
<footer></footer>

</html>