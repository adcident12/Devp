
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> แก้ไข Company</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
            <form action="<?php echo site_url('Company/edit/'.$edit_company['Company_id']);?>" method="post">
            <div class="panel-body">
                <div class="form-group">
                    <label> บริษัท</label>
                    <input class="form-control" type="text" name="company" value="<?php echo $edit_company['Company_name'];?>" required>
                    <p class="help-block"><code>*กรุณากรอก.</code></p>
                </div>
                        
                <div class="form-group">
                    <label> ที่อยู่</label>
                    <textarea class="form-control" type="text" name="address" rows="3" required><?php echo $edit_company['Company_address'];?></textarea>
                    <p class="help-block"><code>*กรุณากรอก.</code></p>
                </div>

                <div class="form-group">
                    <label> โทรศัพท์</label>
                    <input class="form-control" type="tel" name="telephone" value="<?php echo $edit_company['Company_telephone'];?>" required>
                    <p class="help-block"><code>*กรุณากรอก.</code></p>
                </div>

                <div class="form-group">
                    <label> Fax</label>
                    <input class="form-control" type="text" name="fax" value="<?php echo $edit_company['Company_fax'];?>" required>
                    <p class="help-block"><code>*กรุณากรอก.</code></p>
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



    