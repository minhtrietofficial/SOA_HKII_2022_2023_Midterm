<form method="post" name="edit">
        <div class="col-md-4 mb-3">
            <label for="validationDefault01">ID Bàn</label>
            <input type="text"  name="table_id" value="<?= $table->table_id?>" >
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefault02">Sức chứa tối đa</label>
            <input type="number"  name="max_capacity" value="<?= $table->max_capacity?>" >
        </div>
            <button type="submit" name="edit" >Update</button>

</form>
<?php

if(isset($_POST['edit'])){
    $id = $table->id;
    $table_id= $_POST['table_id'] ;

    $max_capacity= $_POST['max_capacity'] ;
    table::update($id,$table_id,$max_capacity);
}
?>
