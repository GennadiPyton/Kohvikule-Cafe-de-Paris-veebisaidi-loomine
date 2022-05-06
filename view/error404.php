<?php ob_start(); 
?>
<div class="center">
<h2>404 Error  </h2>
<article>
    <h4 class="h4">	Page not found for the requested URL</h4>

</article>
</div>
<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>
