
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Invoice</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">รายการการใบกำกับภาษี
                        
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                            เพิ่ม Invoice
                        </button>
                       

                    </div>
                    <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>PO.</th>
                                        <th>บริษัท</th>
                                        <th>ผู้สั่งซื้อ</th>
                                        <th>วันที่ออกใบกำกับภาษี</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>RE001-125</td>
                                        <td>ABC จำกัด</td>
                                        <td>นาย ก ไก่</td>
                                        <td>08-04-2018</td>
                                        <td class="text-center">
                                         <a href="" class="btn btn-info"> พิมพ์เอกสาร PDF</a>
                                         <a href="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2"> แก้ไข</a>
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

    <!-- Modal Add Invoice -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
         <form action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">เพิ่ม Invoice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">รายการสินค้่า
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2">
                                เพิ่มสินค้า
                                </button>
                            </div>

                            <!-- /.panel-body -->
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>สินค้า</th>
                                            <th>ราคา(บาท)</th>
                                            <th>จำนวน</th>
                                            <th></th>
                                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Heater กระบอก 200*200mm 220w 380v</td>
                                            <td>150</td>
                                            <td>10</td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-warning btn-md btn-block" data-toggle="modal" data-target="#Modal2"> แก้ไข</a>
                                                <a href="" class="btn btn-danger btn-md btn-block" OnClick="return chkdel();"> ลบ</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- /.table-responsive -->
                                    
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label> บริษัท</label>
                            <select class="form-control" name="company">
                                <option>---กรุณาเลือก---</option>
                                <option value="">ABC company Lte.</option>
                            </select>
                            <p class="help-block"><code>*กรุณากรอกเลือก.</code></p>
                    
                    </div>

                    <div class="form-group">
                        <label>เล่มที่</label>
                        <input class="form-control" type="text" name="facenum" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> เลขที่</label>
                        <input class="form-control" type="text" name="codenum" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> เลขที่ประจำตัวผู้เสียภาษี</label>
                        <input class="form-control" type="text" name="tax" placeholder="กรุณากรอก">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
                    </div>

                    <div class="form-group">
                        <label> วัน/เดือน/ปี</label>
                            <input type="text" class="form-control" name="date" placeholder="DD-MM-YYYY" required 
                                pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
                                title="Enter a date in this format DD-MM-YYYY"/>
                        
                            <p class="help-block"><code>*กรุณากรอก DD-MM-YYYY. ขณะนี้:<B id="demo1"></B></code></p>
                    </div>

                    <div class="form-group">
                        <label> VAT<code>(%)</code></label>
                        <input class="form-control" type="number" min="0" name="vat">
                        <p class="help-block"><code>*กรุณากรอก.</code></p>
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

    

<!--Modal-Add Product form Invoice -->
<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel2">เพิ่มสินค้า</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
            <label> สินค้า</label>
            <input class="form-control" type="text" name="product" placeholder="กรุณากรอก">
            <p class="help-block"><code>*กรุณากรอก.</code></p>
        </div>

        <div class="form-group">
            <label> ราคา</label>
            <input class="form-control" type="text" name="price" placeholder="กรุณากรอก">
            <p class="help-block"><code>*กรุณากรอก.</code></p>
        </div>

        <div class="form-group">
            <label> จำนวน</label>
            <input class="form-control" type="number" min="0" name="volume" placeholder="กรุณากรอก">
            <p class="help-block"><code>*กรุณากรอก.</code></p>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-success">บันทึก</button>
      </div>
    </div>
  </div>
</div>


    