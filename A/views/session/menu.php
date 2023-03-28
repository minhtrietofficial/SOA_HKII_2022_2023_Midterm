<?php
require_once ('models/category.php');
require_once ('models/dish.php');

$category = category::all();
$dish = dish::all();
?>

<div class="main">
    <!-- <div class="order_detail shadow-4">
                <form action="">
                    <div class="order_list_content">
                        <h1>Your Order</h1>
                        <div class="order_food_list">
                            <div class="list_header">
                                <div>Sản phẩm</div>
                                <div>Đơn giá</div>
                                <div>Số lượng</div>
                            </div>
                            <div class="list_body">
                                <div class="list_item">
                                    <div>Burger01</div>
                                    <div>50.000 VND</div>
                                    <div class="order_qty_wrapper">
                                        <span class="minus">-</span>
                                        <span class="num">1</span>
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                                <div class="list_item">
                                    <div>Burger01</div>
                                    <div>50.000 VND</div>
                                    <div class="order_qty_wrapper">
                                        <span class="minus">-</span>
                                        <span class="num">1</span>
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                                <div class="list_item">
                                    <div>Burger01</div>
                                    <div>50.000 VND</div>
                                    <div class="order_qty_wrapper">
                                        <span class="minus">-</span>
                                        <span class="num">1</span>
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order_list_footer">
                        <div class="order_total_price">
                            <i class="fa-solid fa-cart-shopping"></i>
                            1.000.000 VND
                        </div>
                        <input type="submit" value="Place Order">
                    </div>
                </form>
            </div>
            <div id="overlay"></div> -->

    <div class="menu_content">
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate.</p>
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
            <div class="qty_wrapper">
                <span class="minus">-</span>
                <span class="num">1</span>
                <span class="plus">+</span>
            </div>
            <button id="addToCard" class="shadow-4">Add to Order</button>
        </div>
    </div>
    <div class="footer">
        <a class="back" href="">BACK</a>
        <p class="table">Table T-01</p>
        <div id="divide">|</div>
        <button class="order">
            <div class="cart_qty">5</div>
            <i class="fa-solid fa-cart-shopping"></i>ORDER
        </button>
    </div>
</div>