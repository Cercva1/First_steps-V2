<?php 

    require_once("User.php");
    require_once("ChildUser.php");

$user1 = new ChildUser("George", "tsertsvadzegio56@gmail.com", 1);
$user1 -> Introduction();

echo "<br>";

$user2 = new ChildUser("Nikola", "nikolasermovich@gmail.com", 2, "Admin"); 
$user2 -> Introduction();

echo "<br>";

$user3 = new ChildUser("Luka", "lukazk@gmail.com", 3);
$user3 -> Introduction();

echo "<br>";

echo "Default role for all workers is [ " . ChildUser::getDefaultRole() .  " ] ";

?>