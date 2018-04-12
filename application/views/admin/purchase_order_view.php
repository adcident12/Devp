
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Purchase Order</h1>
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
                    <div class="panel-heading">รายการการสั่งซื้อ
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            เพิ่ม PO
                        </button>

                    </div>
                    <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>PO NO.</th>
                                        <th>วันที่สร้าง</th>
                                        <th>วันที่ส่ง</th>
                                        <th>เลขที่ใบเสนอราคา</th>
                                        <th>บริษัท</th>
                                        <th>ผู้สั่งซื้อ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $i=1; foreach($PurchaseOder as $row) {?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['PO_No']; ?></td>
                                        <td><?php echo $row['PO_date']; ?></td>
                                        <td><?php echo $row['PO_delivery_date']; ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                         <a href="<?php echo site_url('Purchase_order/add_from_product_in_purchase_order/'.$row['PO_id']);?>" class="btn btn-info"> เพิ่มสินค้า</a>
                                         <a href="<?php echo site_url('Purchase_order/edit_from_purchase_order/'.$row['PO_id']);?>" class="btn btn-warning"> แก้ไข</a>
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

        <!-- Modal Add PO -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
         <form action="<?php echo site_url('Purchase_order/add_purchase_order');?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่ม PO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label> PO No.</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="PO_No" placeholder="กรุณากรอก" required>
                    </div>

                    <div class="form-group">
                        <label> วันที่ออก</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="PO_date" value="<?php echo date('Y-m-d');?>" required disabled>
                    </div>

                    <div class="form-group">
                        <label> วัน/เดือน/ปี(ส่ง)</label>
                        <p class="help-block"><code>*กรุณากรอก YYYY-MM-DD. ขณะนี้:<B id="demo"></B></code></p>
                            <input type="text" class="form-control" name="PO_delivery_date" placeholder="YYYY-MM-DD" required 
                                pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
                                title="Enter a date in this format YYYY-MM-DD"/>
                        
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="submit" class="btn btn-success">บันทึก</button>
                    </div>
                </div>
         </form>
            </div>
        </div>
    </div>

<script>
jQuery(document).ready(function() {
    jQuery('#person').on('change', function() {
        var contact_name = jQuery("#person option:selected").data('name')
        var contact_name1 = jQuery("#person option:selected").data('name1')
        jQuery("#company").val(contact_name)
        jQuery("#tax").val(contact_name1)
    })      
})
</script>

<script>
jQuery(document).ready(function() {
    jQuery('#Qnum').on('change', function() {
        var contact_name = jQuery("#Qnum option:selected").data('name')
        jQuery("#product").val(contact_name)
    })      
})
</script>

    



    