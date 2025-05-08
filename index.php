<?php 
    include "chinese_scientists.php";


    foreach($chinese_scientists as $scientist){
        echo "Fullname: " .$scientist['firstname']." ".$scientist['lastname']. "<br />";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientists / China</title>
</head>
<body>
    
</body>
</html>