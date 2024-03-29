<?php
require_once('models/table.php');
require_once('models/invoice.php');

?>

<div class="message free_msg">
    <i class="fa-solid fa-circle-exclamation"></i>
    <h1>Confirm</h1>
    <p>Are you sure want to open <strong>Table T-01</strong>?</p>
    <div>
        <button id="yes">Yes, Open it</button>
        <button id="cancel">Cancel</button>
    </div>
</div>
<div class="message occupied_msg">
    <h1>Table T-01</h1>
    <a href="">Edit ORDER</a>
    <a href="">View ORDER</a>
    <a href="">Move TABLE</a>
</div>
<!-- <div id="overlay"></div> -->
<div class="container">
        <?php include("Modules/SideBar.php"); ?>
    <div class="main">
        <?php include("Modules/Header.php"); ?>
        <div class="content">
            <div class="table_container">
                <?php
                    foreach ($table as $item) {
                        
                ?>

                <div class="table status" tablestatus="<?= $item->table_status?>">
                    <div class="table_header">
                        <p class="table_name"><?= $item->table_id ?></p>
                        <div class="table_pax_ctn">
                            <i class="fa-solid fa-user"></i>
                            <p class="table_pax"><?= $item->max_capacity ?></p>
                        </div>
                    </div>
                    <div class="table_status"><?= $item->table_status?></div>
                    <div class="table_footer">
                        <div class="arrive_time_ctn" tablestatus="<?= $item->table_status?>">
                            <i class="fa-solid fa-clock"></i>
                            <p class="arrive_time"><?php
                                if($item->table_status == "Occupied"){
                                    $session = invoice::find_session($item->id);
                
                                    echo date_create($session -> arrive_time)->format('h:i:s');
                                }else{
                                    echo "";
                                }
                                ?></p>
                        </div>

                        <div class="button_access" tablestatus="<?= $item->table_status?>"><a
                                href="index.php?controller=session&action=insert&table_id=<?= $item->id ?>">Access</a>
                        </div>
                        <div class="button_view" tablestatus="<?= $item->table_status?>"><a
                                href="index.php?controller=session&action=detail_session&table_id=<?= $item->id ?>">View</a>
                        </div>

                    </div>
                </div>
                <?php
                    }
                    ?>
            </div>
        </div>
    </div>
</div>