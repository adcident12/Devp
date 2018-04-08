
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Billing</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">รายการใบวางบิล
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            เพิ่มใบวางบิล
                        </button>

                    </div>
                    <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>เล่มที่</th>
                                        <th>เลขที่</th>
                                        <th>บริษัท</th>
                                        <th>ผู้สั่งซื้อ</th>
                                        <th>วันที่ออกใบวางบิล</th>
                                        <th>วันที่นัดชำระ</th>
                                        <th></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>009</td>
                                        <td>1425</td>
                                        <td>ABC จำกัด</td>
                                        <td>08-04-2018</td>
                                        <td class="text-center">
                                            <label>15-05-2018
                                            <input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled">
                                            
                                            </label> 
                                        </td>
                                        <td class="text-center">
                                         <a href="" class="btn btn-info"> พิมพ์เอกสาร PDF</a>
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

    <!-- Modal Add Billing -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
         <form action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่ม Billing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                        <label> บริษัท</label>
                            <select class="form-control" name="company">
                                <option>---กรุณาเลือก---</option>
                                <option value="">ABC company Lte.</option>
                            </select>
                            <p class="help-block"><code>*กรุณากรอกเลือก.</code></p>
                    
                    </div>
                    
                    <div class="form-group">
                        <label>เล่มที่<code>Billing.</code></label>
                        <input class="form-control" type="text" name="facenum_billing" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> เลขที่<code>Billing.</code></label>
                        <input class="form-control" type="text" name="codenum_billing" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label>เล่มที่<code>Invoice.</code></label>
                        <input class="form-control" type="text" name="facenum_invoice" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> เลขที่<code>Invoice.</code></label>
                        <input class="form-control" type="text" name="codenum_invoice" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> จำนวนเงิน(บาท)</label>
                        <input class="form-control" type="text" name="money" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> วัน/เดือน/ปี</label>
                            <input type="text" class="form-control" name="date" placeholder="DD-MM-YYYY" required 
                                pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
                                title="Enter a date in this format DD-MM-YYYY"/>
                        
                            <p class="help-block"><code>*กรุณากรอก DD-MM-YYYY. ขณะนี้:<B id="demo2"></B></code></p>
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

       
<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })
</script>






    