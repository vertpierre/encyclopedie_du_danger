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
        <p><a href="http://" target="_blank">télécharger l'encyclopédie</a></p>
        <p><i>DNMADE 3</i> <a href="http://" target="_blank">Boulogne</a> <i>et la</i> <a href="http://" target="_blank">HEAD</a></p>
      </footer>
    </div>
  </nav>

  <div class="gallery">
    <div class="surveillance">
      <div class="images">
        <?php
        $images = glob("./import/surveillance" . "{*.jpg,*.jpeg,*.gif,*.png,*.svg}", GLOB_BRACE);
        foreach ($images as $image) {
          echo "<a class='image-link' href='$image'><img src='$image' /></a>";
        }
        ?>
      </div>
    </div>
  </div>

  <script src="./js/simplebar.js"></script>
  <script>
    new SimpleBar(document.getElementById("myElement"));
  </script>
</body>

</html>