


<div class="col-md-4">


   

   
    <div class="well">
    <h4>Blog search</h4>
       <form action="search.php" method="post">
        <div class="input-group">
          <input type="text" name="search" class="form-control">
         <span class="input-group-btn">
             <button name="submit" class="btn btn-default" type="submit">

        <span class="glyphicon glyphicon-search"></span>

      </button>

         </span>

        </div>
        </form>
    </div>

<!--login registration-->

    <div class="well">
        <h4>Login</h4>
        <form action="includes/login.php" method="post">

            <div class="form-group">
                <input type="text" name="username" placeholder="Enter Username" class="form-control">
            </div>

            <br>

            <div class="form-group">
                <input type="password" name="password" placeholder="Enter password" class="form-control">
            </div>

            <span class="input-group-btn">

                <button class="btn btn-danger" type="submit"   name="login"> Submit >> </button>

            </span>


        </form>
    </div>
















    <div class="well">






	<?php


	$query="SELECT*FROM categories";
	$select_all_categories_sidebar=mysqli_query($connection,$query);


	?>




























    <h4>Collages in Colombo</h4>

    <div class="row">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">


            <?php

            while ($row=mysqli_fetch_assoc( $select_all_categories_sidebar)) {
                $cat_title = $row['cat_title'];
	            $cat_id = $row['cat_id'];

                echo"<li><strong><a href='category.php?category=$cat_id'>{$cat_title} </strong></a> </li>";

            }



            ?>
                </ul>
            </div>

                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>


            </div>
              </div>
            </div>

<?php include "widget.php"; ?>

        </div>

