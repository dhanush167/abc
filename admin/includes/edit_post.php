

<?php

if(isset($_GET['p_id'])) {

	$the_post_id = $_GET['p_id'];

}

	$query   = "SELECT*FROM posts WHERE post_id = $the_post_id";
	$select_posts_by_id = mysqli_query( $connection, $query );

	while ( $row = mysqli_fetch_assoc( $select_posts_by_id ) ) {



		$post_author        = $row['post_author'];
		$post_title         = $row['post_title'];
		$post_category_id   = $row['post_category_id'];
		$post_status        = $row['post_status'];
		$post_image         = $row['post_image'];
		$post_tags          = $row['post_tags'];
		$post_content       = $row['post_content'];
		$post_date          = $row['post_date'];

	}

if(isset($_POST['update_post'])){


	$post_author = $_POST['post_author'];
	$post_title = $_POST['post_title'];
	$post_category_id = $_POST['post_category'];
	$post_status = $_POST['post_status'];
	$post_image = $_FILES['image']['name'];
	$post_image_temp = $_FILES['image']['tmp_name'];
	$post_content = $_POST['post_content'];
	$post_tags = $_POST['post_tags'];



	move_uploaded_file($post_image_temp, "../images/$post_image");

	if(empty($post_image)){

	    $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
	    $select_image = mysqli_query($connection,$query);
	    while ($row = mysqli_fetch_array($select_image)){

	        $post_image = $row['post_image'];
        }




    }



$query = "UPDATE posts SET ";

$query.="post_title ='{$post_title}',";
	$query.="post_title ='{$post_title}',";
	$query.="post_category_id ='{$post_category_id}',";
	$query.="post_date = now(),";
	$query.="post_author ='{$post_author}',";
	$query.="post_status ='{$post_status}',";
	$query.="post_tags ='{$post_tags}',";
	$query.="post_content ='{$post_content}',";
	$query.="post_image = '{$post_image}'";
	$query.="WHERE post_id ={$the_post_id} ";


$update_post = mysqli_query($connection,$query);

confirmQuery($update_post);

}

















?>






<div id="page-wrapper">

	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-6">

				<form  action="" method="post" enctype="multipart/form-data">

					<div class="form-group">
						<label>Post title</label>
						<input type="text"   value="<?php echo 	$post_title;   ?>"  name="post_title" class="form-control">
					</div>



					<div class="form-group">
                        <select name="post_category" id="">
                            <?php
                            $query="SELECT * FROM categories ";
                            $select_categories = mysqli_query($connection,$query);

                            confirmQuery($select_categories);


                            while ($row=mysqli_fetch_assoc($select_categories)) {
	                            $cat_id    = $row['cat_id'];
	                            $cat_title = $row['cat_title'];

	                            echo "<option value='$cat_id'>{$cat_title}";


                            }

                            ?>




                        </select>

					</div>




					<div class="form-group">
						<label>Post Authour</label>
						<input type="text" value="<?php echo $post_author;   ?>" name="post_author" class="form-control">
					</div>




					<div class="form-group">
						<label>Post Status</label>
						<input type="text" name="post_status"  value="<?php echo $post_status;   ?>" class="form-control">
					</div>



					<div class="form-group">
						<label>Post Image</label><br>
                        <img width="200px" src="../images/<?php echo $post_image; ?>">
						<input type="file" name="image" >
					</div>



					<div class="form-group">
						<label>Post Tags</label>
						<input type="text" value="<?php echo $post_tags;   ?>" name="post_tags" class="form-control">
					</div>




					<div class="form-group">
						<label>Post Content</label>
						<textarea name="post_content"  class="form-control" cols="30" rows="10"><?php echo $post_content;  ?> </textarea>
					</div>


					<div class="form-group">
						<button type="submit" name="update_post"  value="Update Post" class="btn btn-default">submit</button>

					</div>


				</form>








































