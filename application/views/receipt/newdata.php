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
            รับสินค้าเข้าคลัง
            <small>ทำรายการรับสินค้าเข้าคลังสินค้า</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo base_url('receipt'); ?>">ทำรายการรับสินค้าเข้าคลัง</a></li>
            <li class="active">รับสินค้าใหม่</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <?php echo $this->session->flashdata('msginfo'); ?>
        <!-- Your Page Content Here -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">เพิ่มข้อมูล</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('receipt/postdata'); ?>" method="post">
                <input type="hidden" name="item_id" id="item_id" value="<?php echo $this->session->flashdata('item_id'); ?>" >
                <input type="hidden" name="location_id" id="location_id" value="<?php echo $this->session->flashdata('location_id'); ?>" >
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">รหัสสินค้า</label> <?php echo $this->session->flashdata('error_barcode'); ?>
                        <div class="input-group input-group-sm">
                            <input type="text" id="barcode" class="form-control" name="barcode" value="<?php echo $this->session->flashdata('barcode'); ?>" readonly="true">
                            <span class="input-group-btn">
                                <a class="btn btn-info btn-flat popupwindow" rel="windowCenter" role="button" href="<?php echo base_url(); ?>receipt/productup"><i class="fa fa-search"></i> ค้นหารหัสสินค้า!</a>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อสินค้า</label> <?php echo $this->session->flashdata('error_itemname'); ?>
                        <input type="text" id="itemname" class="form-control" name="itemname" value="<?php echo $this->session->flashdata('itemname'); ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">จำนวนรับสินค้าเข้า</label> <?php echo $this->session->flashdata('error_open_qty'); ?>
                        <input type="text" id="open_qty" class="form-control" name="open_qty" value="<?php echo $this->session->flashdata('open_qty'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">หน่วยนับ</label> <?php echo $this->session->flashdata('error_unit'); ?>
                        <input type="text" id="unit" class="form-control" name="unit" value="<?php echo $this->session->flashdata('unit'); ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">วันที่รับสินค้าเข้า</label> <?php echo $this->session->flashdata('error_open_date'); ?>
                        <input type="text" id="open_date" class="form-control" name="open_date" value="<?php echo $this->session->flashdata('open_date'); ?>" readonly="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ผู้ทำรายการรับสินค้า</label> <?php echo $this->session->flashdata('error_open_entry'); ?>
                        <div class="input-group input-group-sm">
                            <input type="text" id="open_entry" class="form-control" name="open_entry" value="<?php echo $this->session->flashdata('open_entry'); ?>" readonly="true">
                            <span class="input-group-btn">
                                <a class="btn btn-info btn-flat popupwindow" rel="windowCenter" role="button" href="<?php echo base_url(); ?>receipt/userup"><i class="fa fa-search"></i> ค้นหาผู้รับสินค้า</a>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">คลังสินค้า</label> <?php echo $this->session->flashdata('error_location_name'); ?>
                        <div class="input-group input-group-sm">
                            <input type="text" id="location_name" class="form-control" name="location_name" value="<?php echo $this->session->flashdata('location_name'); ?>" readonly="true">
                            <span class="input-group-btn">
                                <a class="btn btn-info btn-flat popupwindow" rel="windowCenter" role="button" href="<?php echo base_url(); ?>receipt/locationup"><i class="fa fa-search"></i> ค้นหาคลังสินค้า!</a>
                            </span>
                        </div>
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                    <a class="btn btn-danger" href="<?php echo base_url('receipt'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                </div>
            </form>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<script type="text/javascript">
    $('#open_date').datepicker({
        format: 'dd/mm/yyyy'
        , todayHighlight: true
        , language: 'th'
        , autoclose: 'true'
    });
</script>
