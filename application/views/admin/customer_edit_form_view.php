
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> แก้ไข Customer</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
            <form action="<?php echo site_url('Customer/edit/'.$edit_customer['Cus_id']);?>" method="post">
            <div class="panel-body">
            <div class="modal-body">
                    <div class="form-group">
                        <label> บริษัท</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="company"  value="<?php echo $edit_customer['Cus_CopName']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label> ที่อยู่</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <textarea class="form-control" type="text" name="address" rows="3"  required><?php echo $edit_customer['Cus_address']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label> โทรศัพท์</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="tel" name="telephone"  value="<?php echo $edit_customer['Cus_tel']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label> Fax</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="fax"  value="<?php echo $edit_customer['Cus_fax']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label> Email</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="email" name="email"  value="<?php echo $edit_customer['Cus_email']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label> Tax</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="tax"  value="<?php echo $edit_customer['Cus_tax']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label> ชื้อ</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="name"  value="<?php echo $edit_customer['Cus_dealName']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label> นามสกุล</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="last_name"  value="<?php echo $edit_customer['Cus_dealLlastName']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label> มือถือ</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="tel" name="phone"  value="<?php echo $edit_customer['Cus_dealTel']; ?>" required>
                    </div>

                <div class="footer text-center">
                    <button type="reset" class="btn btn-danger"> ยกเลิก</button>
                    <button type="submit" class="btn btn-success"> บันทึก</button>
                </div>
            </div>
         </form>
                                      
        </div>
        <!-- /.row -->
    </div>
    
</div>



    