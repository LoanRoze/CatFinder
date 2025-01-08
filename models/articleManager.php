<?php

require_once('models/connections.php');


// Create
function new_lost_cat($post): bool {
    if (!empty($post)) {
        $mysql = dbConnect();
        
        $now = new DateTime();
        
        $insertRequest = "INSERT INTO PostLostCat (nom, image_url, description, ville, id_utilisateur, published_at) VALUES 
        (?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);

        if ($stmt === false) {
            die("Erreur lors de la préparation de la requête : " . $mysqli->error);
        }
        $stmt->bind_param("ssssid", 
            $post['nom'], 
            $post['image_url'], 
            $post['description'], 
            $post['ville'], 
            $post['id_utilisateur'], 
            $now
        );  
        return $stmt->execute();
    }
    return false;
}

function new_found_cat($post): bool {
    if (!empty($post)) {
        $mysql = dbConnect();
        
        $now = new DateTime();
        
        $insertRequest = "INSERT INTO PostFoundCat (image_url, description, localisation, id_utilisateur, published_at) VALUES 
        (?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);

        if ($stmt === false) {
            die("Erreur lors de la préparation de la requête : " . $mysqli->error);
        }
        $stmt->bind_param("ssssid", 
            $post['image_url'], 
            $post['description'], 
            $post['localisation'], 
            $post['id_utilisateur'], 
            $now
        );  
        return $stmt->execute();
    }
    return false;
}




// Read

    // Number Of
function getLastArticles(int $limit, string $table): array {
    $mysqli = dbConnect();

    $sql = "SELECT * FROM ? LIMIT ?";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $mysqli->error);
    }

    $stmt->bind_param("si", $table ,$limit);  
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
function getArticle(int $id, string $table): array {
    $mysqli = dbConnect();

    $sql = "SELECT * FROM ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $mysqli->error);
    }

    $stmt->bind_param("si", $table, $id);  
    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->close();
    $mysqli->close();

    return $result;
    
}
 

function getArticles(string $table): array {
    $mysqli = dbConnect();

    $sql = "SELECT * FROM ?";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $mysqli->error);
    }

    $stmt->bind_param("s", $table);  
    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->close();
    $mysqli->close();

    return $result;
    
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