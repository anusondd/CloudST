<?php echo link_tag('plugins/datepicker/datepicker3.css'); ?>
<script src="<?php echo base_url(); ?>plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>plugins/datepicker/locales/bootstrap-datepicker.th.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.popupwindow.js"></script>
<script type="text/javascript">
    var profiles =
            {
                windowCenter:
                        {
                            height: 600,
                            width: 800,
                            center: 1
                        }
            };
    $(function ()
    {
        $(".popupwindow").popupwindow(profiles);
    });
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            รายการสั่งซื้อสินค้า
            <small>จัดการสินค้าในรายการสั่งซื้อ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url(); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">จัดการรายการสั่งซื้อสินค้า</li>
            <li class="active">จัดการสินค้าในรายการสั่งซื้อ</li>
        </ol>
    </section>
    <!-- Top menu -->
    <?php echo $this->session->flashdata('msginfo'); ?>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">ตารางข้อมูล</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php if(!empty($flows)){ foreach ($flows as $da) { ?>
                            <a class="btn btn-success btn-flat popupwindow"  rel="windowCenter" role="button" href="<?php echo  base_url('openflow/itemup'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มสินค้า</a>
                            <a class="btn btn-default" href="<?php echo  base_url('openflow'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                            <div class="form-group">
                            
                            <label>ชื่อใบสั่งซื้อ</label>:<input type="text" name="name_customer" class="form-control" id="name_customer" value="<?php echo $da->name_customer; ?>" readonly="true">
                            <?php } } ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div id="" class="dataTables_filter">
                            <form action="" method="GET" name="search">
                                <label>ค้นหา</label>:<input type="search" name="keyword" class="form-control input-sm" placeholder="ค้นหาชื่อสินค้า"></label>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-hover table-striped" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 5%">barcode </th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 20%">name   </th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 5%">price   </th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 5%">count   </th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 5%">unit    </th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 5%">total   </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <tr role="row">
                                            <td><input type="text" id="barcode" class="form-control" name="barcode" value="<?php echo $this->session->flashdata('barcode'); ?>" readonly="true">
                                            </td>
                                            <td><input type="text" id="itemname" class="form-control" name="itemname" value="<?php echo $this->session->flashdata('itemname'); ?>" readonly="true">
                                            </td>
                                            <td><input type="text" id="price" class="form-control" name="price" value="<?php echo $this->session->flashdata('price'); ?>" readonly="true">
                                            </td>
                                            <td><input type="text" id="count" class="form-control" name="count" value="<?php echo $this->session->flashdata('count'); ?>">
                                            </td>
                                            <td><input type="text" id="unit" class="form-control" name="unit" value="<?php echo $this->session->flashdata('unit'); ?>" readonly="true"></td>
                                            <td><input type="text" id="total" class="form-control" name="total" value="<?php echo $this->session->flashdata('total'); ?>" readonly="true"></td>
                                            
                                        </tr>
                                    
                                </tbody>

                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Total <?php echo  $total_rows; ?> entries</div>
                        
                        </div>
                        <div class="col-sm-7">
                            <div id="example1_paginate" class="dataTables_paginate paging_simple_numbers">
                                <?php echo $link; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<script type="text/javascript">
$(document).ready(function(){
    $('.deleteLine').click(function(){
       if(!confirm("ยืนยันการลบข้อมูล?")){
           return false;
       } 
    });
});  
</script>
<script type="text/javascript">
    $('#open_date').datepicker({
        format: 'dd/mm/yyyy'
        , todayHighlight: true
        , language: 'th'
        , autoclose: 'true'
    });
</script>


