<?php
$app->put('/api/put-books/{id}', function ($request) {

    require_once('dbconnect.php');
    $id = $request->getAttribute('id');
    $query = "UPDATE `books` SET `book_title` = ?, `author` = ?, `amazon_url` = ? WHERE `id` = $id";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("sss", $book_title, $author, $amazon_url);
    $book_title = $request->getParsedBody()['book_title'];
    $author = $request->getParsedBody()['author'];
    $amazon_url = $request->getParsedBody()['amazon_url'];
    $stmt->execute();

});
?>