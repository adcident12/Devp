
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Customer</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
            <?php 
                if($status){
                    echo '<div class="alert alert-'.$status['color'].'">'.$status['text'].'</div>';
                }
            ?>
                <div class="panel panel-default">
                    <div class="panel-heading">รายการสินค้า
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            เพิ่มสินค้า
                        </button>

                    </div>
                    <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>สินค้า</th>
                                        <th>ราคา(THB)</th>
                                        <th></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $i=1; foreach($product as $row) {?>
                                    <tr class="odd gradeX">
                                        <td class="text-center"><?php echo $i++; ?></td>
                                        <td><?php echo $row['Product_name']; ?></td>
                                        <td><?php echo $row['Product_price'];?></td>
                                        <td class="text-center">
                                         <a href="<?php echo site_url('Product/edit_form/'.$row['Product_id']);?>" class="btn btn-warning btn-md btn-block"> แก้ไข</a>
                                         <a href="<?php echo site_url('Product/clear/'.$row['Product_id']);?>" class="btn btn-danger btn-md btn-block" OnClick="return chkdel();"> ลบ</a>
                                        </td>
                                    </tr>
                                 <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
            
</div>
        <!-- /#page-wrapper -->
        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
         <form action="<?php echo site_url('/Product/add/');?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มสินค้า</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label> สินค้า</label>
                        <input class="form-control" type="text" name="product" placeholder="กรุณากรอก" required>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> ราคา(THB)</label>
                        <input class="form-control" type="number" min="0" name="price" placeholder="กรุณากรอก" required>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> จำนวน</label>
                        <input class="form-control" type="number" min="0" name="volume" placeholder="กรุณากรอก" disabled>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-success">บันทึก</button>
                </div>
            </div>
         </form>
        </div>
    </div>


    