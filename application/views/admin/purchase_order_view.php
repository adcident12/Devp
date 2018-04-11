
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
                                        <th>ลำดับ</th>
                                        <th>วันที่ออก PO</th>
                                        <th>วันที่ออกส่ง</th>
                                        <th>เลขที่ใบเสนอราคา</th>
                                        <th>PO NO.</th>
                                        <th>บริษัท</th>
                                        <th>ผู้สั่งซื้อ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                 <?php $i=1; foreach($purchase_order as $row) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $row['Purchase_Order_date_create'];?></td>
                                        <td><?php echo $row['Purchase_Order_date_delivery'];?></td>
                                        <td><?php echo $row['Purchase_Order_Qnum'];?></td>
                                        <td><?php echo $row['Purchase_Order_num'];?></td>
                                        <td><?php echo $row['Purchase_Order_company'];?></td>
                                        <td><?php echo $row['Purchase_Order_person'];?></td>
                                        <td class="text-center">
                                         <a href="" class="btn btn-info"> เพิ่มสินค้า</a>
                                         <a href="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"> แก้ไข</a>
                                         <a href="" class="btn btn-danger" OnClick="return chkdel();"> ลบ</a>
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
                        <label> คุณ</label>
                        <p class="help-block"><code>*กรุณาเลือก.</code></p>
                        <select class="form-control" name="person" id="person" required>
                            <option>--- กรุณาเลือก ---</option>
                         <?php foreach ($company_by_customer as $row) { ?>
                            <option value="<?php echo $row['Customer_name'];?>" data-name="<?php echo $row['Company_name'];?>" data-name1="<?php echo $row['Customer_tex'];?>"><?php echo $row['Customer_name']." บริษัท ".$row['Company_name'];?></option>
                         <?php } ?>   
                        </select>
                    </div>

                    <div class="form-group">
                        <label> เลขที่ใบเสนอราคา</label>
                        <p class="help-block"><code>*กรุณาเลือก.</code></p>
                        <select class="form-control" name="Qnum" id="Qnum" required>
                            <option>--- กรุณาเลือก ---</option>
                         <?php foreach ($quotation as $row) { ?>
                            <option value="<?php echo $row['Qoutation_num'];?>" data-name="<?php echo $row['Quotation_product'];?>" ><?php echo $row['Qoutation_num']." สินค้า ".$row['Quotation_product'];?></option>
                         <?php } ?>   
                        </select>
                    </div>

                    <div class="form-group">
                        <label> สินค้า</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="product" id="product" required>
                    </div>

                    <div class="form-group">
                        <label> PO No.</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="po" placeholder="กรุณากรอก" required>
                    </div>

                    <div class="form-group">
                        <label> บริษัท</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="company" id="company" required>
                    </div>

                    <div class="form-group">
                        <label> เลขที่ประจำตัวผู้เสียภาษี</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="tax" id="tax" required>
                    </div>

                    <div class="form-group">
                        <label> วัน/เดือน/ปี(ส่ง)</label>
                        <p class="help-block"><code>*กรุณากรอก YYYY-MM-DD. ขณะนี้:<B id="demo"></B></code></p>
                            <input type="text" class="form-control" name="date" placeholder="YYYY-MM-DD" required 
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

    



    