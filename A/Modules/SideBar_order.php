<?php

require_once ('models/category.php');
$dish = category::all();
?>
<div class="menu_sidebar">
        <div class="logo">
            <img src="./img/logo.png" alt="">
        </div>
        <h1>MENU</h1>
        <div id="category">
            <?php
                foreach ($dish as $item) {
            ?>
            <button><?=$item -> dish_name?></button>
            <!-- <button class="active">Fried chicken</button> -->
            <?php
                   }
                ?>
        </div>
    </div>
    