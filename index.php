<?php
$host = 'h3x1.tk';
if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
echo '<h1 color="green;">online!</h1> <a href="http://h3x1.tk">h3x1.tk</a>';
fclose($socket);

} else {
echo 'offline.';
}
echo '<p>=================</p>';
$host2 = 'h3xweb.tk';
if($socket =@ fsockopen($host2, 80, $errno, $errstr, 30)) {
echo '<h1 color="green;">online!</h1><a href="http://h3xweb.tk">h3xweb.tk</a>';
fclose($socket);

} else {
echo 'offline.';
}
echo '<p>=================</p>';
$host3 = 'x1.glitch.me';
if($socket =@ fsockopen($host3, 80, $errno, $errstr, 30)) {
echo '<h1 color="green;">online!</h1>';
fclose($socket);

} else {
echo 'offline.';
}
echo "Today is " . date("Y/m/d") . "<br>";
echo "The time is " . date("h:i:sa");
?>
