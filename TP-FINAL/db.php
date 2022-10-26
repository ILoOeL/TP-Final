<?php
   $con=mysqli_connect('127.0.0.7','root','root','tp_final');
   if(!$con){
      die('erreur de connexion a la base de donnée');
   }else{
      }
   $pdo= new PDO('mysql:dbname=tp_final;host=localhost','root','root');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   // ICI DOIT APPARAITRE LA CONNECTION AVEC LA BASE DE DONNEES
   // ET LA GESTION DES ERREURS
?>