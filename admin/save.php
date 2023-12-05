<?php
global $link;
include("includes/connect.php");

$cat = $_POST['cat'];
$cat_get = $_GET['cat'];
$act = $_POST['act'];
$act_get = $_GET['act'];
$id = $_POST['id'];
$id_get = $_GET['id'];


if ($cat == "about" || $cat_get == "about") {
    $name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
    $surname = addslashes(htmlentities($_POST["surname"], ENT_QUOTES));
    $phone = addslashes(htmlentities($_POST["phone"], ENT_QUOTES));
    $email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
    $address = addslashes(htmlentities($_POST["address"], ENT_QUOTES));
    $jobs = addslashes(htmlentities($_POST["jobs"], ENT_QUOTES));
    $title = addslashes(htmlentities($_POST["title"], ENT_QUOTES));
    $text = addslashes(htmlentities($_POST["text"], ENT_QUOTES));


    if ($act == "add") {
        mysqli_query($link, "INSERT INTO `about` (  `name` , `surname` , `phone` , `email` , `address` , `jobs` , `title` , `text` ) VALUES ( '" . $name . "' , '" . $surname . "' , '" . $phone . "' , '" . $email . "' , '" . $address . "' , '" . $jobs . "' , '" . $title . "' , '" . $text . "' ) ");
    } elseif ($act == "edit") {
        mysqli_query($link, "UPDATE `about` SET  `name` =  '" . $name . "' , `surname` =  '" . $surname . "' , `phone` =  '" . $phone . "' , `email` =  '" . $email . "' , `address` =  '" . $address . "' , `jobs` =  '" . $jobs . "' , `title` =  '" . $title . "' , `text` =  '" . $text . "'  WHERE `id` = '" . $id . "' ");
    } elseif ($act_get == "delete") {
        mysqli_query($link, "DELETE FROM `about` WHERE id = '" . $id_get . "' ");
    }
    header("location:" . "about.php");
}

if ($cat == "admins" || $cat_get == "admins") {
    $name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
    $email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
    $password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
    $role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


    if ($act == "add") {
        mysqli_query($link, "INSERT INTO `admins` (  `name` , `email` , `password` , `role` ) VALUES ( '" . $name . "' , '" . $email . "' , '" . md5($password) . "', '" . $role . "' ) ");
    } elseif ($act == "edit") {
        mysqli_query($link, "UPDATE `admins` SET  `name` =  '" . $name . "' , `email` =  '" . $email . "' , `role` =  '" . $role . "'  WHERE `id` = '" . $id . "' ");
    } elseif ($act_get == "delete") {
        mysqli_query($link, "DELETE FROM `admins` WHERE id = '" . $id_get . "' ");
    }
    header("location:" . "admins.php");
}

if ($cat == "gallery" || $cat_get == "gallery") {
    $location = addslashes(htmlentities($_POST["location"], ENT_QUOTES));
    $text = addslashes(htmlentities($_POST["text"], ENT_QUOTES));


    if ($act == "add") {
        mysqli_query($link, "INSERT INTO `gallery` (  `location` , `text` ) VALUES ( '" . $location . "' , '" . $text . "' ) ");
    } elseif ($act == "edit") {
        mysqli_query($link, "UPDATE `gallery` SET  `location` =  '" . $location . "' , `text` =  '" . $text . "'  WHERE `id` = '" . $id . "' ");
    } elseif ($act_get == "delete") {
        mysqli_query($link, "DELETE FROM `gallery` WHERE id = '" . $id_get . "' ");
    }
    header("location:" . "gallery.php");
}

if ($cat == "resume" || $cat_get == "resume") {
    $title = addslashes(htmlentities($_POST["title"], ENT_QUOTES));
    $company = addslashes(htmlentities($_POST["company"], ENT_QUOTES));
    $years = addslashes(htmlentities($_POST["years"], ENT_QUOTES));
    $text = addslashes(htmlentities($_POST["text"], ENT_QUOTES));


    if ($act == "add") {
        mysqli_query($link, "INSERT INTO `resume` (  `title` , `company` , `years` , `text` ) VALUES ( '" . $title . "' , '" . $company . "' , '" . $years . "' , '" . $text . "' ) ");
    } elseif ($act == "edit") {
        mysqli_query($link, "UPDATE `resume` SET  `title` =  '" . $title . "' , `company` =  '" . $company . "' , `years` =  '" . $years . "' , `text` =  '" . $text . "'  WHERE `id` = '" . $id . "' ");
    } elseif ($act_get == "delete") {
        mysqli_query($link, "DELETE FROM `resume` WHERE id = '" . $id_get . "' ");
    }
    header("location:" . "resume.php");
}

if ($cat == "skills" || $cat_get == "skills") {
    $name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
    $value = addslashes(htmlentities($_POST["value"], ENT_QUOTES));


    if ($act == "add") {
        mysqli_query($link, "INSERT INTO `skills` (  `name` , `value` ) VALUES ( '" . $name . "' , '" . $value . "' ) ");
    } elseif ($act == "edit") {
        mysqli_query($link, "UPDATE `skills` SET  `name` =  '" . $name . "' , `value` =  '" . $value . "'  WHERE `id` = '" . $id . "' ");
    } elseif ($act_get == "delete") {
        mysqli_query($link, "DELETE FROM `skills` WHERE id = '" . $id_get . "' ");
    }
    header("location:" . "skills.php");
}

if ($cat == "social" || $cat_get == "social") {
    $name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
    $link = addslashes(htmlentities($_POST["link"], ENT_QUOTES));


    if ($act == "add") {
        mysqli_query($link, "INSERT INTO `social` (  `name` , `link` ) VALUES ( '" . $name . "' , '" . $link . "' ) ");
    } elseif ($act == "edit") {
        mysqli_query($link, "UPDATE `social` SET  `name` =  '" . $name . "' , `link` =  '" . $link . "'  WHERE `id` = '" . $id . "' ");
    } elseif ($act_get == "delete") {
        mysqli_query($link, "DELETE FROM `social` WHERE id = '" . $id_get . "' ");
    }
    header("location:" . "social.php");
}
?>