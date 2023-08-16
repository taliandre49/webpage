<?php
$nav_com_class = " ";
$nav_about_class = " ";
$nav_home_class = "active_page";
$nav_work_class = " ";
$nav_contact = " ";
$nav_confirmation = " ";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="Width=device-width, initial-scale=1" />

    <title> Natalia A. Jordan </title>
    <link rel="stylesheet" type="text/css" href="/public/styles/site.css" />
</head>

<body>
    <header>
        <?php include('includes/headerpartial.php'); ?>
    </header>
    <h1 class="sub-header1"> Hey, I'm </h1>
    <h1 class="spacing-header"> Natalia Jordan </h1>
    <img class="block-center" src="/public/images/headshotfr.jpg" alt="head shot of me">
    <!--This is a self created resource-->
    <div class="flexcontain">
        <div class="flexleft">
            <h2> <strong> About</strong></h2>
            <p> Natalia Jordan is a current Junior at <em> Cornell University </em>, born and raised in New York and Colombia.</p>
            <p> Growing up, Natalia's father tried to get her into coding, buying her <q> Python For Dummies </q> and various other intro to coding books. But as a naive child nothing stuck. However, as she was going through her first couple semesters of college she decided to take a python course and this time it actually did stick. She found herself fascinated with coding. So she took the leap from pre-med to the digital world, and hasn't looked back since. She have always had a passion for programs and always enjoyed seeing the impact of technology on people's daily lives, and she is pursuing this passion while working towards a degree in computer science and information technology</p>
            <p> Currenltly based in Long Island, Ithaca, and Colombia. A couple random facts about her are that she's fluent in spanishm, and loves to
                snowboard and lift!</p>
        </div>
        <div class="flexright">
            <h3> <strong> Technical Skills </strong></h3>
            <p>
            <dl>
                <dt> Back-end Developmemnt:</dt>
                <dd> - Python, Java, PHP, R, and OCaml </dd>
                <dt> Front-end Development:</dt>
                <dd> - HTML, CSS, and JavaScript </dd>
                <dt> Developer Tools:</dt>
                <dd> - Git, GitHub, Eclipse, Atom, Visual Studio Code, RStudio </dd>
            </dl>
            </p>
        </div>
    </div>
    <div id="contact">
        <h4><strong> Reach Out!</strong></h4>
        <p> Are you looking for a developer? After exlporing my website, and you conclude that I'd be a great assest to your company, feel free to reach out! A friendly hello is awlays welcomed! </P>
        <p> Email: <a href="mailto:naj46@cornell.edu"> naj46@cornell.edu </a></p>
        <p> <strong>Linked in</strong>: taliandre49 </p>
        <p>
        <p><strong>Handshake</strong>: taliandre49</p>
        <button> <a href="/contact"> Contact </a> </button>
    </div>

</body>

</html>
