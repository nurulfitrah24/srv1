<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Struktur Algoritma</title>
  </head>
  <body>
    <h1>Struktur Algortima</h1>

    <?php
      for ($i=0; $i<50; $i++) {

        if ($i % 2 == 0) {
          echo "<b>";
        }

        echo "angka" . $i . "<br>\n";

        if ($i % 2 == 0) echo "</b>";

      }
     ?>

  </body>
</html>
