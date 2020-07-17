<?php

# NB: $version should already be defined before calling this script

$base_url = "https://github.com/vassalengine/vassal/releases/download/$version";
 
# Get the user's browser
$useragent = isset($_SERVER['HTTP_USER_AGENT']) ?
  $_SERVER['HTTP_USER_AGENT'] : '';

if (strstr($useragent, 'Win')) {
  $download_os = ' for Windows (64-bit)';
  $download_url = "$base_url/VASSAL-$version-windows-64.exe";
}
else if (strstr($useragent, 'Linux')) {
  $download_os = ' for Linux';
  $download_url = "$base_url/VASSAL-$version-linux.tar.bz2";
}
else if (strstr($useragent, 'Mac')) {
  $download_os = ' for Mac OS X';
  $download_url = "$base_url/VASSAL-$version-macosx.dmg";
}
else {
  $download_os = '';
  $download_url = "$base_url/VASSAL-$version-other.zip";
}

?>
