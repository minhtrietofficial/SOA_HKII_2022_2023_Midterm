
<?php
require_once ('models/category.php');
//?>
<!-- Page Heading -->
<!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.-->
<!--    For more information about DataTables, please visit the <a target="_blank"-->
<!--                                                               href="https://datatables.net">official DataTables documentation</a>.</p>-->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary text-center">Category List</h1>
 
    </div>

    <div class="card-body">
        <a href="index.php?controller=category&action=insert" class="btn btn-primary mb-3">Thêm</a>
        <div class="table-responsive">
            <table class="table table-bordered"  id="dataTable" width="40%" >
                <thead>
                <tr>
                    <!-- <th class="text-center">ID</th> -->
                    <th class="text-center">Category</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>

                <tbody>

                <?php
                foreach ($category as $item){

                    ?>
                    <form method="post">
                        <tr>
                            <!-- <td class="text-center"><?= $item->cate_it   ?></td> -->
                            <td class="text-center"><?= $item->cate_name?></td>
                            <td class="text-center"><!--<a  href="index.php?controller=khachhangs&action=showPost&id=--><!--"  class='btn btn-primary mr-3'>Details</a>-->
                            <a  href="index.php?controller=category&action=edit&id=<?= $item->cate_it?>"  class='btn btn-primary mr-3'>Edit</a>
                            <button type="submit" name="dele" value="<?= $item->Icate_itd ?>"    class='btn btn-danger'>Delete</button>
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
    category::delete($id);
}
?>


