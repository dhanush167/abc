<?php include "includes/admin_header.php" ?>



	<div id="wrapper">



	<!----navigation---->

	<?php include "includes/admin_navigation.php"; ?>





	<div id="page-wrapper">

		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
						WELCOME TO ADMIN DHANUSHKA
						<small>Author</small>
					</h1>


					<div class="col-xs-6">
                        <?php
                        insert_categories();

                            ?>


						<form action="" method="post">
							<div class="form-group">
								<label for="cat_title">Add Collage</label>
								<input class="form-control" type="text" name="cat_title">
							</div>


							<div class="form-group">
								<input class="btn btn-warning" type="submit" value="Add Collage" name="submit">
							</div>

						</form>

                        <?php
                        if(isset($_GET['edit'])){

                            $cat_id = $_GET['edit'];

                            include "includes/update_categories.php";



                        }


                        ?>








                    </div>

						<div class="col-xs-6">



                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>


									<?php

									findAllCategories();

									?>


                                    <?php
                                    deleteCategories();

                                    ?>





                                </tbody>
                            </table>


						</div>

					</div>

			</div>
			<!-- /.row -->

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- /#page-wrapper -->
<?php include "includes/admin_footer.php"; ?>