<?php

class Controller {

    public static function StartSite() {
        $arr = Items::getLast10Items();
        //print_r($arr);
        include_once 'view/start.php';
        return;
    }

    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }

    public static function AllItems() {
        $arr = Items::getAllItems();
        include_once 'view/allitems.php';
    }

    public static function ItemsByCatID($id) {
        $arr = Items::getItemsByCategoryID($id);
        include_once 'view/catitems.php';
    }

    public static function ItemsByID($id) {
        $n = Items::getItemsByID($id);
        include_once 'view/readitems.php';
    }

    public static function SearchItems($search) {
        $arr = Items::getSearchItems($search);
        include_once 'view/searchview.php';
    }

    public static function error404() {
        include_once 'view/error404.php';
    }

    public static function info() {
        include_once 'view/info.php';
    }

    public static function InsertComment($c, $id) {
        Comments::InsertComment($c, $id);
        self::ItemsByID($id);
    }

    public static function Comments($itemsid) {
        $arr = Comments::getCommentByItemsID($itemsid);
        ViewComments::CommentsByItems($arr);
    }

    public static function CommentsCount($itemsid) {
        $arr = Comments::getCommentsCountByItemsID($itemsid);
        ViewComments::CommentsCount($arr);
    }

    public static function CommentsCountWithAncor($itemsid) {
        $arr = Comments::getCommentsCountByItemsID($itemsid);
        ViewComments::CommentsCountWithAncor($arr);
    }

}//class