<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/8/2017
 * Time: 1:08 PM
 */

function confirmQuery($result){

	global $connection;

	if(!$result){
		die("query fialded".mysqli_error($connection));

	}

}









function insert_categories(){

global $connection;

	if(isset($_POST['submit'])){


		$cat_title = $_POST['cat_title'];

		if($cat_title == "" || empty($cat_title)){

			echo "this field should not be empty";


		}else{

			$query = "INSERT INTO categories(cat_title)";
			$query .= "VALUE ('{$cat_title}') ";

			$create_category_query = mysqli_query($connection,$query);
			header("Location: categories.php");

			if(!$create_category_query){

				die('query failed'.mysqli_error($connection));

			}




		}


	}


function findAllCategories(){
		global $connection;


	$query="SELECT*FROM categories";
	$select_all_categories=mysqli_query($connection,$query);

	while ($row=mysqli_fetch_assoc($select_all_categories)) {
		$cat_id = $row['cat_id'];
		$cat_title = $row['cat_title'];
		echo "<tr>";
		echo"<td>{$cat_id} </td>";
		echo"<td>{$cat_title} </td>";
		echo"<td><a href='categories.php?delete={$cat_id}'>Delete </a></td>";
		echo"<td><a href='categories.php?edit={$cat_id}'>Update </a></td>";
		echo "<tr>";
	}



}


function deleteCategories(){

	global  $connection;


	if(isset($_GET['delete'])){

		$the_cat_id = $_GET['delete'];

		$query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";




		$delete_query =mysqli_query($connection,$query);

		header("Location: categories.php");



	}


}







}








