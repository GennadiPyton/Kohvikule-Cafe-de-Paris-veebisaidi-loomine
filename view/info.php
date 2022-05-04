<?php
ob_start();
?>
<h2>Page INFO</h2>
<h1>Our location</h1>
<div class="container">
    <div class="row">
        <div class="col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8125.990018273892!2d27.788187!3d59.3914118!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa1a1a197572f7495!2sCafe%20De%20Paris!5e0!3m2!1sru!2see!4v1647882111581!5m2!1sru!2see" 
         width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>