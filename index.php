<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <title>Museum cost</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
  </head>
  <body>

    <?php
      echo "<h1>Museum cost calculator</h1>";
      echo "<br>";
      echo "<img src='/images/museum.jfif' style='width:200px'>";
      echo "<br>";
    ?>
    <p>Costs are lower on tuesdays and thursdays, when entering the day of the week please make sure to capitalize the first character.</p>
    <br>
    <form action="./results.php" method="post" target="results">
      <label for="lblDay">Day:</label>
      <input type="string" id="day" placeholder="Day of the week" name="day"><br><br>
      <label for="lblAge">Age:</label>
      <input type="number" id="years" placeholder="Age (Years)" name="years"><br><br>
      <input type="submit" value="Check movie rating">
    </form>
    <?php
    echo "<br>"
    ?>
      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">			
        You can watch:
      </iframe>
  </body>
</html>
