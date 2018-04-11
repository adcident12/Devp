
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Quotation</h1>
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
                    <div class="panel-heading">รายการใบเสนอราคา
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            เพิ่มใบเสนอราคา
                        </button>

                    </div>
                    <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>เลขที่อ้างอิง</th>
                                        <th>บริษัท</th>
                                        <th>คุณ</th>
                                        <th>วัน/เดือน/ปี</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $i=1; foreach($qoutation as $row){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['Qoutation_num']; ?></td>
                                        <td><?php echo $row['Quotation_company']; ?></td>
                                        <td><?php echo $row['Quotation_person']; ?></td>
                                        <td><?php echo $row['Quotation_date']; ?></td>
                                        <td class="text-center">
                                         <a href="<?php echo site_url('Quotation/product/'.$row['Quotation_id']);?>" class="btn btn-info"> เพิ่มสินค้า</a>
                                         <a href="<?php echo site_url('Quotation/edit_form_quotaion/'.$row['Quotation_id']);?>" class="btn btn-warning"> แก้ไข</a>
                                         <a href="<?php echo site_url('Quotation/clear/'.$row['Quotation_id']);?>" class="btn btn-danger" OnClick="return chkdel();"> ลบ</a>
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
         <form action="<?php echo site_url('Quotation/add_quotation/');?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มใบเสนอราคา</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label> เลขที่อ้างอิง</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="number" min="0" name="quotation" placeholder="กรุณากรอก">
                    </div>
                    
                    <div class="form-group">
                        <label> คุณ</label>
                        <p class="help-block"><code>*กรุณาเลือก.</code></p>
                        <select class="form-control" name="person" id="person" >
                            <option>--- กรุณาเลือก ---</option>
                         <?php foreach ($company_by_customer as $row) { ?>
                            <option value="<?php echo $row['Customer_name'];?>" data-name="<?php echo $row['Company_name'];?>"><?php echo $row['Customer_name']." บริษัท ".$row['Company_name'];?></option>
                         <?php } ?>   
                        </select>
                    </div>

                    <div class="form-group">
                        <label> บริษัท</label>
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                        <input class="form-control" type="text" name="company" id="company">
                    </div>

                    <div class="form-group" >
                        <label> วัน/เดือน/ปี</label>
                        <p class="help-block"><code>*กรุณากรอก YYYY-MM-DD. ขณะนี้:<B id="demo"></B></code></p>
                        <input type="text" class="form-control" name="date" placeholder="YYYY-MM-DD" required 
                            pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
                            title="Enter a date in this format YYYY-MM-DD"/>
                                
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

<script>
jQuery(document).ready(function() {
    jQuery('#person').on('change', function() {
        var contact_name = jQuery("#person option:selected").data('name')
        jQuery("#company").val(contact_name)
    })      
})
</script>







    