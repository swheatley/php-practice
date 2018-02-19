<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Calendar</title>
</head>
<body>
  <form action="calendar.php" method="post">
    <?php # Script 2.9 - calendar.php #2
      $months = [
        1 => 'January', 'February', 'March', 'April', 'May',
             'June', 'July', 'August', 'September', 'October',
             'November', 'December' ];

      $days = range(1,31);
      $years = range(2018, 2027);

      echo '<select name="month">';
            foreach($months as $key => $value ){
              echo "<option value=\"$key\"> $value </option>\n";
            }
      echo '</select>';

      // Make the years pull-down menu:

      echo '<select name="year">';
            foreach($years as $value){
              echo "<option value=\"$value\">
                    $value</option>\n";
            }

      echo '</selec>';








    ?>
  </form>


</body>

</html>
