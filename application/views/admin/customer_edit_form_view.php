
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
            <form action="<?php echo site_url('Customer/edit/'.$customer['Customer_id']); ?>" method="post">
            <div class="panel-body">
            <div class="form-group">
                        <label> บริษัท</label>
                            <select class="form-control" name="company">
                                <option value="<?php echo $company_by_customer['Company_id'];?>"><?php echo $company_by_customer['Company_name'];?></option>
                                <?php foreach($company as $row) { ?>
                                <option value="<?php echo $row['Company_id'];?>"><?php echo $row['Company_name'];?></option>
                                <?php } ?>

                            </select>
                            <p class="help-block"><code>*กรุณากรอกเลือก.</code></p>
                        
                    </div>
                    
                    <div class="form-group">
                        <label> เลขที่ประจำตัวผู้เสียภาษี</label>
                        <input class="form-control" type="text" name="tax" value="<?php echo $customer['Customer_tex'];?>" required>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> ผู้ติดต่อ</label>
                        <input class="form-control" type="text" name="person" value="<?php echo $customer['Customer_name'];?>" required>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> เบอร์ติดต่อ</label>
                        <input class="form-control" type="tel" name="phone" value="<?php echo $customer['Customer_phone'];?>" required>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> E-mail</label>
                        <input class="form-control" type="email" name="email" value="<?php echo $customer['Customer_email'];?>" required>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> หมายเหตุ</label>
                        <input class="form-control" type="text" name="comment" value="<?php echo $customer['Customer_comment'];?>" required>
                        <p class="help-block"><code>*กรอกหรือไม่กรอกได้.</code></p>
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



    