<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>une encyclopédie du danger</title>
  <link href="style/normalize.css" rel="stylesheet">
  <link href="style/simplebar.css" rel="stylesheet">
  <link href="style/style.css" rel="stylesheet">
  <noscript>
    <style>
      [data-simplebar] {
        overflow: auto;
      }
    </style>
  </noscript>
</head>

<body>
  <?php
  $categoriesPath = __DIR__ . "/import/categories";
  $projects = glob("$categoriesPath/*", GLOB_ONLYDIR);
  ?>
  <div class="container-global">
    <nav>
      <header>
        <h1><a href="./index.html"><i>retour index</i></a></h1>
      </header>
      <div data-simplebar class="liste">
        <ul>
          <?php foreach ($projects as $project) {
            $imgdir = "$project/images/";
            $images = glob("$imgdir{*.jpg,*.jpeg,*.gif,*.png,*.svg}", GLOB_BRACE);
            $projectName = preg_replace("/[0-9]+ /", "", str_replace("_", " ", str_replace("l_", "l'_", basename($project))));
          ?>
            <li>
              <p><em><a href="#<?= $projectName ?>"><?= $projectName ?></a></em></p>
            </li>
          <?php } ?>
        </ul>
      </div>
    </nav>
    <div data-simplebar class="container-galleries">
      <?php foreach ($projects as $project) {
        $imgdir = "$project/images/";
        $images = glob("$imgdir{*.jpg,*.jpeg,*.gif,*.png,*.svg}", GLOB_BRACE);
        $projectName = preg_replace("/[0-9]+ /", "", str_replace("_", " ", str_replace("l_", "l'_", basename($project))));
      ?>
        <section class="category">
          <div id="<?= $projectName ?>">
            <h3><em><?= $projectName ?></em></h3>
          </div>
          <div data-simplebar class="container-scroll-x">
            <div class="container-images">
              <?php
              $arrayPosJustify = ["flex-start", "center", "flex-end"];
              $arrayPosAlign = ["flex-start", "center", "flex-end"];
              foreach ($images as $image) {
                $randPosJustify = array_rand($arrayPosJustify, 1);
                $randPosAlign = array_rand($arrayPosAlign, 1);
                $imagePath = str_replace(__DIR__, '.', $image);
                echo "<div style='justify-content:$arrayPosJustify[$randPosJustify];align-items:$arrayPosAlign[$randPosAlign];' class='images'><img src='$imagePath' /></div>";
              }
              ?>
            </div>
          </div>
        </section>
      <?php } ?>
    </div>
  </div>
  <script src="js/simplebar.js"></script>
  <script>
    new SimpleBar(document.getElementById("myElement"));
  </script>
  <script src="js/imagesloaded.min.js"></script>
  <script src="js/magnific.js"></script>
  <script src="js/unveil.js"></script>
</body>

</html>