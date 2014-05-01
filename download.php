<?php
# No caching:
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');

if ($_SERVER['REMOTE_ADDR'] != '129.82.94.210')
    die('Must connect from the same computer, 129.82.94.210');
if (!file_exists("/s/bach/n/under/schrag/stats.c"))
    die("The file /s/bach/n/under/schrag/stats.c doesn't exist.");
if (!is_readable("/s/bach/n/under/schrag/stats.c"))
    die("The file /s/bach/n/under/schrag/stats.c isn't readable.");

if (time() > 1319528886) {
    echo "<title>Can't fetch /s/bach/n/under/schrag/stats.c</title>";
    echo "<h1>Can't fetch /s/bach/n/under/schrag/stats.c</h1>";
    echo "The download program ran at Tue Oct 25 01:38:06 MDT 2011.";
    echo "<br> It is now " . date("D M d H:i:s T Y.");
    echo "<p> You had ten minutes to fetch this file; ";
    die ("you'll have to run the download program again.");
}
if (!$_SERVER['QUERY_STRING']) {
    header("Refresh: 4; url=download.php?load");
    echo "<title>Download</title>stats.c will load in a few seconds.";
}
else {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=stats.c');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: 3039');

    readfile("/s/bach/n/under/schrag/stats.c");
}
?>
