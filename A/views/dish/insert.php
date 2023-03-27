<?php
require_once ('models/category.php');
$list_cate = category::all();
?>
<div class="container">
    <div class="form_container">
        <h1>Add Dish</h1>
        <form method="post" name="insert_dish">
            <div class="display">
                <input type="text" name="dish_name" id="dish_name" placeholder="dish_name">
            </div>
            <div class="display">
            <select class="form-control" id="tensp" name="dish_cate">
                        <optgroup style="color: #1cc6a4" label="dish_cate">
                            <?php
                            foreach ($list_cate as $item) {
                                echo  "<option value='$item->cate_id'>" . $item->cate_name . "</option>";
                            }
                            ?>
                        </optgroup>
                    </select>      </div>
            <div class="display">
                <input type="text" name="dish_dsc" id="dish_dsc" placeholder="dish_dsc">
            </div>
            <div class="display">
                <input type="text" name="dishs_img" id="dishs_img" placeholder="dishs_img">
            </div>
            <div class="display">
                <input type="text" name="unit_price" id="unit_price" placeholder="unit_price">
            </div>
            <div class="display">
                <input type="text" name="dish_status" id="dish_status" placeholder="dish_status">
            </div>
            <div>
                <div class="submit">
                    <button type="submit" name="insert_dish">Insert</button>
                </div>
        </form>
    </div>
</div>
<?php

if(isset($_POST['insert_dish'])){
    $dish_name = $_POST["dish_name"];
    $dish_cate = $_POST["dish_cate"];
    $dish_dsc = $_POST["dish_dsc"];
    $dishs_img = $_POST["dishs_img"];
    $unit_price = $_POST["unit_price"];
    $dish_status = $_POST["dish_status"];

    dish::add($dish_name,$dish_cate,$dish_dsc,$dishs_img,$unit_price,$dish_status);
}
?>