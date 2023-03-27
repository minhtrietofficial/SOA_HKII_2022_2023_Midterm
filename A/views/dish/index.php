<a href="index.php?controller=dish&action=insert">Add</a>

<div class="food_list">
    <?php
        foreach ($dish as $item) {                                
    ?>
    <div class="food_row shadow-4">
        <img src="<?=$item->dish_img?>" alt="">
        <div>
            <p class="food_name"><?= $item->dish_name ?></p>
            <p class="food_dsc"><?= $item->dish_dsc ?></p>
            <p class="food_price">$ <?= $item->unit_price ?></p>
            <button>View</button>
        </div>
    </div>
    <?php
                    }
                ?>
</div>