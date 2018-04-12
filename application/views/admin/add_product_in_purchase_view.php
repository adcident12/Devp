
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> เพิ่มสินค้าใน Quotation</h1>
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
                            เพิ่มและแก้ไขสินค้า
                        </button>
                    </div>
                    <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table  table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>สินค้า</th>
                                        <th>จำนวน</th>
                                        <th>ราคารวมVAT</th>
                                        <th></th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $i=1; foreach($product_in_QD as $row) {?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['Pro_name']; ?></td>
                                        <td><?php echo $row['Pd_qty']; ?></td>
                                        <td><?php echo $row['Pd_price']; ?></td>
                                        <td class="text-center">
                                        <form action="<?php echo site_url('Purchase_order/clear/'.$row['Pd_id'].'/'.$row['PO_id']);?>" method="">
                                        <button type="submit" class="btn btn-danger" OnClick="return chkdel();"> ลบ</button>
                                        </form>
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
         <form action="<?php echo site_url('Purchase_order/add_product_in_purchase_order');?>" method="post">
         <input  type="hidden" name="PO_id" value="<?php echo $PO_id; ?>">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มสินค้า</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label> Quotation</label>
                        <p class="help-block"><code>*กรุณาเลือก.</code></p>
                            <select class="form-control" name="Quo_id" id="Quo_id" >
                                <option>--- กรุณาเลือก ---</option>
                                <?php foreach($QD_Q_P_C as $row) {?>
                                <option value="<?php echo $row['Quo_id'];?>" data-name="<?php echo $row['Pro_id'];?>" data-name1="<?php echo $row['Qd_qty'];?>" data-name2="<?php echo $row['Qd_total_vat'];?>"><?php echo $row['Quo_volume']; ?></option>
                                <?php } ?>
                            </select>
                    </div>

                    <div class="form-group">
                        <!-- <label> สินค้า</label> -->
                        <!-- <p class="help-block"><code>*กรุณากรอก.</code></p> -->
                        <input class="form-control" type="hidden" name="Pro_id" id="Pro_id" required>
                    </div>

                    <div class="form-group">
                        <!-- <label> จำนวน</label> -->
                        <!-- <p class="help-block"><code>*กรุณากรอก.</code></p> -->
                        <input class="form-control" type="hidden" name="Pd_qty" id="Pd_qty" required>
                    </div>

                    <div class="form-group">
                        <!-- <label> ราคารวมVAT</label> -->
                        <!-- <p class="help-block"><code>*กรุณากรอก.</code></p> -->
                        <input class="form-control" type="hidden" name="Pd_price" id="Pd_price" required>
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
    
<script>
jQuery(document).ready(function() {
    jQuery('#Quo_id').on('change', function() {
        var contact_name = jQuery("#Quo_id option:selected").data('name')
        var contact_name1 = jQuery("#Quo_id option:selected").data('name1')
        var contact_name2 = jQuery("#Quo_id option:selected").data('name2')
        jQuery("#Pro_id").val(contact_name)
        jQuery("#Pd_qty").val(contact_name1)
        jQuery("#Pd_price").val(contact_name2)
    })      
})
</script>


    