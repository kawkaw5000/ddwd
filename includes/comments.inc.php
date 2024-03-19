<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $comments = $_POST['comments'];

    try {
       /*
        INSERT COMMENTS QUERY
       */
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
