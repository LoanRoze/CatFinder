<?php

require_once('models/connections.php');

function new_user($post) {
    if (!empty($post)) {
        $mysqli = dbConnect();
                
        $insertRequest = "INSERT INTO utilisateurs (nom, email, num_phone) VALUES 
        (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($insertRequest);

        if ($stmt === false) {
            die("Erreur lors de la préparation de la requête : " . $mysqli->error);
        }
        $stmt->bind_param("ssss", 
            $post['nom'], 
            $post['email'], 
            $post['num_phone'], 
            $post['password'], 
        );  
        return $stmt->execute();
    }
    return false;
}

function getUsers() {
    $mysqli = dbConnect();

    $sql = "SELECT * FROM utilisateurs";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $mysqli->error);
    }


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

function getUser($id) {
    $mysqli = dbConnect();

    $sql = "SELECT * FROM utilisateurs WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $mysqli->error);
    }
    $stmt->bind_param("i", 
    $id, 
    );

    $stmt->execute();
    $result = $stmt->get_result();

    $posts = [];
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row; 
    }

    $stmt->close();
    $mysqli->close();
    if (count($posts) != 0) {
        return $posts[0];  
    } else {
        return false;
    }
}

function checkUser($nom, $password) {
    $mysqli = dbConnect();

    $sql = "SELECT * FROM utilisateurs 
            WHERE nom = ? AND password = ?";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête : " . $mysqli->error);
    }

    $stmt->bind_param("ss", 
            $nom, 
            $password
    );


    $stmt->execute();
    $result = $stmt->get_result();

    $posts = [];
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row; 
    }

    $stmt->close();
    $mysqli->close();
    if (count($posts) != 0) {
        return $posts[0]['id'];
    } else {
        return false;
    }
    
}

function sessionInsert($user_infos) {
    $_SESSION['id'] = $user_infos['id'];
    $_SESSION['nom'] = $user_infos['nom'];
    $_SESSION['email'] = $user_infos['email'];
    $_SESSION['num_phone'] = $user_infos['num_phone'];
    $_SESSION['password'] = $user_infos['password'];
}

function checkIfLoggedInfos() {
    if (isset($_SESSION['id'])) {
        return true;
    }
    return false;
}