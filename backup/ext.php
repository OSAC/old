<?php
echo getcwd()."\n";
$zip = new ZipArchive;
if ($zip->open('osac1.zip') === TRUE) {
    $zip->extractTo(getcwd());
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
?>

