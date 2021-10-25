<?php

require_once 'UserDataService.php';


class BusinessService{
    
    function FindByFirstName($searchQuery){
       $users = array();
       $dbService = new UserDataService();
       $users = $dbService->FindByFirstName($searchQuery);
       return $users;
       
    }
    
    function FindByLastName($searchQuery){
        $users = array();
        $dbService = new UserDataService();
        $users = $dbService->FindByLastName($searchQuery);
        return $users;
    }
    
    function FindByID($id){
        $dbService = new UserDataService();
        $user = $dbService->FindByID($id);
        return $user;
    }
    
    function deleteItem($id){
        $dbService = new UserDataService();
        return $dbService->deleteItem($id);
        
    }
    
    function updateItem($id, $user){
        $dbService = new UserDataService();
        return $dbService->UpdateItem($id, $user);
    }
    
    
}