
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> แก้ไข Quotation</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
         <form action="<?php echo site_url('Quotation/edit/'.$customer_in_quotation_by_id['Quo_id']); ?>" method="post">
            <div class="panel-body">
            <div class="form-group">
                        <label> เล่มที่</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="Quo_volume" value="<?php echo $customer_in_quotation_by_id['Quo_volume']; ?>">
                    </div>

                    <div class="form-group">
                        <label> เลขที่</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="Quo_number" value="<?php echo $customer_in_quotation_by_id['Quo_number']; ?>" >
                    </div>
                    
                    <div class="form-group">
                        <label> คุณ</label>
                        <p class="help-block"><code>*กรุณาเลือก.</code></p>
                        <select class="form-control" name="Cus_id" id="Cus_id" >
                            <option value="<?php echo $customer_in_quotation_by_id['Cus_id']; ?>" selected><?php echo $customer_in_quotation_by_id['Cus_dealName']." ".$customer_in_quotation_by_id['Cus_dealLlastName']; ?></option>
                            <?php foreach($customer as $row) {?>
                            <option value="<?php echo $row['Cus_id'];?>" data-name="<?php echo $row['Cus_CopName'];?>"><?php echo $row['Cus_dealName']." ".$row['Cus_dealLlastName'];?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label> บริษัท</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" id="Cus_CopName" value="<?php echo $customer_in_quotation_by_id['Cus_CopName']; ?>">
                    </div>

                    <div class="form-group" >
                        <label> วัน/เดือน/ปี</label>
                        <p class="help-block"><code>*กรุณากรอก YYYY-MM-DD. ขณะนี้:<B id="demo"></B></code></p>
                        <input type="text" class="form-control" name="Quo_date" placeholder="YYYY-MM-DD" value="<?php echo $customer_in_quotation_by_id['Quo_date']; ?>" required 
                            pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
                            title="Enter a date in this format YYYY-MM-DD"/>
                                
                    </div>

                    <div class="form-group">
                        <label> ระยะเวลาที่ชำระ</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="number" min="" name="Quo_payment" value="<?php echo $customer_in_quotation_by_id['Quo_payment'];?>">
                    </div>

                    <div class="form-group">
                        <label> ระยะเวลาที่ส่ง</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="number" min="" name="Quo_delivery" value="<?php echo $customer_in_quotation_by_id['Quo_delivery'];?>" >
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

<script>
jQuery(document).ready(function() {
    jQuery('#Cus_id').on('change', function() {
        var contact_name = jQuery("#Cus_id option:selected").data('name')
        jQuery("#Cus_CopName").val(contact_name)
    })      
})
</script>


    