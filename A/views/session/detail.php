<?php
    require_once ('models/invoice.php');
?>
<div class="container">
    <?php
        include("Modules/SideBar.php");
    ?>
    <div class="main">
        <?php
            include("Modules/Header.php");
        ?>
        <div class="content">
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
</div>
       
        
