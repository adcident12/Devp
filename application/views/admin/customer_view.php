
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
                                        <th>รายละเอียด</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>ABC จำกัด</td>
                                        <td>นาย ก ไก่</td>
                                        <td>081-111111</td>
                                        <td class="text-center">
                                         <a href="" class="btn btn-info btn-md btn-block"> ประวัติการสั่งซื้อ</a> 
                                        </td>
                                        <td class="text-center">
                                         <a href="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"> แก้ไข</a>
                                         <a href="" class="btn btn-danger" OnClick="return chkdel();"> ลบ</a>
                                        </td>
                                    </tr>
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
         <form action="" method="post">
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
                        <input class="form-control" type="text" name="company" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>
                    
                    <div class="form-group">
                        <label> ที่อยู่</label>
                        <textarea class="form-control" type="text" name="address" rows="3" placeholder="กรุณากรอก"></textarea>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> โทรศัพท์</label>
                        <input class="form-control" type="tel" name="telephone" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> Fax</label>
                        <input class="form-control" type="text" name="fax" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> เลขที่ประจำตัวผู้เสียภาษี</label>
                        <input class="form-control" type="text" name="tax" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> ผู้ติดต่อ</label>
                        <input class="form-control" type="text" name="person" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> เบอร์ติดต่อ</label>
                        <input class="form-control" type="tel" name="phone" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> E-mail</label>
                        <input class="form-control" type="email" name="email" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> หมายเหตุ</label>
                        <input class="form-control" type="text" name="comment" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรอกหรือไม่กรอกได้.</code></p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button type="button" class="btn btn-success">บันทึก</button>
                </div>
            </div>
         </form>
        </div>
    </div>


    