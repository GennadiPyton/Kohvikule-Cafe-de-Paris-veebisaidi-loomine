<?php
class controllerAdminItems{

    //list Items
    public static function ItemsList() {
    
    $arr=modelAdminItems::getItemsList();
        include_once 'viewAdmin/itemsList.php';
    }
//----------------------------------add
public static function itemsAddForm()
{
    $arr = modelAdminCategory::getCategoryList();
    include_once('viewAdmin/itemsAddForm.php');
}

public static function itemsAddResult()
{
    $test = modelAdminItems::getItemsAdd();
    include_once('viewAdmin/itemsAddForm.php');
}
//------------------------------------edit
public static function itemsEditForm($id)
{
    $arr = modelAdminCategory::getCategoryList();
    $detail=modelAdminItems::getItemsDetail($id);
    include_once('viewAdmin/itemsEditForm.php');
}

public static function itemsEditResult($id)
{
    $test = modelAdminItems::getItemsEdit($id);
    include_once('viewAdmin/itemsEditForm.php');
}
//------------------------------------delete
public static function itemsDeleteForm($id)
{
    $arr = modelAdminCategory::getCategoryList();
    $detail=modelAdminItems::getItemsDetail($id);
    include_once('viewAdmin/itemsDeleteForm.php');
}

public static function itemsDeleteResult($id)
{
    $test = modelAdminItems::getItemsDelete($id);
    include_once('viewAdmin/itemsDeleteForm.php');
}


}//class
?>