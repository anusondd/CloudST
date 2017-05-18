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
            รายการเพิ่มข้อมูลการสั่งซื้อสินค้า
            <small>เพิ่มข้อมูลการสั่งซื้อใหม่</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo base_url('openflow'); ?>">ทำรายการเพิ่มข้อมูลการสั่งซื้อสินค้า</a></li>
            <li class="active">เพิ่มข้อมูลการสั่งซื้อสินค้าใหม่</li>
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
            <form role="form" action="<?php echo base_url('openflow/Newflow'); ?>" method="post">
                <input type="hidden" name="item_id" id="item_id" value="<?php echo $this->session->flashdata('item_id'); ?>" >
                <input type="hidden" name="location_id" id="location_id" value="<?php echo $this->session->flashdata('location_id'); ?>" >
                <input type="hidden" name="onqty" id="onqty" value="<?php echo $this->session->flashdata('onqty'); ?>" >
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">วันที่สั่งซื้อสินค้า</label> <?php echo $this->session->flashdata('error_open_date'); ?>
                        <input type="text" id="open_date" class="form-control" name="open_date" value="<?php echo $this->session->flashdata('open_date'); ?>" readonly="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อลูกค้า</label> <?php echo $this->session->flashdata('error_open_entry'); ?>
                        <div class="input-group input-group-sm">
                            <input type="text" id="open_entry" class="form-control" name="open_entry" value="<?php echo $this->session->flashdata('open_entry'); ?>" readonly="true">
                            <span class="input-group-btn">
                                <a class="btn btn-info btn-flat popupwindow" rel="windowCenter" role="button" href="<?php echo base_url(); ?>openflow/userup"><i class="fa fa-search"></i> ค้นหาชื่อลูกค้า</a>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">รหัสประจำตัวลูกค้า</label> <?php echo $this->session->flashdata('error_open_id'); ?>
                        <input type="text" id="open_id" class="form-control" name="open_id" value="<?php echo $this->session->flashdata('open_id'); ?>" readonly="true">
                    </div>                  
                    

                </div> 
                <div class="box-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-save"></i> สร้างรายการสั่งซื้อใหม่</button>
                    <a class="btn btn-danger" href="<?php echo base_url('dashboard'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
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

function sumFunction() {
    alert("You pressed a key inside the input field");
}

</script>









