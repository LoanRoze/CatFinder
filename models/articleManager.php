<?php

require_once('models/connections.php');


// Create
function new_lost_cat($post): bool {
    if (!empty($post)) {
        $mysqli = dbConnect();
        
        $now = new DateTime();
        
        $insertRequest = "INSERT INTO PostLostCat (nom, image_url, description, ville, id_utilisateur, published_at) VALUES 
        (?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($insertRequest);

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
        $mysqli = dbConnect();
        
        $now = new DateTime();
        
        $insertRequest = "INSERT INTO PostFoundCat (image_url, description, localisation, id_utilisateur, published_at) VALUES 
        (?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($insertRequest);

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
function getLastLostCats(int $limit): array {
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

function getLastFoundCats(int $limit): array {
    $mysqli = dbConnect();

    $sql = "SELECT * FROM PostFoundCat LIMIT ?";
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
function getLostCat(int $id): array {
    $mysqli = dbConnect();

    $sql = "SELECT * FROM PostLostCat WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $mysqli->error);
    }

    $stmt->bind_param("i", $id);  
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

function getFoundCat(int $id): array {
    $mysqli = dbConnect();

    $sql = "SELECT * FROM PostFoundCat WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $mysqli->error);
    }

    $stmt->bind_param("i", $id);  
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

    // Every
function getLostCats(): array {
    $mysqli = dbConnect();

    $sql = "SELECT * FROM PostLostCat";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $mysqli->error);
    }

    // $stmt->bind_param("s", $table);  
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
function getFoundCats(): array {
    $mysqli = dbConnect();

    $sql = "SELECT * FROM PostFoundCat";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $mysqli->error);
    }

    // $stmt->bind_param("s", $table);  
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