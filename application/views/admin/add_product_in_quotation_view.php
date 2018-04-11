
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
                                        <th>สินค้า</th>
                                        <th>ราคารวม(THB)</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if($product_in_quotation['Quotation_product'] == '' || $product_in_quotation['Quotation_price'] == ''){?>
                                    <tr class="odd gradeX">
                                        <td>No data available in table</td>
                                        <td></td>
                                    </tr> 
                                <?php }else{ ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $product_in_quotation['Quotation_product'];?></td>
                                        <td><?php echo $product_in_quotation['Quotation_price']."/".$product_in_quotation['Quotation_volume']." ชิ้น";?></td>
                                    </tr> 

                                <?php }?>
                         
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
         <form action="<?php echo site_url('Quotation/add_product/'.$product_in_quotation['Quotation_id']);?>" method="post">
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
                        <textarea class="form-control" type="text" rows="3" name="product" required><?php echo $product_in_quotation['Quotation_product'];?></textarea>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> ราคา(THB)</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="number" min="0" name="price" placeholder="กรุณากรอก" required>
                    </div>

                    <div class="form-group">
                        <label> จำนวน</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="number" min="0" name="volume" value="<?php echo $product_in_quotation['Quotation_volume'];?>" required>
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


    