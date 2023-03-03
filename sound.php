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
        html,body {font-family:"Verdana",sans-serif}
        h1,h2,h3,h4,h5,h6 {font-family:"Segoe UI",sans-serif}
    </style>
    <body>
      <?php

      /* 
      session_start();
      if (!isset($_SESSION['login])) { header ('Location: connexion.php'); exit();}
      */
        $user = 'root';
        $pass = 'root';
        $target_dir = "son/";

        try {
          $dbh = new PDO('mysql:host=localhost;dbname=musique', $user, $pass);
        } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
        }

      if(isset($_POST["submit"]) && isset($_FILES)) {
          $target_file = $target_dir.$_FILES["musique"]["name"];
          $audioFileType = pathinfo($target_file,PATHINFO_EXTENSION);
          if (!file_exists($target_file)) {
            if ($_FILES["musique"]["size"] > 5000000000) {
              echo "Sorry, your file is too large.";
            }
            if($audioFileType != "wav" && $audioFileType != "mp3" && $audioFileType != "wma" && $audioFileType != "mp4" ) {
                echo "Sorry, only wav, mp3, wma & mp4 files are allowed.";
            }
            if(move_uploaded_file($_FILES["musique"]["tmp_name"], $target_file)) {      
              $stmt = $dbh->prepare("INSERT INTO audio (chemin, nom) VALUES (:chemin, :nom)");
              $stmt->bindParam(':chemin', $target_file);
              $stmt->bindParam(':nom', $_FILES["musique"]["name"]);
              $stmt->execute();

              echo "The file ". basename( $_FILES["musique"]["name"]). " has been uploaded.";
            }
            else {
              echo "Sorry, there was an error uploading your file.";
            }
        }else {
          echo "Sorry, file already exists.";
        }
        }

        $get = $dbh->prepare("SELECT * FROM audio;");
        $get->execute();
        $all = $get->fetchAll();
      ?>
      <script>
        function play(chemin) {
          new Audio(chemin).play();
        }
      </script>
      <form method="POST"  enctype="multipart/form-data">
        <input type="file" id="musique" name="musique" accept="audio/*">
        <input type="submit" value="envoyer" name="submit">
      </form>
      <?php foreach($all as $son){ ?>
        <button onclick="play('<?php echo $son['chemin']; ?>');" value=""> <?php echo $son['nom']; ?> </button>
      <?php } ?>
    </body>
    <footer></footer>
    
</html>