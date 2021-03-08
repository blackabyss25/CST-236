<?php

require_once 'UserDataService.php';
require_once 'User.php';

$u = new UserDataService();

echo "FindByFirstName - Query: K";
echo "<hr>";
echo json_encode($u->FindByFirstName(K), TRUE);
echo "<hr>";


echo "FindByLastName - Query: S";
echo "<hr>";
echo json_encode($u->FindByLastName(S), TRUE);
echo "<hr>";






echo "<hr>";
/*
if($u->deleteItem(117)){
    echo "117 deleted.<br>";
}
else {
    echo "failed to delete 117";
}
*/



echo "Update User";
echo "<hr>";

$newguy = new User(122, "Tom", "Brady");

echo "Originally...<br>";
echo json_encode($u->FindByID(122), TRUE);
$u->updateItem(122, $newguy);
echo "Is Now...<br>";
echo json_encode($u->FindByID(122), TRUE);
echo "<hr>";