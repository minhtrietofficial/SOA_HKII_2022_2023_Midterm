<?php
    require_once ('models/invoice.php');
?>
<div class="container">
    <div class="sidebar">
        <div class="logo">
            <img src="Assets/img/logo.png" alt="logo">
        </div>
        <nav>
            <a href="index.php"><i class="fa-solid fa-table-cells-large"></i>TABLE LAYOUT</a>
            <a href=""><i class="fa-solid fa-clipboard-list"></i>ORDER LIST</a>
        </nav>
    </div>
    <div class="main">
        <div class="header">
            <i class="fa-solid fa-user"></i>
            <p>Nguyen Truong Thinh</p>
            <a href="./logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
        <div class="table_detail_container">
            <div class="table_wrapper">
                <div class="shadow-4">
                    <div class="table_section_header">
                        <span>TABLE <?= $session -> id_table?></span>
                        <span>PAX: 1</span>
                    </div>
                    <div class="table_section_body">
                        <div class="table_section_item">
                            <span>Bill Status: </span>
                            <span><?php if($session -> invoice_status == 1){
                                echo "Not paid";
                            }else{echo"Paid";}?>
                            </span>
                        </div>
                        <div class="table_section_item">
                            <span>Arrive Time: </span>
                            <span><?= date_create($session -> arrive_time)->format('h:i:s d/m/Y')?></span>
                        </div>
                        <div class="table_section_item">
                            <span>Bill Amount: </span>
                            <span><?= number_format($session -> pay_amount, 0, ".", ",")?> VND</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order_wrapper">
                <div class="order_section_header">
                    <span>Order List</span>
                    <a href="index.php?controller=session&action=menu">Add New Order</a>
                </div>
                <div class="order_section_body">
                    <div class="main_header">
                        <span>Dish</span>
                        <span>Unit price</span>
                        <span>Quatanty</span>
                        <span>Status</span>
                    </div>
                    <!-- <div class="order_row shadow-4">
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
                    </div> -->
                  

                </div>
            </div>
        </div>
        <div class="footer">
            <a class="back" href="">BACK</a>
            <button class="pay_order">Pay Order</button>
        </div>
    </div>
</div>