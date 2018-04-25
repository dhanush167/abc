

<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
$connection=mysqli_connect("localhost","root","","cms");
if ($connection){
	echo "HELLO MAN";
}
?>


<?php include "includes/header.php" ?>

<link rel="stylesheet" href="magnific-popup/magnific-popup.css">


<a class="test-popup-link" href="path-to-image.jpg">Open popup</a>

<!-- Magnific Popup core CSS file -->


<!-- Navigation -->

<?php       include "includes/navigation.php"               ?>

<div class="container">

    <div class="row">


        <div class="col-md-8">


            <div class="container">
                <div class="row">

                    <div class="col-md-12">



						<?php



                        if (isset($_GET['p_id'])){

                            $the_post_id = $_GET['p_id'];

                        }





						$query="SELECT*FROM posts WHERE post_id = $the_post_id";
						$select_all_posts_query=mysqli_query($connection,$query);
						while ($row=mysqli_fetch_assoc( $select_all_posts_query)) {
							$post_id = $row['post_id'];
							$post_title = $row['post_title'];
							$post_author = $row['post_author'];
							$post_date = $row['post_date'];
							$post_image = $row['post_image'];
							$post_content = $row['post_content'];


							?>




                            <!------First Blog post---->
                            <h2>

                                <a href="post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title ?></a>

                            </h2>

                            <p class="lead">

                                by<a href="index.php"><?php echo $post_author ?></a>

                            </p>

                            <p><span class="glyphicon glyphicon-time"></span>Post on  <?php echo $post_date   ?>                         </p>
                            <hr>
                            <img style="height: 200px;  width: 600px" class="img-responsive" src="images/<?php echo $post_image   ?>" alt="">

                            <hr>


                            <p style="width: 600px; text-align: justify"><?php echo $post_content ?> </p>


                            <hr>  <hr>  <hr>
	<?php       } ?>



                    </div>



                </div>

<div style="width: 600px; margin-bottom: 100px;" >



                <!-- Comments Form -->
                <div class="card my-4">
                    <h5 class="card-header">Leave a Comment:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <!-- Single Comment -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Commenter Name</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment with nested comments -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Commenter Name</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                        <div class="media mt-4">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Commenter Name</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>

                        <div class="media mt-4">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Commenter Name</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>

                    </div>
                </div>


</div>

                <div class="parent-container">
                    <a href="path-to-image-1.jpg">Open popup 1</a>
                    <a href="path-to-image-2.jpg">Open popup 2</a>
                    <a href="path-to-image-3.jpg">Open popup 3</a>
                </div>










                <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

                <!-- Magnific Popup core JS file -->
                <script src="magnific-popup/jquery.magnific-popup.js"></script>


                <script type="text/javascript">


                    $('.test-popup-link').magnificPopup({
                        type: 'image'
                        // other options
                    });





                </script>




            </div>



        </div>



        <!----pager---->



        <!-- sidebar -->



		<?php       include "includes/sidebar.php"               ?>



    </div>

    <hr>

    <hr>

    <!-- Footer -->
	<?php    include "includes/footer.php"                             ?>
</div>


<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

