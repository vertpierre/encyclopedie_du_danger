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
          <a href="index.html"><i>🡐 retour index</i></a>
        </h1>
      </header>

      <div data-simplebar class="liste">
        <ul>
          <li>
            <p><a href="#mort">la mort</a></p>
          </li>
          <li>
            <p><a href="#guerre">la guerre</a></p>
          </li>
          <li>
            <p><a href="#religion">la religion</a></p>
          </li>
          <li>
            <p><a href="#enfer">les enfers</a></p>
          </li>
          <li>
            <p><a href="#feu">le feu</a></p>
          </li>
          <li>
            <p><a href="#catastrophe-naturelle">les catastrophes naturelles</a></p>
          </li>
          <li>
            <p><a href="#cri">le cri</a></p>
          </li>
          <li>
            <p><a href="#monstre">les monstres</a></p>
          </li>
          <li>
            <p><a href="#sommeil">le sommeil</a></p>
          </li>
          <li>
            <p><a href="#juste-derriere">juste derrière</a></p>
          </li>
          <li>
            <p><a href="#echelle">l'échelle</a></p>
          </li>
          <li>
            <p><a href="#arme">l'arme</a></p>
          </li>
          <li>
            <p><a href="#masque">le masque</a></p>
          </li>
          <li>
            <p><a href="#fuite">la fuite</a></p>
          </li>
          <li>
            <p><a href="#chute">la chute</a></p>
          </li>
          <li>
            <p><a href="#volcan">le volcan</a></p>
          </li>
          <li>
            <p><a href="#maladie">la maladie</a></p>
          </li>
          <li>
            <p><a href="#insoupconne">l'insoupçonné</a></p>
          </li>
          <li>
            <p><a href="#explosion">les explosions</a></p>
          </li>
          <li>
            <p><a href="#famille">la famille</a></p>
          </li>
          <li>
            <p><a href="#en-joue">en joue</a></p>
          </li>
          <li>
            <p><a href="#predateur">le prédateur</a></p>
          </li>
          <li>
            <p><a href="#poison">le poison</a></p>
          </li>
          <li>
            <p><a href="#lame">la lame</a></p>
          </li>
          <li>
            <p><a href="#etre-vu">être vu</a></p>
          </li>
          <li>
            <p><a href="#hors-champ">le hors-champ</a></p>
          </li>
          <li>
            <p><a href="#regard">le regard</a></p>
          </li>
          <li>
            <p><a href="#surveillance">la surveillance</a></p>
          </li>
          <li>
            <p><a href="#porte">derrière la porte</a></p>
          </li>
          <li>
        </ul>
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
          <div id="<?php echo $y['place_anchor']; ?>">
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