<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Form Feedback</title>
</head>
<body>
  <?php  # Script 2.5 - handle_form-2.5.php

     if(!empty($_POST['name']) && !empty($_POST['comments']) &&
        !empy($POST['email']) ){
          echo "<p>Thank you, <strong>{$_POST['name']}</strong>,
                    for the following comments:
                 </p>
                 <pre>
                   {$_POST['comments']}
                 </pre>
                 <p>
                   We will reply to you at <em> {$_POST['email']}</em>
                 </p>\n";

     } else {  // Missing form value

        echo '<p>Please go back and fill out the form again.</p>';

     }


   ?>


</body>

</html>


<!--<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Form Feedback</title>
</head>
<body>


</body>

</html>-->
