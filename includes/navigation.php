<?php include "db.php" ?>

<style>


    .navbar-inverse .navbar-nav>li>a {
        color: #fff5f5;
    }

    .navbar-inverse .navbar-brand {
        color: rgb(229, 228, 227);
    }










</style>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin">Cms Front</a>
                               </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <a class="navbar-brand" href="index.php">Home</a>
                    <form  action="search.php" method="post" class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text"  name="search"  class="form-control" placeholder="Search">
                        </div>
                        <button name="submit" type="submit" class="btn btn-default">Submit</button>
                    </form>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



