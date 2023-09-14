<?php 
    $categoryName = filter_input(INPUT_POST,'categoryName1');
    $categoryID = filter_input(INPUT_POST,'categoryID1',FILTER_VALIDATE_INT);
    if ($categoryID == null || $categoryID == false ||$categoryName == null) {
        $error = "Invalid category data. Check all fields and try again.";
        include('error.php');
    } else {
        require_once('database.php');

        // Add the product to the database  
        $query = 'INSERT INTO categories
                    (categoryID, categoryName)
                VALUES
                    (:categoryID, :categoryName)';
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->bindValue(':categoryName', $categoryName);
        $statement->execute();
        $statement->closeCursor();

        // Display the Product List page
        include('category_list.php');
    }
?>
