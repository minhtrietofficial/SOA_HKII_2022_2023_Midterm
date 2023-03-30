<?php
require_once ('models/category.php');
require_once ('models/dish.php');

$category = category::all();
?>

<div class="container">
    <div class="menu_sidebar">
        <div class="logo">
            <img src="./img/logo.png" alt="">
        </div>
        <h1>MENU</h1>
        <div id="category">
            <?php
                foreach ($dish as $item) {
            ?>
            <a class="dish_cate" href=""><?=$item -> dish_name?></a>
            <!-- <button class="active">Fried chicken</button> -->
            <?php
                   }
                ?>
        </div>
    </div>
    <div class="main">
        <?php include("Modules/Header.php"); ?>
        <div class="menu_content">
            <div class="food_list">
                <div class="food_row shadow-4">
                    <img src="https://goldbelly.imgix.net/uploads/showcase_media_asset/image/79619/joes-kc-ribs-brisket-and-burnt-ends.6710e994980e485e6441b794717ad6fb.jpg?ixlib=react-9.0.2&auto=format&ar=1%3A1"
                        alt="">
                    <div>
                        <p class="food_name">Joe's KC BBQ</p>
                        <p class="food_dsc">Joe's KC Ribs, Brisket & Burnt Ends</p>
                        <p class="food_price">$ 110.99</p>
                        <div class="toggle_wrapper">
                            <input type="checkbox" name="" id="menu_toggle 1">
                            <label for="menu_toggle 1" class="toggle_btn"></label>
                        </div>
                    </div>
                </div>
                <div class="food_row shadow-4">
                    <img src="https://goldbelly.imgix.net/uploads/showcase_media_asset/image/79619/joes-kc-ribs-brisket-and-burnt-ends.6710e994980e485e6441b794717ad6fb.jpg?ixlib=react-9.0.2&auto=format&ar=1%3A1"
                        alt="">
                    <div>
                        <p class="food_name">Joe's KC BBQ</p>
                        <p class="food_dsc">Joe's KC Ribs, Brisket & Burnt Ends</p>
                        <p class="food_price">$ 110.99</p>
                        <div class="toggle_wrapper">
                            <input type="checkbox" name="" id="menu_toggle 2">
                            <label for="menu_toggle 2" class="toggle_btn"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="food_detail">
                <div class="food_info_wrapper">
                    <img class="shadow-4"
                        src="https://goldbelly.imgix.net/uploads/showcase_media_asset/image/79619/joes-kc-ribs-brisket-and-burnt-ends.6710e994980e485e6441b794717ad6fb.jpg?ixlib=react-9.0.2&auto=format&ar=1%3A1"
                        alt="">
                    <div class="food_info">
                        <h1 class="food_name">Joe's KC BBQ</h1>
                        <div>
                            <span class="title">Price</span>
                            <span class="food_price">$110.99</span>
                        </div>
                        <div class="food_dsc">
                            <span class="title">Description</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate.</p>
                        </div>
                        <div class="food_rate">
                            <span class="title">Rating</span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <a class="back" href="">BACK</a>
        </div>
    </div>
</div>
