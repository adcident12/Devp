
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
                                        <th>ราคา</th>
                                        <th>จำนวน</th>
                                        <th>ราคารวม</th>
                                        <th>VAT(%)</th>
                                        <th>ราคารวมVAT</th>
                                        <th></th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $i=1; foreach($get_Quotation_detail_in_product as $row) {?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['Pro_name']; ?></td>
                                        <td><?php echo $row['Qd_price']; ?></td>
                                        <td><?php echo $row['Qd_qty']; ?></td>
                                        <td><?php echo $row['Qd_total']; ?></td>
                                        <td><?php echo $row['Qd_vat']; ?></td>
                                        <td><?php echo $row['Qd_total_vat']; ?></td>
                                        <td class="text-center">
                                        <form action="<?php echo site_url('Quotation/clear/'.$row['Quo_id'].'/'.$row['Cus_id']);?>" method="">
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
         <form action="<?php echo site_url('Quotation/add_product/');?>" method="post">
         <input  type="hidden" name="Quo_id" value="<?php echo $Quo_id; ?>">
         <input  type="hidden" name="Cus_id" value="<?php echo $Cus_id ;?>">

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
                        <p class="help-block"><code>*กรุณาเลือก.</code></p>
                        <select class="form-control" name="Pro_id" >
                            <option>--- กรุณาเลือก ---</option>
                            <?php foreach($product as $row) {?>
                            <option value="<?php echo $row['Pro_id'];?>" ><?php echo $row['Pro_name'];?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label> ราคา</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="number" min="0" name="Qd_price" value="<?php echo $Quotation_detail['Qd_price']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label> จำนวน</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="number" min="0" name="Qd_qty" value="<?php echo $Quotation_detail['Qd_qty']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label> VAT(%)</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="number" min="0" name="Qd_vat" value="<?php echo $Quotation_detail['Qd_vat']; ?>" required>
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


    