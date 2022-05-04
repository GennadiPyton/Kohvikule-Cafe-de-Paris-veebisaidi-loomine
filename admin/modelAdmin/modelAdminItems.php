<?php
class modelAdminItems{

    public static function getItemsList() {
        $query = "SELECT items.*, category.name,users.username from items,
        category,users WHERE items.category_id=category.id AND
        items.user_id=users.id ORDER BY `items`.`id` DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }



//-------------Add
public static function getItemsAdd() {
    $test=false;
    if(isset($_POST['save'])) {
        if(isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory']) ){

            $title=$_POST['title'];
            $text=$_POST['text'];
            $idCategory=$_POST['idCategory'];

            //--------------------------------------
                $image =addslashes (file_get_contents($_FILES['picture']['tmp_name']));
            //--------------------------------------
            $sql="INSERT INTO `items` (`id`, `title`, `text`, `picture`, `category_id`,
            `user_id`) VALUES (NULL, '$title', '$text', '$image', '$idCategory', '1')";
                    $db = new Database();
                    $item = $db->executeRun($sql);
                if($item==true) {
                $test=true;
            }
        }
    }
    return $test;
}
//----------------------------------items detail id
public static function getItemsDetail($id) {
    $query = "SELECT items.*, category.name,users.username from items, category, users
    WHERE items.category_id=category.id AND items.user_id=users.id and items.id=".$id;
    $db = new Database();
    $arr = $db->getOne($query);
    return $arr;
}
//---------------------------items edit
public static function getItemsEdit($id){
    $test=false;
    if(isset($_POST['save'])) {
        if(isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory']) ){

            $title=$_POST['title'];
            $text=$_POST['text'];
            $idCategory=$_POST['idCategory'];
        //---------------------images type blob
        $image=$_FILES['picture'] ['name'];
        if($image!=""){
            $image =addslashes(file_get_contents($_FILES['picture'] ['tmp_name']));
        /* //------------------------images type text
            $uploaddir = '../images/';
            $uploadfile = $uploaddir . basename($_FILES['picyure']['name']);
            copy($_FILES['picture']['tmp_name'], $uploadfile); */
        } 
        //------------------------------------------------
        if($image=="") {
            $sql="UPDATE `items` SET `title` = '$title', `text` = '$text',
            `category_id` = '$idCategory' WHERE `items`.`id` =".$id;
        }
        else{
            $sql="UPDATE `items` SET `title` = '$title', `text` = '$text', `picture`='$image',
            `category_id` = '$idCategory' WHERE `items`.`id` =".$id;
        }
                $db = new Database();
                $item = $db->executeRun($sql);
            if($item==true) {
                $test=true;
            }
        }
    }
    return $test; 
}
//-------------------------------------------items delete

public static function getItemsDelete($id) {
    $test=false;
    if(isset($_POST['save'])) {
        $sql="DELETE FROM `items` WHERE `items`.`id` = ".$id;
        $db = new Database();
                $item = $db->executeRun ($sql);
            if($item==true) {
            $test=true;
        }
    }
    return $test;
    }

}//class