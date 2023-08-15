<?php
//IBD Theme get core class
function includeFilesFromFolder($folderPath) {
  $files = scandir($folderPath);

  foreach ($files as $file) {
      $filePath = $folderPath . '/' . $file;
      if (is_file($filePath) && pathinfo($filePath, PATHINFO_EXTENSION) === 'php') {
          include_once $filePath;
      }
  }
}

$folderPath = __DIR__ . '/core-functions';
includeFilesFromFolder($folderPath);
