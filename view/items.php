<?php

class ViewItems {

    public static function ItemsByCategory($arr) {
        echo'<div class="container">';
        echo'<div class="row">';
        foreach ($arr as $value) {
            echo'<div class="col">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($value['picture']) . '" width=150 /><br>';
            echo "<h2 >" . $value['title'] . "<h2>";
            Controller::CommentsCount($value['id']);
            echo "<a href='items?id=" . $value['id'] . "'>Edasi</a><br>";
            echo'</div>';
        }
        echo'</div>';
        echo'</div>';
    }

    public static function AllItems($arr) {


        foreach ($arr as $value) {
            echo "<li >" . $value['title'];
            Controller::CommentsCount($value['id']);
            echo "<a href='items?id=" . $value['id'] . "'>Edasi</a></li><br>";
        }
    }

    public static function ReadItems($n) {

        echo "<h2 >" . $n['title'] . "<h2>";
        echo '<br><img src="data:image/jpeg;base64,' . base64_encode($n['picture']) . '" width=150 /><br>';
        Controller::CommentsCountWithAncor($n['id']);
        echo "<p>" . $n['text'] . "<p>";
    }

// добавить методы для других видов представлений новостей
}

?>