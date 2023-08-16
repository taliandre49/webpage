<?php
$title = '404-Page Not Found';
$nav_com_class = " ";
$nav_about_class = " ";
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
  <figure>
    <img class="block-center spacetop" src="/public/images/404imgp1.jpeg" alt="404 page">
    <figcaption>
      <!-- Source:https://stock.adobe.com/search?k=404+page+not+found&asset_id=326963802 -->
      <p class="cite">Source: <cite><a href="https://stock.adobe.com/search?k=404+page+not+found&asset_id=326963802"> Adobe Stock</p></a></cite>
    </figcaption>
  </figure>
  <p class="four"> Ohhh nooo, we're sorry. It seems like we can not connect you to the page you are trying to reach. Don't fear, use the navigation above to get to your desired location. Safe travels! </p>
</body>
