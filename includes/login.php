
<?php include "db.php"; ?>

<?php session_start();  ?>



<?php
if (isset($_POST['login'])){

$username = $_POST['username'];
$password =	$_POST['password'];

$username=mysqli_real_escape_string($connection,$username);
$password=mysqli_real_escape_string($connection,$password);

	$query   = "SELECT*FROM users WHERE username = '{$username}'";
	$select_users_by_id = mysqli_query( $connection, $query );


	if (!$select_users_by_id){

		die("query failed man".mysqli_error($connection));

	}


		while ($row =mysqli_fetch_array($select_users_by_id)){

	        $db_user_id=$row['user_id'];
			$db_username=$row['username'];
			$db_user_password=$row['user_password'];
			$db_user_firstname=$row['user_firstname'];
			$db_user_lastname=$row['user_lastname'];
			$db_user_email=$row['user_email'];
			$db_user_image=$row['user_image'];
			$db_user_role=$row['user_role'];
			$db_randSalt=$row['randSalt'];


		}


	if ($username !==$db_username && $password !==$db_user_password) {

		header("Location:../index.php");


	}else if ($username ==$db_username && $password ==$db_user_password){

 $_SESSION['username'] = $db_username;
 $_SESSION['user_firstname'] = $db_user_firstname;
 $_SESSION['user_lastname'] = $db_user_lastname;
 $_SESSION['user_role'] = $db_user_role;


	header("Location:../admin");


	}else{

		header("Location:../index.php");


	}












}





?>






































