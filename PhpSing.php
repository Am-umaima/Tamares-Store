<?php 
// session_start();


	if (isset($_POST['user']) and isset($_POST['password']))
	{	
		// $_session['username']=$_POST['user'];
		// $_session['password']=$_POST['password'];
		//guery counter le user
		$bdd=new PDO('mysql:host=localhost;dbname=store','root','');
		$nbUser = $bdd->query('SELECT COUNT(*) as nbUser FROM `user` WHERE username=\''.$_POST['user'].'\'and password=\''.$_POST['password'].'\'');
		while ($donnees = $nbUser->fetch())
		{
			if ($donnees['nbUser']<1) 
			{
				
				echo 'n\'exist existe :(';
				header('Location:sing up.html');
				session_destroy();
			}
			else
			{			
				echo 'bonjour you are existed !:) ';
				// $_session['username']=$_POST['user'];


				header('Location:home.php?username='.$_POST['user'].'');
			}
		}	
	}
	
 ?>