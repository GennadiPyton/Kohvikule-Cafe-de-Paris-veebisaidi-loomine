<?php ob_start(); ?>

<div class="container" style="min-height:400px;">
<div class="col-md-11">

 <h2>Items Add</h2>
 <?php
 if(isset($test)){
     if($test==true)
     {
?>
    <div class="alert alert-info">
        <strong>Запись добавлена. </strong><a href="itemsAdmin"> Список блюд</a>
    </div>
    <?php
        }
    else if($test==false)
    {
        ?>
            <div class="alert alert-warning">
                <strong>Ошибка добавлений записи!</strong> <a href="itemsAdmin"> Список блюд</a>
            </div>
        <?php
    }
 }
 else {
     ?>
     <form method='POST' action="itemsAddResult" enctype="multipart/form-data">
        <table class='table table-bordered'>
            <tr>
                <td>Items Title</td>
                <td><input type='text' name='title' class='form-control' required></td>
</tr>
<tr>
    <td>Items Text</td>
    <td><textarea rows="5" name="text" class='form-control'required> </textarea></td>
</tr>
<tr>
    <td>Category</td>
    <td>
        <select name="idCategory" class="form-control">
            <?php
                foreach($arr as $row) {
                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
    
                }
                ?>
                </select>
            </td>
            </tr>
            <!-- image-->

        <tr>
            <td>Picture</td>
            <td><div>
                <input type=file name="picture" style="color:black;">
            </div></td>
            </tr>
            <!--end image-->
        
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="save">
                    <span class="glyphicon glyphicon-plus"></span> Сохранить
            </button>
            <a href="itemsAdmin" class="btn btn-large btn-success">
                <i class="glyphicon glyphicon-backward"></i> &nbsp;Назад к списку</a>
            </td>
            </tr>
            </table>
            </form>
            <?php
}   
?>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>
 