<?php

$name = "";
$email = "";
$region = "";
$season = "";
$interests = [];    
$participants = 0;
$message = "";
$errors = [];

if (!empty($_POST["name"])) {
    $name = $_POST["name"];
    if (ctype_alpha(str_replace(" ", "", $name)) === false) {
        $errors[] = "name should contain only alphabets or space";
    }
    } else {
        $errors[] = "Name can't be empty";
    }

    if (!empty($_POST["email"])) {
        $email = $_POST["email"];
        if (filter_var($email, FILTER_VALIDATE_EMAIL) !== $email) {
            $errors[] = "Email is not valid";
        }
        } else {
            $errors[] = "Email can't be empty";

        }
    
    if (!empty($_POST["region"])) {
        $region = $_POST["region"];
        $approved_reg = ["Asia", "Oceania", "Europe", "North America", "South America"];
        if (!in_array($region, $approved_reg)) {
            $errors[] = "Region is not valid"; 
    }
} else {
    $errors[] = "Region is not selected";
} 

    if (!empty($_POST["season"])) {
        $season = $_POST["season"];
        $approved_season = ["Summer", "Winter", "Spring", "Autumn"];
        if (!in_array($season, $approved_season)) {
            $errors[] = "Season is not valid";
        }
    } else {
        $errors[] = "No valid season is selected";
    }    


    if (!empty($_POST["interests"])) {
        $interests = $_POST["interests"];
        $allowed_interests = ["Photography", "Trekking", "Hiking", "Fishing", "Camping"];
        foreach ($interests as $interest) {
            if (!in_array($interest, $allowed_interests)) {
                $errors[] = "Activity is invalid";
            }
        }
    } else {
        $errors[] = "No item  is selected";
    }

    if (!empty($_POST["participants"])) {
        $participants = (int) $_POST["participants"];
    } else {
        $errors[] = "No participants in mentioned";
    }

    if (!empty($_POST["message"])) {
        $message = $_POST["message"];   
    } else {
        $errors[] = "No message is written";
    }

if ($errors) {
    echo "<pre>";
    print_r($errors);
    echo "</pre>";
} else {
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Region: " . $region . "<br>"; 
    echo "Season: " . $season . "<br>";
    echo "Interests: ";
    var_dump($interests);
    echo "<br>";
    echo "Participants: " . $participants . "<br>";
    echo "Message: " . $message . "<br>";   
    
    
}
