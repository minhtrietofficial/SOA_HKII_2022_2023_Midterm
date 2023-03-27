
<?php
require_once ('models/table.php');
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary text-center">Danh sách bàn</h1>
 
    </div>

    <div class="card-body">
        <a href="index.php?controller=table&action=insert" class="btn btn-primary mb-3">Thêm</a>
        <div class="table-responsive">
            <table class="table table-bordered"  id="dataTable" width="40%" >
                <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Sức chứa</th>
                </tr>
                </thead>
              
                <tbody>

                <?php
                foreach ($table as $item){

                    ?>
                    <form method="post">
                        <tr  class="table_header">
                            <td class="text-center"><?= $item->table_id ?></td>
                            <td class="text-center"><?= $item->max_capacity?></td>
                            <td class="text-center"><?= $item->table_status?></td>

                            <td class="text-center"><!--<a  href="index.php?controller=khachhangs&action=showPost&id=--><!--"  class='btn btn-primary mr-3'>Details</a>-->
                            <a  href="index.php?controller=table&action=edit&id=<?= $item->id?>"  class='btn btn-primary mr-3'>Edit</a>
                            <button type="submit" name="dele" value="<?= $item->id ?>"    class='btn btn-danger'>Delete</button>
                    </form>
                    </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
if(isset($_POST['dele'])){
    $id =$_POST['dele'];
    table::delete($id);
}
?>


