<!DOCTYPE html>
<html>
<head>
	<title>mentor</title>
	
</head>
<body>
	<br/>
	<br/>
	<center><h2>Login Mentor</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" name="login" id="login" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>

<?php 

if( isset($_POST["login"])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($kon, "select * from tbl_mentor where username='$username' and password='$password'");
    $cek = mysqli_num_rows($login);
    $am = mysqli_fetch_array($login);
    echo "$am[sebagai]";
	
    if($cek = true){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "mentor";
        header("location:/kuycoding/?p=home");
    }else{
        echo "<div id='gagal'></div>";
        header("location:/kuycoding/login.php");	
    }
}
?>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
   

</script>
</html>