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
                         WELCOME TO ADMIN
                            <?php
                           echo $_SESSION['user_firstname'].$_SESSION['user_lastname'];
                            ?>
                            <small>Author</small>
                        </h1>


<?php include "includes/admin_footer.php"; ?>