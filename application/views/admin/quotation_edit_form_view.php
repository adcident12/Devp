
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
         <form action="<?php echo site_url('Quotation/edit/'.$qoutation_by_id['Quotation_id']); ?>" method="post">
            <div class="panel-body">
                <div class="form-group">
                    <label> เลขที่อ้างอิง</label>
                    <p class="help-block"><code>*กรุณากรอก.</code></p>
                    <input class="form-control" type="number" min="0" name="quotation" value="<?php echo $qoutation_by_id['Qoutation_num'];?>">
                </div>
                    
                <div class="form-group">
                    <label> คุณ</label>
                    <p class="help-block"><code>*กรุณาเลือก.</code></p>
                    <select class="form-control" name="person" id="person" >
                        <option value="<?php echo $qoutation_by_id['Quotation_person'];?>" data-name="<?php echo $qoutation_by_id['Quotation_company'];?>" disabled><?php echo $qoutation_by_id['Quotation_person']." บริษัท ".$qoutation_by_id['Quotation_company'];?></option>
                         <?php foreach ($company_by_customer as $row) { ?>
                            <option value="<?php echo $row['Customer_name'];?>" data-name="<?php echo $row['Company_name'];?>"><?php echo $row['Customer_name']." บริษัท ".$row['Company_name'];?></option>
                         <?php } ?>   
                    </select>
                </div>

                <div class="form-group">
                    <label> บริษัท</label>
                    <p class="help-block"><code>*กรุณากรอก.</code></p>
                    <input class="form-control" type="text" name="company" id="company" value="<?php echo $qoutation_by_id['Quotation_company'];?>">
                </div>

                <div class="form-group" >
                    <label> วัน/เดือน/ปี</label>
                    <p class="help-block"><code>*กรุณากรอก YYYY-MM-DD. ขณะนี้:<B id="demo"></B></code></p>
                    <input type="text" class="form-control" name="date" placeholder="YYYY-MM-DD" required value="<?php echo $qoutation_by_id['Quotation_date'];?>" 
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

<script>
jQuery(document).ready(function() {
    jQuery('#person').on('change', function() {
        var contact_name = jQuery("#person option:selected").data('name')
        jQuery("#company").val(contact_name)
    })      
})
</script>


    