<?php
$title = 'Contact';
$nav_com_class = " ";
$nav_about_class = "";
$nav_home_class = " ";
$nav_work_class = " ";
$nav_contact = "active_page";
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
  <section class="flexcontaincom">
    <div class="flexleftform">
      <img class="block-center" src="/public/images/contactimg_2_44.jpeg" alt="img of me">
      <!--This is a self created resource-->
      <p>Weather you would like set up a meeting or simply say hi, feel free to leave a message and I will get right back to you as soon as I can. I look foward to hearing from you!</p>
    </div>
    <div class="flexrightform">
      <h4> Contact Form</h4>
      <form id="request-form" action="/contact/confirmation" method="post" novalidate>
        <div class="label">
          <label for="request-name"> Name: </label>
          <input type="text" id="request-name" name="name" />
        </div>

        <div class="label">
          <label for="request-email"> Email: </label>
          <input type="text" id="request-email" name="email" />
        </div>

        <div class="label">
          <label class="message" for="request-message"> Message:</label>
          <p> </p>
          <textarea class=" textarearight" type="textarea" id="request-message" name="message"></textarea>
        </div>

        <div class="align-right butmess">
          <input id="request-submit" type="submit" value="Send Message" />
        </div>
      </form>
    </div>
  </section>
</body>

</html>
