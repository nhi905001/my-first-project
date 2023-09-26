<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE categoryID = :category_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['categoryName'];
    return $category_name;
}


// Thêm danh mục
function add_category($categoryName) {
    global $db;
    $query = 'INSERT INTO categories(categoryName) VALUES (?)';
    $statement = $db->prepare($query);
    $statement->bindValue(1, $categoryName);
    $statement->execute();
    $statement->closeCursor();
}

// Xóa danh mục

function delete_category($category_id) {
    global $db;
    $query = 'DELETE FROM categories WHERE categoryID = ?';
    $statement = $db->prepare($query);
    $statement->bindValue(1, $category_id);
    $statement->execute();
    $statement->closeCursor();
}
?>