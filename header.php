<?php
/**
 * Created by PhpStorm.
 * User: colinwilliams
 * Date: 14-03-09
 * Time: 10:24 AM
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="durham contractor barrie simcoe construction">

    <title>Jameson <?php if ($this_page != " ") echo(" | $this_page");?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <?php if ($this_page == "Services"){
        echo('<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="css/animate.css">
            <link rel="stylesheet" href="css/blueimp-gallery.min.css">
            <link rel="stylesheet" href="css/blueimp-gallery-indicator.css">
            <link href="css/small-business.css" rel="stylesheet">
            <link href="css/carousel.css" rel="stylesheet">
            <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">');
    }
    else{
    echo('<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="css/small-business.css" rel="stylesheet" type="text/css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">');
    }?>


</head>

<body>