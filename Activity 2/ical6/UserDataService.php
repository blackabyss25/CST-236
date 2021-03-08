<?php


require_once 'Database.php';
require 'User.php';

class UserDataService {
    
    
    function FindByFirstName($searchQuery){
        $db = new Database();
        $sql_query = "SELECT ID, FIRST_NAME, LAST_NAME FROM users WHERE FIRST_NAME LIKE '%$searchQuery%'";
        $conn = $db->getConnection();
        $result = $conn->query($sql_query);
        if(!$result){
            exit;
        }
        if($result->num_rows == 0){
            return null;
        }
        else {
            $user_array = array();
            while ($user = $result->fetch_assoc()) {
                array_push($user_array, $user);
            }
            return $user_array;
        }
    }
    
    function FindByLastName($searchQuery){
        $db = new Database();
        $sql_query = "SELECT ID, FIRST_NAME, LAST_NAME FROM users WHERE LAST_NAME LIKE '%$searchQuery%'";
        $conn = $db->getConnection();
        $result = $conn->query($sql_query);
        if(!$result){
            exit;
        }
        if($result->num_rows == 0){
            return null;
        }
        else {
            $user_array = array();
            while ($user = $result->fetch_assoc()) {
                array_push($user_array, $user);
            }
            return $user_array;
        }
    }
    
    function FindByID($id){
        $db = new Database();
        $sql_query = "SELECT ID, FIRST_NAME, LAST_NAME FROM users WHERE ID =".$id;
        $conn = $db->getConnection();
        $result = $conn->query($sql_query);
        if(!$result){
            echo "assume sql has error.<br>";
            exit;
        }
        if($result->num_rows == 0){
            return null;
        }
        else {
            echo "I found " . $result->num_rows . " results.<br>";
            $user_array = array();
            while ($user = $result->fetch_assoc()) {
                array_push($user_array, $user);
            }
            return $user_array;
        }
    }
    
    function deleteItem($id){
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("DELETE FROM users WHERE ID = ?");
        
        if(!$stmt){
            echo "something wrong in the binding process. sql error!";
            exit;
        }
        
        $stmt->bind_param("s", $id);
        
        $stmt->execute();
        
        if($stmt->affected_rows > 0){
            return true;
        }
        else {
            return false;
        }
        
    }
    
    function updateItem($id, $user){
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("UPDATE users SET FIRST_NAME = ?, LAST_NAME = ? WHERE ID = ? LIMIT 1");
        
        if(!$stmt){
            echo "something wrong in the binding process. sql error!";
            exit;
        }
        
        $first = $user->getFirstName();
        $last = $user->getLastName();
        $stmt->bind_param("ssi", $first, $last, $id);
        $stmt->execute();
        
        if($stmt->affected_rows > 0){
            return true;
        }
        else {
            return false;
        }
    }
    
}