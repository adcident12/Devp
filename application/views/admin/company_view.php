
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
                            เพิ่มบริษัท
                        </button>

                    </div>
                    <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>บริษัท</th>
                                        <th>ที่อยู่</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>เบอร์Fax</th>
                                        <th>รายละเอียด</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  $i=1; foreach($company as $row) { ?>
                                    <tr class="odd gradeX">
                                        <td class="text-center"><?php echo $i++; ?></td>
                                        <td><?php echo $row['Company_name'];?></td>
                                        <td><?php echo $row['Company_address'];?></td>
                                        <td><?php echo $row['Company_telephone'];?></td>
                                        <td><?php echo $row['Company_fax'];?></td>
                                        <td class="text-center">
                                         <a href="<?php echo site_url('Company/edit_form/'.$row['Company_id']);?>" class="btn btn-warning"> แก้ไข</a>
                                         <a href="<?php echo site_url('Company/clear/'.$row['Company_id']);?>" class="btn btn-danger" OnClick="return chkdel();"> ลบ</a>
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
         <form action="<?php echo site_url('/Company/add/');?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มบริษัท</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label> บริษัท</label>
                        <input class="form-control" type="text" name="company" placeholder="กรุณากรอก" required>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>
                    
                    <div class="form-group">
                        <label> ที่อยู่</label>
                        <textarea class="form-control" type="text" name="address" rows="3" placeholder="กรุณากรอก" required></textarea>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> โทรศัพท์</label>
                        <input class="form-control" type="tel" name="telephone" placeholder="กรุณากรอก" required>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> Fax</label>
                        <input class="form-control" type="text" name="fax" placeholder="กรุณากรอก" required>
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


    