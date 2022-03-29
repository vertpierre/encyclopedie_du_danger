<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Parcours</title>
  <link href="style/css.css" type="text/css" rel="stylesheet">
  <link href="style/magnific.css" type="text/css" rel="stylesheet">
</head>

<body>
  <nav>
    <a href="../index.html" class="change-color">
      <h1 class="change-color">PARCOURS</h1>
    </a>
    <div class="filters">

      <div class="ui-group">
        <h3 class="trier change-color">Catégories</h3>
        <div class="button-group js-radio-button-group change-color change-border" data-filter-group="category">
          <button class="button  change-color change-border is-checked" data-filter="">all</button>
          <button class="button  change-color change-border" data-filter=".musee">musée</button>
          <button class="button  change-color change-border" data-filter=".galerie">galerie</button>
          <button class="button  change-color change-border" data-filter=".librairie">librairie</button>
          <button class="button  change-color change-border" data-filter=".autre">autre</button>
        </div>
      </div>


      <div class="ui-group">
        <h3 class="trier change-color">Tags</h3>
        <div class="button-group js-radio-button-group change-color change-border" data-filter-group="tag">
          <button class="button  change-color change-border is-checked" data-filter="">all</button>

          <button class="button  change-color change-border" data-filter=".parcours1">fast and culture
            <!--à renseigner manuellement-->
          </button><!-- ligne à dupliquer et modifier pour ajouter des tags (nom de parcours-->
          <button class="button  change-color change-border" data-filter=".parcours2">Littér'art et Muséo'graphisme
            <!--à renseigner manuellement-->
          </button><!-- ligne à dupliquer et modifier pour ajouter des tags (nom de parcours-->
          <button class="button  change-color change-border" data-filter=".parcours3">Baz'art des quais
            <!--à renseigner manuellement-->
          </button><!-- ligne à dupliquer et modifier pour ajouter des tags (nom de parcours-->
          <button class="button  change-color change-border" data-filter=".parcours4">Bonne pêche au marais
            <!--à renseigner manuellement-->
          </button><!-- ligne à dupliquer et modifier pour ajouter des tags (nom de parcours-->
          <button class="button  change-color change-border" data-filter=".parcours5">Coron'Art
            <!--à renseigner manuellement-->
          </button><!-- ligne à dupliquer et modifier pour ajouter des tags (nom de parcours-->
          <button class="button  change-color change-border" data-filter=".parcours6">Retour vers le Futur ⟡
            <!--à renseigner manuellement-->
          </button><!-- ligne à dupliquer et modifier pour ajouter des tags (nom de parcours-->

        </div>
      </div>
    </div>


    <footer class="change-color">
      <ul>


        <div class="ui-group">
          <h3 class="trier change-color">About</h3>

          <div class="button-group change-color change-border">


            <p class="about change-color">

              Ce site rend compte de plusieurs explorations parisiennes menées par les étudiants de DN MADE 1 et de DN MADE 2 <a href="http://www.dnmade-prevert.fr/" target="_blank" title="portfolio de la section">en graphisme augmenté au lycée Jacques Prévert</a> de Boulogne-Billancourt. Après avoir arpenté Paris, les étudiants ont constitué ce répertoire en ligne : c'est un petit guide pratique, à destination de tous les étudiants en graphisme qui, comme eux, aiment découvrir (ou redécouvrir) les lieux inspirants de la capitale. Ce site est destiné à être complété, au gré des parcours et des balades.
              <br /><br />

              La conception du site s'appuie sur le projet <a href="http://www.btsmultimedia-prevert.fr/R_Bastide_workshop/ui/index.php" target="_blank" title="lien vers Usable">Usable</a>, une ressource d'outils et de logiciels libres pour la création en plus d'une banque d'inspiration.
              Une première version d’Usable a été initiée par <a href="http://raphaelbastide.com/" target="_blank" title="Raphaël Bastide">Raphaël Bastide</a> et <a href="https://bachirsoussichiadmi.net/" target="_blank" title="Bachir Soussi Chiadmi">Bachir Soussi Chiadmi</a> avec les étudiants de l'<a href="http://esadhar.fr/" target="_blank" title="Bachir Soussi Chiadmi">ESADHaR</a> du Havre en 2016.
              <br />
              Usable est un projet lui-même sous licence libre : le code souce du projet est disponible à l’adresse suivante <a href="https://gitlab.com/esadhar/usable" target="_blank" title="gitlab usable">https://gitlab.com/esadhar/usable </a>
              <br>
              <br>

              Crédit des typographies :<br>
              Autopia, réalisée par Antoine Gelgon.<br>
              Roadiz Sans, réalisée par Nonpareille.
            </p>


          </div>
        </div>


        <li><a href="https://gitlab.com/esadhar/usable/" target="blank" class="change-color">Repository</a></li>


      </ul>
    </footer>

  </nav>

  <!--  fin de la partie à droite de l'écran -->



  <div class="grid">

    <?php
    // Include Libs and Functions
    require_once "spyc.php";
    require_once "functions.php";
    // New yaml instance
    $spyc = new Spyc();
    // Recursively read the chosen directory for yaml content in .md
    $directory = "../projects/";
    $ignored = "../projects/README.md";
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
      $tags = $y['taxonomy']['tags'];
      $categories = $y['taxonomy']['categories'];
    ?>
      <section class="item <?php
                            foreach ($categories as $cat) {
                              echo $cat . ' ';
                            }
                            foreach ($tags as $tag) {
                              echo $tag . ' ';
                            }
                            ?> change-color change-border">
        <header>
          <h2 class="change-color"><?php echo $y['place_name']; ?></h2>

          <ul class="meta change-color change-border">
            <li><a target="_blank" class="place-url change-color" href="<?php echo $y['place_url']; ?>"> Site web du lieu</a></li>
            <li>Statut: <?php echo $y['status']; ?></li>
            <li>Adresse: <?php echo $y['adress']; ?></li>

            <li><b><u>Horaires</u></b></li>
            <li>lundi: <?php echo $y['monday']; ?></li>
            <li>mardi: <?php echo $y['tuesday']; ?></li>
            <li>mercredi: <?php echo $y['wednesday']; ?></li>
            <li>jeudi: <?php echo $y['thursday']; ?></li>
            <li>vendredi: <?php echo $y['friday']; ?></li>
            <li>samedi: <?php echo $y['saturday']; ?></li>
            <li>dimanche: <?php echo $y['sunday']; ?></li>
            <br />
            <li><a target="_blank" class="more change-color" href="<?php echo $y['more']; ?>"> + d'infos pratiques</a></li>
            <li> Prix: <?php echo $y['prix']; ?></li>
            <li>Date de la visite: <?php echo $y['date']; ?></li>
            <!-- <li>Tags: -->
            <?php // foreach ($tags as $tag) {echo $tag.' ';}
            ?>
            <!-- </li> -->
          </ul>

        </header>

        <div class="short-description change-color">
          <?php echo $y[0]; ?>
        </div>

        <p class="unwrap change-color change-border">English version</p>

        <div class="description change-color">
          <?php echo $y[1]; ?>
        </div>

        <div class="videos">

          <?php
          if (isset($y['extra_links']['main_video'])) {
            $url = $y['extra_links']['main_video'];
            echo convertYoutube($url);
          }
          $viddir = dirname($project) . "/videos/"; // need to be polished
          $videos = glob($viddir . "{*.mp4}", GLOB_BRACE);
          foreach ($videos as $video) {
            $vidName = basename($video, ".mp4");
            $vidMp4 = $viddir . "/" . $vidName . ".mp4";
          ?>
            <video controls preload="metadata">
              <?php if ($vidMp4) : ?>
                <source src="<?php echo $vidMp4 ?>" type="video/mp4">
              <?php endif; ?>
            </video>
          <?php
          }
          ?>
        </div>

        <div class="images">
          <?php
          $imgdir = dirname($project) . "/images/"; // need to be polished
          $images = glob($imgdir . "{*.jpg,*.jpeg,*.gif,*.png,*.svg}", GLOB_BRACE);
          foreach ($images as $image) {
            echo "<a class='image-link' href='$image'><img src='$image' /></a>";
          }
          ?>
        </div>
      </section>

    <?php } ?>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/magnific.js"></script>
    <script src="js/unveil.js"></script>
    <script src="js/main_bis.js"></script>
</body>

</html>