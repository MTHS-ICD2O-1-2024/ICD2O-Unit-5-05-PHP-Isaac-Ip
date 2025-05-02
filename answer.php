<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Types of Triangles, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Isaac Ip" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-indigo.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Types of Triangles, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Types of Triangles, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/types-of-triangles.png" alt="Types of Triangles" width="250" />
      </div>
      <div class="page-content-php">
        <div id="submit">
          <?php
          $lengthA = $_GET["length-a"];
          $lengthB = $_GET["length-b"];
          $lengthC = $_GET["length-c"];

          // using the cosine law

          $angleA = acos(($lengthB ** 2 + $lengthC ** 2 - $lengthA ** 2) / (2 * $lengthB * $lengthC)) * (180 / pi());
          $angleB = acos(($lengthC ** 2 + $lengthA ** 2 - $lengthB ** 2) / (2 * $lengthC * $lengthA)) * (180 / pi());
          $angleC = acos(($lengthA ** 2 + $lengthB ** 2 - $lengthC ** 2) / (2 * $lengthA * $lengthB)) * (180 / pi());


          $sumOfAngles = round($angleA, 2) + round($angleB, 2) + round($angleC, 2);

          // process 
          if ($sumOfAngles != 180 || ($lengthA + $lengthB <= $lengthC || $lengthA + $lengthC <= $lengthB || $lengthB + $lengthC <= $lengthA)) {
          echo"The triangle is not a real triangle.";
          } else if ($lengthA == $lengthB && $lengthB == $lengthC) {
          echo "The triangle is equilateral.";
          } else if ($lengthA !== $lengthB && $lengthB !== $lengthC && $lengthA !== $lengthC) {
          echo "The triangle is scalene.";
          } else {
          echo "The triangle is isoceles.";
          }
          ?>
        </div>
      </div>
    </main>
  </div>
</body>

</html>