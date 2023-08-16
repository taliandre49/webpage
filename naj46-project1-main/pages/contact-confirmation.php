<?php
$title = 'Message Confirmation';
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$nav_com_class = " ";
$nav_about_class = " ";
$nav_home_class = " ";
$nav_work_class = "";
$nav_contact = " ";
$nav_confirmation = "active_page";
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
  <section class="flexcontaincom">
    <div class="flexleftform">
      <!--This is a self created resource-->
      <img class="block-center" src="/public/images/thankyou-removebg-preview.png" alt="Self doodle">
    </div>
    <div class="flexrightform">
      <p>Thank you for reaching out, here is a confirmation of your message! I look foward to reading your message, and will contact you back as soon as I can. If you notice an error in your message feel free to send another one!</p>
      <p class="label"> Here's a copy of your message: </p>
      <div class="textarearight">
        <p class="label"> <em> Name:</em> <?php echo htmlspecialchars($name); ?> </p>
        <p class="label"> <em> Email:</em> <?php echo htmlspecialchars($email); ?> </p>
        <p class="label"><em> Message: </em></p>
        <p class="label"><?php echo htmlspecialchars($message); ?> </p>
      </div>
      <p class=" align-right label"> Want to send another message?</p>
      <div class="align-right">
        <button class="align-right"> <a href="/contact"> New Message </a></button>
      </div>
    </div>

  </section>
</body>

</html>
