<form method="post" name="create-kh">
    <div class="form-group ml-5">
        <div class="col-md-4 mb-3">
            <label for="validationDefault01">Category</label>
            <input type="text" class="form-control" id="validationDefault01" name="cate_name" placeholder="Category name" required>
            <button type="submit" name="create-kh" class=" mt-2 btn-danger btn">Add</button>
        </div>
    </div>
</form>
<?php
if(isset($_POST['create-kh'])){
    $cate_name= $_POST["cate_name"];
    category::add($cate_name);
}
?>