<?php 

if(!empty($_POST['username']) && !empty($_POST['password'])){
	 
    include 'connexion.php';
     
    $req = $bdd->prepare('SELECT * FROM users WHERE 	name = :name and password= :password');
    $req->execute(array(  'name'=> $_POST['username'], 'password'=>$_POST['password']));
    if($donnees = $req->fetch()){ 
  
{

	echo '<li>' . $donnees['name'] . '</li>';
	echo "bienvenue chez nous !";
}
echo '</ul>';
 
$req->closeCursor();

} // username or password inccorect
else
{	session_start();
	$_SESSION['info']="mot de passe ou nom d utilisateur inccorect";
	 header("Location: http://localhost/site/account.php");
}

}// username or password empty
else
{	session_start();
	$_SESSION['info']="mot de passe ou nom d utilisateur inccorect";
	 header("Location: http://localhost/site/account.php");
}
 ?>

</body>
</html>
