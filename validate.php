<?php	
	session_start();
	require 'db_constants.php';
	require 'db_inc.php';
	function slowhash($unique_salt,$password){
		$hash=sha1($unique_salt.$password);
		for($i=0;$i<1000;$i++){
			$hash=sha1($hash);
		}
		return $hash;
	}
	if(isset($_POST['submit'])){
		$username=trim($_POST['username']);
		$entered_password=trim($_POST['password']);
		$query='SELECT unique_salt,password FROM login WHERE username="'.mysqli_real_escape_string($db,$username).'"';
		$result=mysqli_query($db,$query) or die(mysqli_error($db));
		if(mysqli_num_rows($result)>0){
			$row=mysqli_fetch_assoc($result);
			$unique_salt=$row['unique_salt'];
			$entered_password=sha1($entered_password);
			$password=slowhash($unique_salt,$entered_password);
			if($password==$row['password']){
				$_SESSION['username']=$username;
				$_SESSION['logged']=1;
				if(isset($_POST['remember'])){
					//set cookie...expire after 10 days...
					setcookie('username',$username,time()+3600*5);
				}
				header('Refresh:1;URL=home.php');
				die();
				}
			else{
				header('Refresh:1;URL=login.php?error='.$password.'&e='.$row['password']);
			}	
		}
		else{
			header('Refresh:0;URL=login.php?error=1');
		}
	}
	else{
		header('Refresh:0;URL=login.php');
	}
?>