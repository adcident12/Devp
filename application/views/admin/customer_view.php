
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
                    <div class="panel-heading">รายการลูกค้า
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            เพิ่มลูกค้า
                        </button>

                    </div>
                    <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>บริษัท</th>
                                        <th>ผู้สั่งซื้อ</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>Email</th>
                                        <th>เลขที่ประจำตัวผู้เสียภาษี</th>
                                        <th>หมายเหตุ</th>
                                        <th>รายละเอียด</th>
                                        <th></th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $i=1; foreach($data as $row){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $row['company_by_customer']['Company_name'];?></td>
                                        <td><?php echo $row['customer']['Customer_name'];?></td>
                                        <td><?php echo $row['customer']['Customer_phone'];?></td>
                                        <td><?php echo $row['customer']['Customer_email'];?></td>
                                        <td><?php echo $row['customer']['Customer_tex'];?></td>
                                        <td><?php echo $row['customer']['Customer_comment'];?></td>
                                        <td class="text-center">
                                         <a href="" class="btn btn-info btn-md btn-block"> ประวัติการสั่งซื้อ</a> 
                                        </td>
                                        <td class="text-center">
                                         <a href="<?php echo site_url('Customer/edit_form/'.$row['customer']['Customer_id']);?>" class="btn btn-warning btn-md btn-block"> แก้ไข</a>
                                         <a href="<?php echo site_url('Customer/clear/'.$row['customer']['Customer_id']);?>" class="btn btn-danger btn-md btn-block" OnClick="return chkdel();"> ลบ</a>
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
         <form action="<?php echo site_url('/Customer/add/');?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มลูกค้า</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label> บริษัท</label>
                            <select class="form-control" name="company">
                                <option>---กรุณาเลือก---</option>
                                <?php foreach($company as $row) { ?>
                                <option value="<?php echo $row['Company_id'];?>"><?php echo $row['Company_name'];?></option>
                                <?php } ?>
                            </select>
                            <p class="help-block"><code>*กรุณากรอกเลือก.</code></p>
                        
                    </div>
                    
                    <div class="form-group">
                        <label> เลขที่ประจำตัวผู้เสียภาษี</label>
                        <input class="form-control" type="text" name="tax" placeholder="กรุณากรอก" required>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> ผู้ติดต่อ</label>
                        <input class="form-control" type="text" name="person" placeholder="กรุณากรอก" required>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> เบอร์ติดต่อ</label>
                        <input class="form-control" type="tel" name="phone" placeholder="กรุณากรอก" required>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> E-mail</label>
                        <input class="form-control" type="email" name="email" placeholder="กรุณากรอก" required>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> หมายเหตุ</label>
                        <input class="form-control" type="text" name="comment" placeholder="กรุณากรอก" required>
                        <p class="help-block"><code>*กรอกหรือไม่กรอกได้.</code></p>
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


    