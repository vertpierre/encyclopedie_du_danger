  <?php
  // Include Libs and Functions
  require_once "spyc.php";
  require_once "functions.php";
  // New yaml instance
  $spyc = new Spyc();
  // Recursively read the chosen directory for yaml content in .md
  // $array = Spyc::YAMLLoad('../projects/demo/README.md');
  $array = Spyc::YAMLLoad('../projects/birdfont/birdfont.md');
  echo '<pre>';
  echo Spyc::YAMLDump($array);
  echo '</pre>';
  ?>
