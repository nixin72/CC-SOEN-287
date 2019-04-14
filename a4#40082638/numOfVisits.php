<?php

if (!isset($_COOKIE["visits"])) {
    setcookie("visits", 0, 0);
    setcookie("lastVisit", date("D F j G e Y"), 0);
    echo "<h2>Welcome to my web page! It is your first visit!</h2>";
}
else {
    setcookie("visits", $_COOKIE["visits"]+1, 0);
    echo "<h2>Hello, this is the #". $_COOKIE["visits"] . " time that you visit my page!</h2>";
    echo "<br />";
    echo "The last time you visited this page was ". $_COOKIE["lastVisit"];

    setcookie("lastVisit", date("D F j G:i:s T Y"), 0);
}

