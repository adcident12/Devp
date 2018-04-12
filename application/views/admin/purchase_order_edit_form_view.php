
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> แก้ไข Purchase Order</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
         <form action="<?php echo site_url('Purchase_order/edit_purchase_order/'.$PurchaseOder['PO_id']); ?>" method="post">
            <div class="panel-body">
                <div class="form-group">
                    <label> PO No.</label>
                    <p class="help-block"><code>*กรุณากรอก.</code></p>
                    <input class="form-control" type="text" name="PO_No" value="<?php echo $PurchaseOder['PO_No']; ?>" required>
                </div>

                <div class="form-group">
                    <label> วันที่ออก</label>
                    <p class="help-block"><code>*กรุณากรอก.</code></p>
                    <input class="form-control" type="text" name="PO_date" value="<?php echo $PurchaseOder['PO_date']; ?>" disabled>
                </div>

                <div class="form-group">
                    <label> วัน/เดือน/ปี(ส่ง)</label>
                    <p class="help-block"><code>*กรุณากรอก YYYY-MM-DD. ขณะนี้:<B id="demo"></B></code></p>
                    <input type="text" class="form-control" name="PO_delivery_date" placeholder="YYYY-MM-DD" value="<?php echo $PurchaseOder['PO_delivery_date']; ?>" required 
                    pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
                    title="Enter a date in this format YYYY-MM-DD"/>
                        
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



    