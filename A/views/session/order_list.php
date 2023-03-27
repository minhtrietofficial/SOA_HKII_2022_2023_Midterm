<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
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
        <div class="sidebar">
            <div class="logo">
                <img src="./img/logo.png" alt="">
            </div>
            <nav>
                <a href=""><i class="fa-solid fa-table-cells-large"></i>TABLE LAYOUT</a>
                <a href=""><i class="fa-solid fa-clipboard-list"></i>ORDER LIST</a>
            </nav>
        </div>
        <div class="main">
            <div class="header">
                <i class="fa-solid fa-user"></i>
                <p>Nguyen Truong Thinh</p>
                <a href=""><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
            <div class="list_content">
                <div class="list_order">
                    <div class="status_filter">
                        <h2>Status Filter</h2>
                        <select name="order_status" id="">
                            <option value="1">Placed</option>
                            <option value="2">Preparing</option>
                            <option value="3">All Completed</option>
                            <option value="4">All Served</option>
                            <option value="5">Canceled</option>
                        </select>
                    </div>
                    <div class="list_wrapper">
                        <div class="list_order_item placed">
                            <div class="item_header">
                                <span>ID: <b>12345678</b></span>
                            </div>
                            <div class="item_body">T-01</div>
                            <div class="item_footer">
                                <span><i class="fa-solid fa-clock"></i>12:30:00</span>
                                <span></span>
                                <span>Preparing</span>
                            </div>
                        </div>
                        <div class="list_order_item prepare">
                            <div class="item_header">
                                <span>ID: <b>12345678</b></span>
                            </div>
                            <div class="item_body">T-01</div>
                            <div class="item_footer">
                                <span><i class="fa-solid fa-clock"></i>12:30:00</span>
                                <span></span>
                                <span>All Completed</span>
                            </div>
                        </div>
                        <div class="list_order_item completed">
                            <div class="item_header">
                                <span>ID: <b>12345678</b></span>
                            </div>
                            <div class="item_body">T-01</div>
                            <div class="item_footer">
                                <span><i class="fa-solid fa-clock"></i>12:30:00</span>
                                <span></span>
                                <span>Preparing</span>
                            </div>
                        </div>
                        <div class="list_order_item served">
                            <div class="item_header">
                                <span>ID: <b>12345678</b></span>
                            </div>
                            <div class="item_body">T-01</div>
                            <div class="item_footer">
                                <span><i class="fa-solid fa-clock"></i>12:30:00</span>
                                <span></span>
                                <span>Preparing</span>
                            </div>
                        </div>
                        <div class="list_order_item canceled">
                            <div class="item_header">
                                <span>ID: <b>12345678</b></span>
                            </div>
                            <div class="item_body">T-01</div>
                            <div class="item_footer">
                                <span><i class="fa-solid fa-clock"></i>12:30:00</span>
                                <span></span>
                                <span>Preparing</span>
                            </div>
                        </div>
                        <div class="list_order_item completed">
                            <div class="item_header">
                                <span>ID: <b>12345678</b></span>
                            </div>
                            <div class="item_body">T-01</div>
                            <div class="item_footer">
                                <span><i class="fa-solid fa-clock"></i>12:30:00</span>
                                <span></span>
                                <span>Preparing</span>
                            </div>
                        </div>
                        <div class="list_order_item served">
                            <div class="item_header">
                                <span>ID: <b>12345678</b></span>
                            </div>
                            <div class="item_body">T-01</div>
                            <div class="item_footer">
                                <span><i class="fa-solid fa-clock"></i>12:30:00</span>
                                <span></span>
                                <span>Preparing</span>
                            </div>
                        </div>
                        <div class="list_order_item canceled">
                            <div class="item_header">
                                <span>ID: <b>12345678</b></span>
                            </div>
                            <div class="item_body">T-01</div>
                            <div class="item_footer">
                                <span><i class="fa-solid fa-clock"></i>12:30:00</span>
                                <span></span>
                                <span>Preparing</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list_order_detail">
                    <div class="detail_title">
                        <span>Order Detail</span>
                        <span>Serve All</span>
                    </div>
                    <div class="detail_table">
                        <div class="table_row head">
                            <div>Items</div>
                            <div>Qty</div>
                            <div>Status</div>
                            <div>Action</div>
                        </div>
                        <div class="table_row_wrapper">
                            <div class="table_row">
                                <div>
                                    <div>Burger</div>
                                    <div><b>Note: </b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                                <div>5</div>
                                <div class="detail_status">Completed</div>
                                <div><span class="serve_btn">Serve</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
            </div>
        </div>
    </div>
</body>
</html>