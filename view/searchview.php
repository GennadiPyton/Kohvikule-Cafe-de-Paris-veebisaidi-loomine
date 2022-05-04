<?php
ob_start();

echo "<h1>Search result:</h1>";
echo "<h2><b>". $_GET['otsi'].":</b></h2>";

ViewItems::AllItems($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>