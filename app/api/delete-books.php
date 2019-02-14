<?php
    $app->delete('/api/delete-books/{id}', function ($request) {
        require_once('dbconnect.php');
        $id = $request->getAttribute('id');
        $query = "DELETE FROM `books` WHERE `id`='$id'";
        mysqli_query($mysqli,$query);
        $result=mysqli_affected_rows($mysqli);
        if (isset($result)) {
            header('Content-Type: application/json');
            echo json_encode($result);
        }
    });
?>