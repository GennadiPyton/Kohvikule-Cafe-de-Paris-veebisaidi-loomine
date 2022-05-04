<!DOCTYPE html>
<html>
    <head>
        <title> Cafe de Paris </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel= "stylesheet" type ="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
        <meta charset="utf-8">

    </head>
    <body>

        <nav class="one">
            <ul class="topmenu">
                <li><a href="#">Menu<i class="fa fa-angle-down"></i></a>
                    <ul class="submenu">
                        <?php
                        Controller::AllCategory();
                        ?>
                    </ul>
                </li>
                <li><a href="info">Info</a></li>
                <li><a href="./">Home page</a></li>
                <!-- <li><a href="registerForm">Register</a></li> -->
                <div class="pull-right">
                    <li>
                        <form action="search">
                            <input type="text" name="otsi">
                            <input type="submit" value="otsi">
                        </form>
                    </li>
                </div>
            </ul>			
        </nav>
        <section>
            <div class = 'divBox'>
                <?php
                if (isset($content)) {
                    echo $content;
                } else {
                    echo '<h1>Content is gone!</h1>';
                }
                ?>
            </div>
        </section>
        <hr>
        <p style="display:block; text-align:center; color:#007bff;"> &copy Trading 2021 </p>
    </body>
</html>