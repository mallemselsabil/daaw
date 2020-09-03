
<?php 

if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])){
	
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);
    include 'connexion.php';
     
$req = $bdd->prepare('INSERT INTO users(id ,name, email,password) VALUES(NULL ,:nom, :email, :password)');
    $req->execute(array(  'nom'=> $username,  'email'=>$email,'password'=>$password));
  
 
 session_start();
	 header("Location: http://localhost/site/account.php");
 $_SESSION['added']=     "user added";
$req->closeCursor();

}  

 ?>