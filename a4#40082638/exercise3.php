<?php 
$form = '<form method="GET" action="exercise3.php">
            <input type="text" name="phoneNumber"/>
            <input type="submit" name="submit" />
        </form>';

if (isset($_GET["submit"])) {
    $number = $_GET["phoneNumber"];
    if (preg_match("/^\d{3}-\d{3}-\d{4}$/", $number)) {
        echo "Thank you for submitting your phone number!";
    }
    else {
        echo "Phone number was of an incorrect format. Please re-enter it. <br />$form";
    }
}
else {
    echo $form;
}

