<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo site_url('/Home/CRUD/');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-building-o fa-fw"></i> Company<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Company/');?>"> รายการบริษัท</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Customer<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Customer/');?>"> รายการลูกค้า</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-table fa-fw"></i> Quotation<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Quotation/');?>">รายการใบเสนอราคา</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-edit fa-fw"></i> Purchase Order<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Purchase_order/');?>">รายการการสั่งซื้อ</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-wrench fa-fw"></i> Invoice<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('Tex/');?>"> รายการใบกำกับภาษี</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-sitemap fa-fw"></i> Billing<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Billing/');?>"> รายการใบวางบิล</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    <li>
                        <a href=""><i class="fa fa-files-o fa-fw"></i> รับเงิน/เช็ก<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                         <li>
                            <a href="blank.html"> รายการชำระเงิน</a>
                        </li>
                    </ul>
                            <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
                <!-- /.sidebar-collapse -->
    </div>

            <!-- /.navbar-static-side -->
</nav>