<?php
$title = 'My Communities';
$nav_com_class = "active_page";
$nav_about_class = "";
$nav_home_class = " ";
$nav_work_class = " ";
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
    <div class="flexcontaincom">
        <div class="flexcol spaceright">
            <!-- Source: https://www.facebook.com/groups/279848672042572/ -->
            <img src="/public/images/bsp.jpg" alt="bsp">
            <p>Source: <cite><a href="https://www.facebook.com/groups/279848672042572/">BSP Facebook</p></a></cite>
            <h4> Biology scholars Program</h4>
            <p> Within Biology Scholars Program I am able to cut down cultural barriers that can hinder academic development to promote the success of students from economic, gender, ethnic and cultural groups historically underrepresented in STEM fields.
            </p>
            <!-- Source: https://www.facebook.com/TheWomensNetworkCornell/photos/a.104375001030924/104375491030875/ -->
            <img src="/public/images/twn.jpg" alt="TWN">
            <p>Source: <cite><a href="https://www.facebook.com/TheWomensNetworkCornell/photos/a.104375001030924/104375491030875/">TWN Facebook</p></a></cite>
            <h4> The Women's Network </h4>
            <p> Create networks and connections to support and encourage women in STEM fields.</p>
        </div>
        <div class="flexcol spaceleft">
            <!-- Source: https://www.cornellcurb.com/ -->
            <img src="/public/images/curb.webp" alt="CURB">
            <p>Source: <cite><a href="https://www.cornellcurb.com/">CURB website</p></a></cite>
            <h4>Cornell Undergraduate Research Board</h4>
            <p>Expose Cornell undergraduate research community to Cornell students connecting undergraduates with professors</p>
            <!-- Source: https://wicc.cornell.edu/#/ -->
            <img class="margintop" src="/public/images/wicc.png" alt="WICC">
            <p>Source: <cite><a href="https://wicc.cornell.edu/#/">WICC website</p></a></cite>
            <h4>Women in Computing at Cornell</h4>
            <p>Foster a supportive community of women by creating opportunities for technical and leadership growth</p>
        </div>
    </div>
</body>

</html>
