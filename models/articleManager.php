<?php

require_once('models/connections.php');


// Create
function new_lost_cat($post): bool {
    if (!empty($post)) {
        $mysqli = dbConnect();
        
        $now = date_format(new DateTime(), "Y-m-d");
        
        $insertRequest = "INSERT INTO PostLostCat (nom, image_url, description, ville, id_utilisateur, published_at) VALUES 
        (?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($insertRequest);

        if ($stmt === false) {
            die("Erreur lors de la préparation de la requête : " . $mysqli->error);
        }
        $stmt->bind_param("ssssis", 
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
        (?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($insertRequest);

        if ($stmt === false) {
            die("Erreur lors de la préparation de la requête : " . $mysqli->error);
        }
        $stmt->bind_param("ssssii", 
            $post['image_url'], 
            $post['description'], 
            $post['longitude'], 
            $post['latitude'], 
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

    $sql = "SELECT * FROM PostLostCat ORDER BY id DESC LIMIT ? ";
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

    $sql = "SELECT * FROM PostFoundCat ORDER BY id DESC LIMIT ? ";
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
function editLostCat($post, $id) {
    if (!empty($post)) {
        $mysqli = dbConnect();
        
        $now = new DateTime();
        
        $insertRequest = "UPDATE PostLostCat SET nom = ?, image_url = ?, description = ?, ville = ?, id_utilisateur = ?, published_at = ?
                            WHERE id = ?";
        $stmt = $mysqli->prepare($insertRequest);

        if ($stmt === false) {
            die("Erreur lors de la préparation de la requête : " . $mysqli->error);
        }
        $stmt->bind_param("ssssidi", 
            $post['nom'], 
            $post['image_url'], 
            $post['description'], 
            $post['ville'], 
            $post['id_utilisateur'], 
            $now,
            $id
        );  
        return $stmt->execute();
    }
    return false;
}
function editFoundCat($post, $id) {
    if (!empty($post)) {
        $mysqli = dbConnect();
        
        $now = new DateTime();
        
        $insertRequest = "UPDATE PostFoundCat SET nom = ?, image_url = ?, description = ?, ville = ?, id_utilisateur = ?, published_at = ?
                            WHERE id = ?";
        $stmt = $mysqli->prepare($insertRequest);

        if ($stmt === false) {
            die("Erreur lors de la préparation de la requête : " . $mysqli->error);
        }
        $stmt->bind_param("ssssiii", 
            $post['image_url'], 
            $post['description'], 
            $post['longitude'], 
            $post['latitude'], 
            $post['id_utilisateur'],  
            $now,
            $id
        );  
        return $stmt->execute();
    }
    return false;
}

// Delete   

function deleteLostCat(int $id): void {
    $mysqli = dbConnect();

    $deleteRequest = "DELETE FROM PostLostCat WHERE id = ?";
    $stmt = $mysqli->prepare($deleteRequest);

    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $mysqli->error);
    }

    $stmt->bind_param("i", $id);
    $stmt->execute();


    $stmt->close();
    $mysqli->close();
    return ;
}
function deleteFoundCat(int $id): void {
    $mysqli = dbConnect();

    $deleteRequest = "DELETE FROM PostFoundCat WHERE id = ?";
    $stmt = $mysqli->prepare($deleteRequest);

    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $mysqli->error);
    }

    $stmt->bind_param("i", $id);
    $stmt->execute();


    $stmt->close();
    $mysqli->close();
    return ;
}