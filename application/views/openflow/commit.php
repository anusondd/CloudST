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
            
            <form role="form" action="<?php echo base_url('openflow/Newflow/'.$result->id); ?>" method="post">
                <input type="hidden" name="item_id" id="item_id" value="<?php echo $this->session->flashdata('item_id'); ?>" >
                <input type="hidden" name="location_id" id="location_id" value="<?php echo $this->session->flashdata('location_id'); ?>" >
                <input type="hidden" name="onqty" id="onqty" value="<?php echo $this->session->flashdata('onqty'); ?>" >
                <input type="hidden" name="status" id="status" value="Payed" >
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">รหัสสินค้า</label> <?php echo $this->session->flashdata('error_barcode'); ?>
                        
                            <input type="text" id="barcode" class="form-control" name="barcode" value="<?php echo $result->barcode; ?>" readonly="true">
                            <!--
                            <span class="input-group-btn">
                                <a class="btn btn-info btn-flat popupwindow" rel="windowCenter" role="button" href="<?php echo base_url(); ?>openflow/flowup"><i class="fa fa-search"></i> ค้นหารหัสสินค้า!</a>
                            </span>
                            -->
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อสินค้า</label> <?php echo $this->session->flashdata('error_itemname'); ?>
                        <input type="text" id="itemname" class="form-control" name="itemname" value="<?php echo $result->itemname; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ราคา</label> <?php echo $this->session->flashdata('error_price'); ?>
                        <input type="text" id="price" class="form-control" name="price" value="<?php echo $result->price; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">จำนวนการสั่งซื้อสินค้า</label> <?php echo $this->session->flashdata('error_count'); ?> 
                        <input type="text" id="count" class="form-control" name="count" value="<?php echo $result->count; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ราคาสุทธิ</label> <?php echo $this->session->flashdata('error_total'); ?> 
                        <input type="text" id="total" class="form-control" name="total" value="<?php echo $result->count*$result->price; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">วันที่สั่งซื้อสินค้า</label> <?php echo $this->session->flashdata('error_open_date'); ?>
                        <input type="text" id="open_date" class="form-control" name="open_date" value="<?php echo $result->open_date; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อลูกค้า</label> <?php echo $this->session->flashdata('error_open_entry'); ?>
                        
                            <input type="text" id="open_entry" class="form-control" name="open_entry" value="<?php echo $result->name_customer; ?>" readonly="true">
                            <!--
                            <span class="input-group-btn">
                                <a class="btn btn-info btn-flat popupwindow" rel="windowCenter" role="button" href="<?php echo base_url(); ?>openflow/userup"><i class="fa fa-search"></i> ค้นหาชื่อลูกค้า</a>
                            </span>
                            -->
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">รหัสประจำตัวลูกค้า</label> <?php echo $this->session->flashdata('error_open_id'); ?>
                        <input type="text" id="open_id" class="form-control" name="open_id" value="<?php echo $result->id_customer; ?>" readonly="true">
                    </div>
                    
                    <!--
                    <div class="form-group">
                        <label for="exampleInputEmail1">เพิ่มสินค้า</label> <?php echo $this->session->flashdata('error_itemname'); ?>
                        <div class="input-group input-group-sm">
                            
                            <input type="text" name="itemname" id="itemname" class="form-control" value="<?php echo $this->session->flashdata('itemname'); ?>" readonly="true">
                            <span class="input-group-btn">
                                <a class="btn btn-info btn-flat popupwindow" rel="windowCenter" role="button" href="<?php echo base_url(); ?>openflow/flowup"><i class="fa fa-search"></i> ค้นหาสินค้า!</a>
                            </span>
                        </div>
                    </div>
                    <div class="table-responsive">
                        
                    
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>ราคา</th>
                                <th>จำนวน</th>
                                <th>รวม</th>

                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                <input type="text" name="barcode" id="barcode" class="form-control" value="<?php echo $this->session->flashdata('barcode'); ?>" readonly="true"> 
                                </td>
                                <td>
                                <input type="text" name="itemname" id="itemname" class="form-control" value="<?php echo $this->session->flashdata('itemname'); ?>" readonly="true">
                                </td>
                                <td>
                                <input type="price" name="price" id="price" class="form-control" value="<?php echo $this->session->flashdata('price'); ?> " readonly="true">
                                </td>
                                <td>
                                <input type="text" name="unit" id="unit" class="form-control" value="1" onkeydown="sumFunction()" >
                                 </td>
                                <td> <input type="price" name="sum" id="sum" class="form-control" value="<?php echo $this->session->flashdata('sum'); ?> " readonly="true"> </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
					-->


                              
                    <!-- <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อสินค้า</label> <?php echo $this->session->flashdata('error_itemname'); ?>
                        <input type="text" id="itemname" class="form-control" name="itemname" value="<?php echo $this->session->flashdata('itemname'); ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">จำนวนการสั่งซื้อสินค้า</label> <?php echo $this->session->flashdata('error_open_qty'); ?> <?php echo $this->session->flashdata('error_onqty'); ?>
                        <input type="text" id="open_qty" class="form-control" name="open_qty" value="<?php echo $this->session->flashdata('open_qty'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">หน่วยนับ</label> <?php echo $this->session->flashdata('error_unit'); ?>
                        <input type="text" id="unit" class="form-control" name="unit" value="<?php echo $this->session->flashdata('unit'); ?>" readonly="true">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">คลังสินค้า</label> <?php echo $this->session->flashdata('error_location_name'); ?>
                        <input type="text" id="location_name" class="form-control" name="location_name" value="<?php echo $this->session->flashdata('location_name'); ?>" readonly="true">
                    </div>

                </div> /.box-body -->
                <div class="form-group">
                        <label for="exampleInputEmail1">Tack</label> <?php echo $this->session->flashdata('error_total'); ?> 
                        <input type="text" id="Tack" class="form-control" name="Tack" value="" >
                    </div>
                <div class="box-footer">
                    <button class="btn btn-success commitLine" type="submit"><i class="fa fa-fw fa-save"></i> ยืนยันการชำระเงิน</button>                  
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

<script type="text/javascript">
$(document).ready(function(){
    $('.commitLine').click(function(){
       if(!confirm("ข็อมูลจะไม่สามารถแก้ไขได้ถ้ากดยืนยัน?")){
           return false;
       } 
    });
});  
</script>









