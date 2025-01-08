<?php

require_once('models/connections.php');


// Create
function new_article($post): bool {
    if (!empty($post)) {
        $now = new DateTime();
        $articleAddRequest = "INSERT INTO articles (title, description, content, published_at) VALUES 
        (:title, :description, :content, :published_at)";
        $queryinsert = dbConnect()->prepare(query: $articleAddRequest);
        return $queryinsert->execute(params: [
            ':title' => $post['title'],
            ':description' => $post['description'],
            ':content' => $post['content'],
            ':published_at' => date_format($now, "Y-m-d H:i:s"),
        ]);
    }
    return false;
}





// Read

    // Last
function getLastArticles(int $limit): array {
    $mysqli = dbConnect();

    $sql = "SELECT * FROM PostLostCat LIMIT ?";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $mysqli->error);
    }

    $stmt->bind_param("i", $limit);  
    $stmt->execute();
    $result = $stmt->get_result(); 

    $posts = [];
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row; 
    }

    $stmt->close();
    $mysqli->close();
    
    return $posts;  
}

    // One
function getArticle(int $id): array {
    $sql = 'SELECT title, description, content, published_at
    FROM articles WHERE id = :id';
    $query = dbConnect()->prepare(query: $sql);
    $query->bindParam(param: ":id", var: $id, type: PDO::PARAM_INT);
    $query->execute();
    return $query->fetchAll()[0];
}

function getArticles(): array {
    $sql = 'SELECT title, description, content, published_at, id
    FROM articles ORDER BY published_at DESC';
    $query = dbConnect()->prepare(query: $sql);
    $query->execute();
    return $query->fetchAll();
}

// Update
function edit_article($post, $id) {
    if (!empty($post)) {
        $articleEditRequest = "UPDATE articles SET 
        title = :title, description = :description, content = :content
        WHERE id = :id";
        $queryinsert = dbConnect()->prepare(query: $articleEditRequest);
        return $queryinsert->execute(params: [
            ':title' => $post['title'],
            ':description' => $post['description'],
            ':content' => $post['content'],
            ':id' => $id,
        ]);
    }
    return false;
}

// Delete   

function deleteArticle(int $id): void {
    $sqldelete = "DELETE FROM articles WHERE id = :id";
    $query = dbConnect()->prepare(query: $sqldelete);
    $query->bindParam(param: ":id", var: $id, type: PDO::PARAM_INT);
    $query->execute();
}