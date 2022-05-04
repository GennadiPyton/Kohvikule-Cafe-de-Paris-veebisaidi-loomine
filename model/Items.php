<?php

class Items {

    public static function getLast10Items() {
        $query = "SELECT * FROM items ORDER BY id DESC LIMIT 10";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getAllItems() {
        $query = "SELECT * FROM items ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getItemsByCategoryID($id) {
        $query = "SELECT * FROM items where category_id=" . (string) $id . " ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getItemsByID($id) {
        $query = "SELECT * FROM items where id=" . (string) $id;
        $db = new Database();
        $n = $db->getOne($query);
        return $n;
    }

    public static function getSearchItems($s) {
        $query = 'SELECT * FROM items where title like "%'.$s. '%" or text like "%'.$s.'%"' ;
        $db = new Database();
        $n = $db->getAll($query);
        return $n;
    }

}
?>