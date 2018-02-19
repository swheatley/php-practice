<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Form Feedback </title>
  <style type="text/css" media="all">
    .error{
      font-weight: bold;
      color: #C00;
    }
  </style>
</head>
<body>

  <?php
    /*
    #Script 2.2 - handle_form.php


     if(!empty($_REQUEST['name'])){
       $name = $_REQUEST['name'];
     }else{
       $name = NULL;
       echo '<p class="error">You forgot to enter your name!</p>';
     }

     if(!empty($_REQUEST['email'])){
       $email = $_REQUEST['email'];
     }else{
       $name = NULL;
       echo '<p class="error">You forgot to enter your email!</p>';
     }

     if(!empty($_REQUEST['comments'])){
       $comments = $_REQUEST['comments'];
     }else{
       $comments = NULL;
       echo '<p class="error">You forgot to enter your email!</p>';
     }

     if(isset($_REQUEST['gender'])){
       $gender = $_REQUEST['gender'];
     }
     else{
       $gender = NULL;
     }

     if($gender == "M"){
       $greeting = "<p>Have a good day Sir!</p>";
     }
     elseif($gender == "F"){
       $greeting = "<p>Good day Madam!</p>";
     }else{
       $gender = NULL;
       echo '<p class="error">Gender should be either "M" or "F"!</p>';
     }

     */

    /*  # Script 2.4 - handle_form.php

     if($name && $email && $gender && $comments){
       echo
       "<p>Thank you, $name, for the following comments:
            $comments</p>

         <p>
           We will reply to you at $email

         </p>";
         echo $greeting

     }else{
       echo '<p class="error">Please go back and fill out the form again.</p>';
     }

*/
     if(!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email']) ) {
          echo "<p>Thank you, <strong>{$_POST['name']}</strong>,
                    for the following comments:
                 </p>
                 <pre>
                   {$_POST['comments']}
                 </pre>
                 <p>
                   We will reply to you at <em> {$_POST['email']}</em>
                 </p>";

     } else {  // Missing form value

        echo '<p>Please go back and fill out the form again.</p>';

     }



   ?>



</body>
</html>
