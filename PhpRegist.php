<?php 
// session_start();
// $_session['username']=$_POST['user'];

// $_session['password']=$_POST['password'];


if (isset($_POST['user']) and isset($_POST['mail']) and isset($_POST['password'])) 
	{
		//guery counter le user
		$bdd=new PDO('mysql:host=localhost;dbname=store','root','');
		$nbUser = $bdd->query('SELECT COUNT(*) as nbUser FROM `user` WHERE username=\''.$_POST['user'].'\'');
		while ($donnees = $nbUser->fetch())
		{
			if ($donnees['nbUser']>=1) 
			{
				//echo '<p name=\'reponse\'>deja existe</p>';
				echo "deja existe :(";
				header('Location:index.html');
				session_destroy();
			}
			else
			{
				//insert les donnes 
				$bdd= new PDO('mysql:host=localhost;dbname=store','root','');
				$bdd->exec('INSERT INTO `user`(`username`, `email`, `password`) VALUES(\''.$_POST['user'].'\',\''.$_POST['mail'].'\',\''.$_POST['password'].'\')');
								
				echo 'Le jeu a bien été ajouté !:) ';
				header('Location:home.php?username='.$_POST['user'].'');
			}

		}


		
	}

 ?>