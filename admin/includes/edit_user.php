
<?php


if(isset($_GET['edit_user'])){

  $the_user_id = $_GET['edit_user'];


  	$query   = "SELECT*FROM users WHERE user_id = $the_user_id";
  	$select_users_query_id = mysqli_query( $connection, $query );

  	while ( $row = mysqli_fetch_assoc($select_users_query_id) ) {


  		$user_id        = $row['user_id'];
  		$username         = $row['username'];
	$user_password        = $row['user_password'];
	$user_firstname         = $row['user_firstname'];
  		$user_lastname         = $row['user_lastname'];
  	$user_email      = $row['user_email'];
  $user_role         = $row['user_role'];


  	}

}









if(isset($_POST['edit_user'],$_POST['user_role'],$_POST['user_email'])){


	$user_firstname = $_POST['user_firstname'];
	$user_lastname = $_POST['user_lastname'];
	$user_role = $_POST['user_role'];

	/*	$post_image = $_FILES['image']['name'];
		$post_image_temp = $_FILES['image']['tmp_name'];
		*/

	$username = $_POST['username'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];



/*sdfkldjsfkjsdkjfkdsjfkljsdlfkjsdkljf;akljsfdf*/


	$query = "UPDATE users SET ";

	$query.="user_firstname ='{$user_firstname}',";
		$query.="user_lastname ='{$user_lastname}',";
		$query.="user_role ='{$user_role}',";
		$query.="username ='{$username}',";
		$query.="user_email ='{$user_email}',";
	$query.="user_password ='{$user_password}'";
		$query.="WHERE user_id ={$the_user_id} ";


	$update_user = mysqli_query($connection,$query);

	confirmQuery($update_user);


}

?>

<!--users.php?villa=edit_user-->




<form  action="" method="post" enctype="multipart/form-data">


    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-6">

                    <form  action="" method="post" enctype="multipart/form-data">






                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" value="<?php echo $user_firstname;  ?>" name="user_firstname" class="form-control">
                        </div>




                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" name="user_lastname" value="<?php echo $user_lastname;    ?>"  class="form-control">
                        </div>




                        <div class="form-group">
                            <select name="user_role" id="">


                                <option value='subscriber'><?php echo $user_role; ?></option>


                                <?php

                                if ($user_role =='admin'){

                        echo "<option value='subscriber'>Subscriber</option>";


                                }else{

                                   echo "<option value='admin'>Admin</option>";

                                }



                                ?>




                            </select>
                        </div>

                    </form>



                    <div class="form-group">
                        <label>User name</label>
                        <input type="text" value="<?php echo $username;  ?>" name="username" class="form-control">
                    </div>




                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="<?php echo 	$user_email;  ?>" name="user_email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text"  value="<?php echo 	$user_password;  ?>" name="user_password" class="form-control">
                    </div>


                    <div class="form-group">
                        <button type="submit" name="edit_user"  value="edit User" class="btn btn-default">Submit Button</button>
                    </div>


</form>








