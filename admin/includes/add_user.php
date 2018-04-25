
<?php


if(isset($_POST['create_user'],$_POST['user_role'],$_POST['user_email'])){


 	$user_firstname = $_POST['user_firstname'];
	$user_lastname = $_POST['user_lastname'];
	$user_role = $_POST['user_role'];

/*	$post_image = $_FILES['image']['name'];
	$post_image_temp = $_FILES['image']['tmp_name'];
	*/

	$username = $_POST['username'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];



	//move_uploaded_file($post_image_temp,"../images/$post_image");

	$query = "INSERT INTO users(user_firstname,user_lastname,user_role,username,user_email,user_password)";

	$query .="VALUES('{$user_firstname}',' {$user_lastname }','{$user_role}','{$username }','{$user_email}','{$user_password}')";

	$create_user_query = mysqli_query($connection,$query);
	header("Location: users.php");

	confirmQuery($create_user_query);



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
                            <input type="text" name="user_firstname" class="form-control">
                        </div>




                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" name="user_lastname" class="form-control">
                        </div>




                        <div class="form-group">
                            <select name="user_role" id="">

                                <option value="subscriber">Select Options</option>
                                <option value="admin">Admin</option>
                                <option value="subscriber">Subscriber</option>

                            </select>
                        </div>

                    </form>



                    <div class="form-group">
                        <label>User name</label>
                        <input type="text" name="username" class="form-control">
                    </div>




                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="user_email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="user_password" class="form-control">
                    </div>


                    <div class="form-group">
                        <button type="submit" name="create_user"  value="Add User" class="btn btn-default">Submit Button</button>
                    </div>


</form>








