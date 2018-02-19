<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Multidimensional Arrays</title>
</head>
<body>
  <p>
    Some North American States,
    Provinces, and Territories:

  </p>
  <?php  # Script 2.7 - multi.php

    // create one Array

    $mexico = [
      'YU' => 'Yucatan',
      'BC' => 'Baja California',
      'QA' => 'Oaxca'

    ];

    $us = [
      'MD' => 'Maryland',
      'IL' => 'Illinois',
      'PA' => 'Pennsylvania',
      'IA' => 'Iowa'
    ];
    $canada = [
      'QC' => 'Quebec',
      'AB' => 'Alberta',
      'NT' => 'Northwest Territories',
      'YT' => 'Yukon',
      'PE' => 'Prince Edward Island'
    ];
    $n_america = [
      'Mexico' => $mexico,
      'United States' => $us,
      'Canada' => $canada
    ];

    foreach($n_america as $country => $list){
      echo "<h2>$country</h2><ul>";


    foreach ($list as $k => $v){
      echo "<li>$k - $v </li>\n";
    }

    echo '</ul>';

  } // End of main FOREACH

  $names = ['Moe', 'Larry', 'Curly'];
  $new_names = sort($names);

  echo "<li>$new_names</li>";

   ?>


</body>

</html>
