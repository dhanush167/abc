
<?php


if(isset($_POST['create_post'])){

    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_category_id = $_POST['post_category'];
   $post_status = $_POST['post_status'];

   $post_image = $_FILES['image']['name'];
   $post_image_temp = $_FILES['image']['tmp_name'];
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
    $post_comment_count = 4;


    move_uploaded_file($post_image_temp,"../images/$post_image");

    $query = "INSERT INTO posts(post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_comment_count,post_status)";

    $query .="VALUES('{$post_category_id}','{$post_title}',' {$post_author}', now(), '{$post_image}','{$post_content}','{$post_tags}','{$post_comment_count}','{$post_status}')";

    $create_post_query = mysqli_query($connection,$query);
	header("Location: posts.php");

	confirmQuery($create_post_query );



}



?>






		<form  action="" method="post" enctype="multipart/form-data">


                    <div id="page-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-6">

                                    <form  action="" method="post" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label>Post title</label>
                                            <input type="text"   name="post_title" class="form-control">
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

													echo "<option value='$cat_id'> {$cat_title}";


												}

												?>

                                            </select>
                                        </div>
                                    </form>










                                        <div class="form-group">
						<label>Post Authour</label>
						<input type="text" name="post_author" class="form-control">
					</div>




					<div class="form-group">
						<label>Post Status</label>
						<input type="text" name="post_status" class="form-control">
					</div>



                    <div class="form-group">
                        <label>Post Image</label>
                        <input type="file" name="image" >
                    </div>



                    <div class="form-group">
                        <label>Post Tags</label>
                        <input type="text" name="post_tags" class="form-control">
                    </div>




                    <div class="form-group">
                        <label>Post Content</label>
                        <textarea name="post_content" class="form-control" cols="30" rows="10"> </textarea>
                    </div>


<div class="form-group">
    <button type="submit" name="create_post"  value="Publish Post" class="btn btn-default">Submit Button</button>

</div>


				</form>








