
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> แก้ไข Product</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
         <form action="<?php echo site_url('Product/edit/'.$product['Pro_id']); ?>" method="post">
            <div class="panel-body">
                <div class="form-group">
                    <label> สินค้า</label>
                    <p class="help-block"><code>*กรุณากรอก.</code></p>
                    <input class="form-control" type="text" name="Pro_name" value="<?php echo $product['Pro_name'];?>" required>
                </div>

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



    