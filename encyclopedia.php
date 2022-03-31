<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="style/normalize.css" rel="stylesheet" />
  <link href="style/simplebar.css" rel="stylesheet" />
  <link href="style/style.css" rel="stylesheet" />
  <noscript>
    <style>
      [data-simplebar] {
        overflow: auto;
      }
    </style>
  </noscript>
  <title>une encyclopédie du danger</title>
</head>

<body>
  <div class="container-global">
    <nav>
      <header>
        <h1>
          <em>une encyclopédie du danger</em>
        </h1>
      </header>

      <div data-simplebar class="liste">
        <ul>
          <li>
            <p><a href="">derrière la porte</a></p>
          </li>
          <li>
            <p><a href="">ce qu'on ne voit pas</a></p>
          </li>
          <li>
            <p><a href="">le hors-champ</a></p>
          </li>
          <li>
            <p><a href="">le regard</a></p>
          </li>
          <li>
            <p><a href="">être vu</a></p>
          </li>
          <li>
            <p><a href="">le reflet</a></p>
          </li>
          <li>
            <p><a href="">le poison</a></p>
          </li>
          <li>
            <p><a href="">la piqure</a></p>
          </li>
          <li>
            <p><a href="">le piège</a></p>
          </li>
          <li>
            <p><a href="">chasseur et proie</a></p>
          </li>
          <li>
            <p><a href="">prédateur et victime</a></p>
          </li>
          <li>
            <p><a href="">arme à feu</a></p>
          </li>
          <li>
            <p><a href="">chasseur et chassé</a></p>
          </li>
          <li>
            <p><a href="">le monstre</a></p>
          </li>
          <li>
            <p><a href="">derrière la porte</a></p>
          </li>
          <li>
            <p><a href="">ce qu'on ne voit pas</a></p>
          </li>
          <li>
            <p><a href="">le hors-champ</a></p>
          </li>
          <li>
            <p><a href="">le regard</a></p>
          </li>
          <li>
            <p><a href="">être vu</a></p>
          </li>
          <li>
            <p><a href="">le reflet</a></p>
          </li>
          <li>
            <p><a href="">le poison</a></p>
          </li>
          <li>
            <p><a href="">la piqure</a></p>
          </li>
          <li>
            <p><a href="">le piège</a></p>
          </li>
          <li>
            <p><a href="">chasseur et proie</a></p>
          </li>
          <li>
            <p><a href="">prédateur et victime</a></p>
          </li>
          <li>
            <p><a href="">arme à feu</a></p>
          </li>
          <li>
            <p><a href="">chasseur et chassé</a></p>
          </li>
          <li>
            <p><a href="">le monstre</a></p>
          </li>
          <li>
            <p><a href="">derrière la porte</a></p>
          </li>
          <li>
            <p><a href="">ce qu'on ne voit pas</a></p>
          </li>
          <li>
            <p><a href="">le hors-champ</a></p>
          </li>
          <li>
            <p><a href="">le regard</a></p>
          </li>
          <li>
            <p><a href="">être vu</a></p>
          </li>
          <li>
            <p><a href="">le reflet</a></p>
          </li>
          <li>
            <p><a href="">le poison</a></p>
          </li>
          <li>
            <p><a href="">la piqure</a></p>
          </li>
          <li>
            <p><a href="">le piège</a></p>
          </li>
          <li>
            <p><a href="">chasseur et proie</a></p>
          </li>
          <li>
            <p><a href="">prédateur et victime</a></p>
          </li>
          <li>
            <p><a href="">arme à feu</a></p>
          </li>
          <li>
            <p><a href="">chasseur et chassé</a></p>
          </li>
          <li>
            <p><a href="">le monstre</a></p>
          </li>
        </ul>

        <footer>
          <p><i><a href="./pdf.html" target="_blank">télécharger l'encyclopédie</a></i></p>
        </footer>
      </div>
    </nav>

    <div data-simplebar class="container-galleries">

      <?php

      // Include Libs and Functions
      require_once "spyc.php";
      require_once "functions.php";

      // New yaml instance
      $spyc = new Spyc();

      // Recursively read the chosen directory for yaml content in .md
      $directory = "import/categories/";
      $ignored = "import/categories/README.md";
      $projects = rglob($directory . "{*.md}", GLOB_BRACE);
      $projectNbr = 0;

      // Sort projects, most recent first
      usort($projects, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));

      foreach ($projects as $project) {
        $projectNbr++;
        if ($project == $ignored) {
          return;
        }
        $y = Spyc::YAMLLoad($project);
      ?>
        <section class="category">
          <div>
            <h3><em><?php echo $y['place_name']; ?></em></h3>
          </div>
          <div data-simplebar class="container-scroll-x">
            <div class="container-images">
              <?php
              $imgdir = dirname($project) . "/images/"; // need to be polished
              $images = glob($imgdir . "{*.jpg,*.jpeg,*.gif,*.png,*.svg}", GLOB_BRACE);
              $arrayPosJustify = array("flex-start", "center", "flex-end");
              $arrayPosAlign = array("flex-start", "center", "flex-end");
              foreach ($images as $image) {
                $randPosJustify = array_rand($arrayPosJustify, 1);
                $randPosAlign = array_rand($arrayPosAlign, 1);
                echo "<div style='justify-content:$arrayPosJustify[$randPosJustify];align-items:$arrayPosAlign[$randPosAlign];' class='images'><img src='$image' /></div>";
              }
              ?>
            </div>
          </div>
        </section>

      <?php } ?>

      <script src="js/simplebar.js"></script>
      <script>
        new SimpleBar(document.getElementById("myElement"));
      </script>
      <script src="js/imagesloaded.min.js"></script>
      <script src="js/magnific.js"></script>
      <script src="js/unveil.js"></script>
</body>

</html>