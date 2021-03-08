<?php
require_once 'BusinessService.php';

$searchPhrase = $_GET['name'];


$bs = new BusinessService();
$users = $bs->FindByFirstName($searchPhrase);



?>

<h2>Search Results</h2>
<hr>
<?php 
if($users){
    include('_displayAllUsers.php');
}
else {
    echo "no results found.";
}
?>
<hr>
