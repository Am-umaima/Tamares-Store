<?php
// $_GET['username']=$_GET['username'];
	$value=$_GET['username'];

header('Location: contact.php?username='.$value);
?>
<?php 
if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['subject']) and isset($_POST['message'])) 
{
	
	$bdd= new PDO('mysql:host=localhost;dbname=store','root','');
	$bdd->exec('INSERT INTO contact (id, name, email,subject,message) VALUES (NULL,\''.$_POST['name'].'\', \''.$_POST['email'].'\', \''.$_POST['subject'].'\', \''.$_POST['message'].'\');');

	echo 'name = '.$_POST['name'].'<br>email = '.$_POST['email'].'<br>Subject = '.$_POST['subject'].'<br>Message = '.$_POST['message'].'<br>';

}




 ?>