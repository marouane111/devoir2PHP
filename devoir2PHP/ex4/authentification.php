<?php 
	function validemail(){
	$email= isset($_POST['email']) ? $_POST['email'] : NULL;
		
		if (filter_var($email,FILTER_VALIDATE_EMAIL)===false) {
			return false;
		}
		else{
			return true;
		}
	}
	
	
	$mon_fichier=fopen("login.txt", "a");
	$email= isset($_POST['email']) ? $_POST['email'] : NULL;
	$pwd=isset($_POST['password']) ? $_POST['password'] : NULL;

	$cmp="$email | $pwd \n";
	fputs($mon_fichier,$cmp);

	if (validemail()) {
		$my_file=fopen("login.txt", "r")
		while (feof($my_file)) {
			
		}
	}

 ?>