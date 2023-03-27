<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Detail</title>
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
        <!-- <div class="sidebar">
            <div class="logo">
                <img src="./img/logo.png" alt="">
            </div>
            <nav>
                <a href=""><i class="fa-solid fa-table-cells-large"></i>TABLE LAYOUT</a>
                <a href=""><i class="fa-solid fa-clipboard-list"></i>ORDER LIST</a>
            </nav>
        </div> -->
        <div class="main">
            <!-- <div class="header">
                <i class="fa-solid fa-user"></i>
                <p>Nguyen Truong Thinh</p>
                <a href=""><i class="fa-solid fa-right-from-bracket"></i></a>
            </div> -->
            <div class="table_detail_container">
                <div class="table_wrapper">
                    <div class="shadow-4">
                        <div class="table_section_header">
                            <span>TABLE T-01</span>
                            <span>PAX: 1</span>
                        </div>
                        <div class="table_section_body">
                            <div class="table_section_item">
                                <span>Bill Status: </span>
                                <span>Not Paid</span>
                            </div>
                            <div class="table_section_item">
                                <span>Arrive Time: </span>
                                <span><?= date_create()->format('Y/m/d h:i:s')?></span>
                            </div>
                            <div class="table_section_item">
                                <span>Bill Amount: </span>
                                <span>500.000 VND</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order_wrapper">
                    <div class="order_section_header">
                        <span>Order List</span>
                        <a href="">Add New Order</a>
                    </div>
                    <div class="order_section_body">
                        <div class="main_header">
                            <span>Dish</span>
                            <span>Unit price</span>
                            <span>Quatanty</span>
                            <span>Status</span>
                        </div>
                        <div class="order_row shadow-4">
                            <div class="order_row_header">
                                <span>ID Order:</span>
                                <span>12345678</span>
                            </div>
                            <div class="order_row_body">
                                <div class="order_row_item">
                                    <span>Pizza</span>
                                    <span>1</span>
                                    <span>10.000 VND</span>
                                    <span>Waiting</span>
                                </div>
                                <div class="order_row_item">
                                    <span>Hamburger</span>
                                    <span>1</span>
                                    <span>180.000 VND</span>
                                    <span>Served</span>
                                </div>
                            </div>
                            <div class="order_row_total">
                                <span>Total:</span>
                                <span>190.000 VND</span>
                            </div>
                        </div>
                        <div class="order_row shadow-4">
                            <div class="order_row_header">
                                <span>ID Order</span>
                                <span>12345679</span>
                            </div>
                            <div class="order_row_body">
                                <div class="order_row_item">
                                    <span>Orange juice</span>
                                    <span>1</span>
                                    <span>50.000 VND</span>
                                    <span>Served</span>
                                </div>
                                <div class="order_row_item">
                                    <span>Pizza</span>
                                    <span>1</span>
                                    <span>350.000 VND</span>
                                    <span>Waiting</span>
                                </div>
                            </div>
                            <div class="order_row_total">
                                <span>Total:</span>
                                <span>400.000 VND</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="footer">
                <a class="back" href="">BACK</a>
                <button class="pay_order">Pay Order</button>
            </div>
        </div>
    </div>
</body>
</html>