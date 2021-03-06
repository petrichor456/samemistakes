<!DOCTYPE html>
<html lang="en">
	<meta charset="utf-8">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Same Mistakes - Pop Punk band, Edinburgh </title>
  <meta name="description" content="Offical website for pop punk duo Same Mistakes from Edinburgh.">
  <meta name="author" content="samemistakes.com">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   
   <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/contactstyle.css">
  <script src="https://kit.fontawesome.com/433b16cf83.js" crossorigin="anonymous"></script>
  
  
  <!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<!--CONTENT START-------------------------------------------->
<body style="background-color:#f3e5e0">
  
<!--NAVBAR-------------------------------------------------------->

  <div class="topnav">
    <a href="index.html" class="active">same mistakes</a>
      <div id="myLinks">
          <a href="index.html"> Home</a>
          <a href="store.html"> Store</a>
          <a href="music.html"> Music</a>
          <a class="active" href="contact.php"> Contact</a>
      </div>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
              </a>
  </div>

<!--NAVBAR--------------------------------------------------------->
<div class="hero-image">
    </div>

  <div class="intro">
    <h1>same mistakes</h1>
    <p>Lorem Ipsom Lorem Ipsom Lorem Ipsom Lorem Ipsom Lorem Ipsom Lorem Ipsom</p>
    <img src="media/bwsm.png">
  </div>
  
  <h2>get in touch</h2>

  <div class="contact-form">
    
  <div class="container main">
    <div class="row">
    
        <div class="contactform">
            <div class="contactformborder">
                <!--<?php
                    $action=$_REQUEST['action'];
                    if ($action=="")    /* display the contact form */
                    {
                    ?>-->
            <form  action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="submit">
                    <input name="name" type="text" value="" size="30" placeholder="NAME"/><br>
                    <input name="email" type="text" value="" size="30" placeholder="EMAIL"/><br>
                    <input name="subject" type="text" value="" size="30" placeholder="SUBJECT"/><br>
                    <textarea name="message" rows="7" cols="30" placeholder="MESSAGE"></textarea><br>
                <input type="submit" value="SUBMIT"/>
           </form>
           <!---
                    <?php
                    } 
                    else     /* send the submitted data */
                    {
                    $name=$_REQUEST['name'];
                    $email=$_REQUEST['email'];
                    $message=$_REQUEST['message'];
                    if (($name=="")||($email=="")||($message==""))
                    {
                    echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                    }
                    else{        
                        $from="From: $name<$email>\r\nReturn-path: $email";
                        $subject="Message sent using your contact form";
                        mail("samemistakesofficial@gmail.com", $subject, $message, $from);
                        echo "Thanks for getting in touch. Speak soon!";
                        }
                    }  ?>
                  -->
                  </div><!--Contactform border-->
        </div><!--Contact form-->
    </div><!--row-->
</div> <!--Container-->



  </div>


   

<!--FOOTER--------------------------------------------------------->
<footer>
  <div class="footer">

    <div class="bottomnav">
      
        <div class="btmnavtitle">same mistakes </div> 

            <ul class="bnav"> 
              <li><a href="index.html"> Home</a></li>
              <li><a href="store.html"> Store</a></li>
              <li><a href="music.html"> Music</a></li>
              <li><a href="contact.html"> Contact</a></li>
            </ul> 

        </div>


       <div class="socialicons">
         <a href="https://open.spotify.com/artist/2kDXMIW9WWez7iHDYn9cVJ?si=KczSuqTxQYK9i_bzlhnoEg"class="fa fa-spotify" target="_blank"></a>

        <a href="https://www.instagram.com/samemistakesband/"
        class="fa fa-instagram" target="_blank"></a>

        <a href="youtube.com" class="fa fa-youtube-play" target="_blank"></a>

			  <a href="https://www.facebook.com/samemistakesband/" class="fa fa-facebook" target="_blank"></a>

			  <a href="contact.html"class="fa fa-envelope"></a>
      </div>

      <a class="cookieslink" href="cookies.html"> cookie policy</a>
        <a class="adminlink" href="admin.php"> admin access</a>
	
</div>
</footer>
<!--FOOTER--------------------------------------------------------->
	

<!--SCRIPTS------------------------------------------------------------>
<!--Form Validation script-->
<script>function validateForm() {
  var valid = 1;
  var email = document.getElementById('email');
  var email_validation = document.getElementById("email_validation");
  var name = document.getElementById('name');
  var name_validation = document.getElementById("name_validation");
  var message_validation = document.getElementById("message_validation");
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if (name.value === "") {
    valid = 0;
    name_validation.innerHTML = "Field Required";
    name_validation.style.display = "block";
    name_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    name_validation.style.display = "none";
    name_validation.parentNode.style.backgroundColor = "transparent";
  }
  
  if (message.value === "") {
    valid = 0;
    message_validation.innerHTML = "Field Required";
    message_validation.style.display = "block";
    message_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    message_validation.style.display = "none";
    message_validation.parentNode.style.backgroundColor = "transparent";
  }
  
  if (email.value === "") {
    valid = 0;
    email_validation.innerHTML = "Field Required";
    email_validation.style.display = "block";
    email_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    email_validation.style.display = "none";
    email_validation.parentNode.style.backgroundColor = "transparent";
  }
  
  if(!filter.test(email.value)) {
    valid = 0;
    email_validation.innerHTML = "Invalid email address";
    email_validation.style.display = "block";
    email_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    email_validation.style.display = "none";
    email_validation.parentNode.style.backgroundColor = "transparent";
  }
  if (!valid)
    return false;
}
</script>

<!--NAVBAR-->
<script>
  function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
  </script>
<!--NAVBAR-->

</body>
</html>
<!-- End Document –––––––––––––––––––––––––––––––––––––––––––––––––– -->