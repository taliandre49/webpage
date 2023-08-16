<?php
$title = 'About Me';
$nav_com_class = " ";
$nav_about_class = "active_page";
$nav_home_class = " ";
$nav_work_class = " ";
$nav_contact = " ";
$nav_confirmation = " ";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="Width=device-width, initial-scale=1" />

    <title><?php echo $title; ?> </title>
    <link rel="stylesheet" type="text/css" href="/public/styles/site.css" />
</head>

<body>
    <header>
        <?php include('includes/headerpartial.php'); ?>
        <?php include('includes/titlepartial.php'); ?>
    </header>
    <h3>My Thought Process</h3>
    <p>I genuinely enjoy working on cutting-edge projects and creating innovative technologies in the hopes that they may one day become a reality and significantly improve our quality of life</p>
    <h3> A Few Fun Facts </h3>
    <p> Im a daughter, the youngest sibling, I have a dog named Rocky, my favorite number is 49 and I prefer cold coffee or hot coffee (even in the winter) </p>


    <h3> Things that have inspired me:</h3>
    <ul>
        <li> My Family </li>
        <li> CS-3110(Professor Clarkson)</li>
        <li> USWNT wining the world Cup twice in a row! </li>
    </ul>
    <h3> Things I enjoy Doing</h3>
    <ul>
        <li> Playing soccer</li>
        <li> Spending time with my family and dog</li>
        <li> Dancing </li>
        <li> Discovering knew music </li>
        <li> Snowboarding</li>
        <li> Lifting weights </li>
    </ul>

    <h3>Favorite Quote</h3>
    <blockquote>
        <p> "Awake, arise or be for ever fall'n" - John Milton. </p>
    </blockquote>

</body>

</html>
