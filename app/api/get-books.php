<?php

//fetch all data
$app->get('/api/get-books', function () {
    require_once('dbconnect.php');
    $query = "select * from books order by id";
    $result = $mysqli->query($query);

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    if (isset($data)) {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

// fetch single row 
$app->get('/api/get-books/{id}', function ($request) {
    require_once('dbconnect.php');
    $id = $request->getAttribute('id');
    $query = "select * from books where id=$id";
    $result = $mysqli->query($query);
    $data[] = $result->fetch_assoc();
    if (isset($data)) {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});