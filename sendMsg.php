<?php


if(!empty($_POST['name']) && !empty($_POST['message']) && !empty($_POST['email'])){
	
    $name = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $message = trim($_POST['message']);
    include 'connexion.php';
     
$req = $bdd->prepare('INSERT INTO contact(id ,name, email,message) VALUES(NULL ,:nom, :email, :message)');
    $req->execute(array(  'nom'=> $name,  'email'=>$email,'message'=>$message));
    //redirection to contact page
     	session_start();
$_SESSION['msg_send']= "thanks for message";
	 header("Location: http://localhost/site/contact.php");
 

$req->closeCursor();
}
?>