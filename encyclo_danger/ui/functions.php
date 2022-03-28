<?php

  // Recursive Glob function ; Does not support flag GLOB_BRACE
  function rglob($pattern, $flags = 0) {
    $files = glob($pattern, $flags);
    foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir) {
      $files = array_merge($files, rglob($dir.'/'.basename($pattern), $flags));
    }
    return $files;
  }

  function convertYoutube($string) {
      return preg_replace(
          "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
          "<iframe src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
          $string
      );
  }
