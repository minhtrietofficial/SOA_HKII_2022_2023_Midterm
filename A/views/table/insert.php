<form method="post" name="create">
    <div class="form-group ml-5">
        <div class="col-md-4 mb-3">
            <label for="validationDefault01">ID Bàn</label>
            <input type="text" class="form-control" id="validationDefault01" name="table_id" placeholder="ID" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefault02">Sức chứa tối đa</label>
            <input type="number" class="form-control" id="validationDefault02" name="max_capacity" placeholder="ID" required>
        </div>
            <button type="submit" name="create" class=" mt-2 btn-danger btn">Thêm</button>

    </div>
</form>
<?php

if(isset($_POST['create'])){
    $table_id = $_POST["table_id"];
    $max_capacity = $_POST["max_capacity"];
    $table_status = "Free";
    table::add($table_id, $max_capacity, $table_status);
}
?>