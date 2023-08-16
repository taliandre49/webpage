<?php
$title = 'My Work';
$nav_com_class = " ";
$nav_about_class = " ";
$nav_home_class = " ";
$nav_work_class = "active_page";
$nav_contact = " ";
$nav_confirmation = " ";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="Width=device-width, initial-scale=1" />

    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="/public/styles/site.css" />
</head>

<body>
    <header>
        <?php include('includes/headerpartial.php'); ?>
        <?php include('includes/titlepartial.php'); ?>
    </header>
    <div class="flexcontain">
        <div class="flexleft">
            <h3> Coding Classes Completed</h3>
            <ul>
                <li> CS 1110: Introduction to Comupting using Python</li>
                <li> CS 2110 Object-Oriented Programming & Data Structures (Java),</li>
                <li> CS 2800: Discrete Structures</li>
                <li> CS 3110: Data Structures and Functional Programming</li>
                <li> CS 1300: Introduction to Web Developmnet</li>
            </ul>
        </div>
        <div class="flexright">
            <h3> Academic Awards</h3>
            <ul>
                <li> Dean's List Spring 2022 </li>
                <li> Dean's List Fall 2022 </li>
            </ul>

        </div>
    </div>
    <h3> Projects Done </h3>
    <div class="flexcontainwork">
        <div class="flexcol">
            <img src="/public/images/dots.jpg" alt="image of Click a Dot Game">
            <!--This is a self created resource-->
            <p class="aligncent"> GUI Game "Click a Dot" (Java) </p>

            <img src="/public/images/maze.jpg" alt="image of McDiver Finds his ring Game">
            <!--This is a self created resource-->
            <p class="aligncent"> GUI Game Maze (Java) </p>
        </div>
        <div class="flexcol">
            <img src="/public/images/firepower.jpg" alt="image of interactive game">
            <!-- This is a self created resource -->
            <p class="aligncent"> "I've got the power!" </p>

            <img src="/public/images/checkers.jpg" alt="image of checkers">
            <!-- this is a self created resource -->
            <p class="aligncent"> Interactive Checkers (OCaml) </p>
        </div>
    </div>
</body>

</html>
