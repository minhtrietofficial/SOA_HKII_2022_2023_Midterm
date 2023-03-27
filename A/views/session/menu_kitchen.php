<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!-- Poppin font family -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Font Awesone for Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- CSS file from user -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/shadow.css">
</head>
<body>
    <div class="container">
        <div class="menu_sidebar">
            <div class="logo">
                <img src="./img/logo.png" alt="">
            </div>
            <h1>MENU</h1>
            <div id="category">
                <button>BBQs</button>
                <button>Steaks</button>
                <button>Burgers</button>
                <button class="active">Fried chicken</button>
                <button>Drinks</button>
                <button>Desserts</button>
            </div>
        </div>
        <div class="main">
            <div class="order_detail shadow-4">
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
            <div id="overlay" class=""></div>
            <div class="header">
                <i class="fa-solid fa-user"></i>
                <p>Nguyen Truong Thinh</p>
                <a href=""><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
            <div class="menu_content">
                <div class="food_list">
                    <div class="food_row shadow-4">
                        <img src="https://goldbelly.imgix.net/uploads/showcase_media_asset/image/79619/joes-kc-ribs-brisket-and-burnt-ends.6710e994980e485e6441b794717ad6fb.jpg?ixlib=react-9.0.2&auto=format&ar=1%3A1" alt="">
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
                        <img src="https://goldbelly.imgix.net/uploads/showcase_media_asset/image/79619/joes-kc-ribs-brisket-and-burnt-ends.6710e994980e485e6441b794717ad6fb.jpg?ixlib=react-9.0.2&auto=format&ar=1%3A1" alt="">
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
                        <img class="shadow-4" src="https://goldbelly.imgix.net/uploads/showcase_media_asset/image/79619/joes-kc-ribs-brisket-and-burnt-ends.6710e994980e485e6441b794717ad6fb.jpg?ixlib=react-9.0.2&auto=format&ar=1%3A1" alt="">
                        <div class="food_info">
                            <h1 class="food_name">Joe's KC BBQ</h1>
                            <div>
                                <span class="title">Price</span>
                                <span class="food_price">$110.99</span>
                            </div>
                            <div class="food_dsc">
                                <span class="title">Description</span> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
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
</body>
</html>