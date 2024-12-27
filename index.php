<?php
    require_once 'bd/connexionBD.php';

    include_once 'pages/connexion.php';
    include 'bd/authentification.php';

    if(isset($_POST['connexion'])){
        $user = findUserByLoginAndPass($_POST['username'],$_POST['password']);
        // var_dump($user);
        // die();
        if($user){
            header ("location:http://localhost/PHP/exam/pages/accueil.php");
        }else{
            header ("location:http://localhost/PHP/exam/");
        }
    }
    if(isset($_POST['inscrire'])){
        extract($_POST);
        $ok = inscription($nomClient,$prenomClient,$adresseClient,$telClient,$emailClient,$genreClient,$NIN,$login,$password);
        if($ok==1){
            header ("location:http://localhost/PHP/exam/");
        }else{
            header ("location:http://localhost/PHP/exam/pages/inscription.php");
        }
        
    }