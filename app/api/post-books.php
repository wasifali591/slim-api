<?php
$app->post('/api/post-books', function ($request) {
    require_once('dbconnect.php');
        //$id = $request->getAttribute('id');

    $query = "INSERT INTO `books`(`book_title`,`author`,`amazon_url`) VALUES(?,?,?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("sss", $book_title, $author, $amazon_url);
    $book_title = $request->getParsedBody()['book_title'];
    $author = $request->getParsedBody()['author'];
    $amazon_url = $request->getParsedBody()['amazon_url'];
    $result = $stmt->execute();
});
?>