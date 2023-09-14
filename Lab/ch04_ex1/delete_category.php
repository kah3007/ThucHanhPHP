<?php
require_once('database.php');

// Get IDs
$category_id = filter_input(INPUT_POST, 'categoryID', FILTER_VALIDATE_INT);
$categoryName = filter_input(INPUT_POST, 'categoryName');

// Delete the product from the database
if ($category_id != false && $categoryName != false) {
    $query = 'DELETE FROM categories
              WHERE categoryID = :categoryID';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryID', $category_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}
// Display the Product List page
include('category_list.php');
?>