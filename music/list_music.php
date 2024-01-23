<?php
$dir = 'mp3/'; // Directory where music files are stored

$files = array();
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'mp3') {
                $files[] = $file; // Add the file to the array
            }
        }
        closedir($dh);
    }
}

echo json_encode($files);
