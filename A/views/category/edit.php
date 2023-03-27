<form method="post" name="edit-cate_id">
    <div class="form-group ml-5">
        <div class="col-md-4 mb-3">
            <label for="validationDefault01">Id</label>
            <input type="text" class="form-control" id="validationDefault01" value="<?= $category->cate_id ?> " name="id" placeholder="Id" readonly required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefault02">Category</label>
            <input type="phone" class="form-control" id="validationDefault02" value="<?= $category->cate_name ?> " name="cate_name" placeholder="cate_id" required>
            <button type="submit" name="edit-cate_id" class=" mt-2 btn-danger btn">Update</button>
        </div>
    </div>
</form>
<?php
if(isset($_POST['edit-cate_id'])){
    $id = $donvi->Id;
    $cate_name= $_POST['cate_name'] ;
    category::update($id,$cate_name);
}
?>
