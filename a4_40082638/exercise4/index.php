<?php

// Import all the models
(function($path) {
    $files = scandir($path);
    foreach($files as $file) {
        if ($file === "." || $file === "..") {
            continue;
        }
        require $path.$file;
    }
})("./model/");

//Map the data to models
$context = (function () {
    $cottages = array_map(function($e) {
        return new Cottage(
            $e["maxPeople"],
            $index = $e["index"],
            $maxPeople = $e["maxPeople"],
            $allowSmoking = $e["allowSmoking"],
            $allowCats = $e["allowCats"], 
            $allowDogs = $e["allowDogs"], 
            $allowPets = $e["allowPets"], 
            $size = $e["size"], 
            $location = $e["location"],
            $address = $e["address"],
            $price = $e["price"], 
            $ammenities = $e["ammenities"],
            $image = $e["image"]
        );
    }, json_decode(file_get_contents("./app_data/cottages.json"), true));

    $users = array_map(function($e) {
        $data = explode(":", $e);
        return new User(
            $username = trim($data[0]),
            $password = trim($data[1])
        );
    }, explode("\n", file_get_contents("./app_data/users.csv")));

    return (object) ["cottages" => $cottages, "users" => $users];
})();

$root = $_SERVER["DOCUMENT_ROOT"];

session_start();
function insertToTemplate($context) {
    $path = $_SERVER["REQUEST_URI"];
    if ($path == "/") {
        $path = "/home/home";
    }
    if (substr($path, -1) == '/') {
        $path = substr($path, 0, -1);
    }
    require "./views/$path.php";
}

require "./views/shared/_template.php";