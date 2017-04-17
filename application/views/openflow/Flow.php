<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            รายการสั่งซื้อสินค้า
            <small>จัดการรายการสั่งซื้อสินค้า</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url(); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">จัดการรายการสั่งซื้อสินค้า</li>
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
                            <a class="btn btn-success" href="<?php echo  base_url('openflow/Openflow/'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                            <a class="btn btn-default" href="<?php echo  base_url('openflow'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
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
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 2%;">รหัสรายการสั่งซื้อ</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 20%;">ชื่อลูกค้า</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 10%">วันที่</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 10%">รายละเอียด</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 15%">สถาณะการโอน</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  5%">option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($results)){ foreach ($results as $data) { ?>
                                        <tr role="row">
                                            <td><?php echo $data->id; ?></td>
                                            <td><a href="<?php echo base_url('openflow/edit/'.$data->id); ?>"><?php echo $data->name_customer; ?></td>
                                            <td><?php echo $data->open_date;   ?></td>
                                            <td>
                                            <a class="btn btn-info btn-xs management" href="<?php echo  base_url('openflow/flow/' .$data->id); ?>" role="button"><i class="fa fa-fw fa-trash" onclick="setName('<?php echo $data->id; ?>','<?php echo $data->name_customer; ?>');" ></i> จัดการสินค้าในรายการ</a>
                                            </td>
                                            <td>
                                            <?php echo $data->flowstatus; ?>
                                            <a class="btn btn-success btn-xs deleteLine" href="<?php echo  base_url('openflow/remove/'.$data->id); ?>" role="button"><i class="fa fa-fw fa-trash"></i> ยืนยันการชำระเงิน</a>
                                            </td>                                            
                                            <td>
                                                <a class="btn btn-danger btn-xs deleteLine" href="<?php echo  base_url('openflow/remove/'.$data->id); ?>" role="button"><i class="fa fa-fw fa-trash"></i> ลบข้อมูล</a>
                                                

                                            </td>
                                        </tr>
                                    <?php } } ?>
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
            function setName(id,name_customer) {
                if (window.opener != null && !window.opener.closed) {
                    var txtid = window.opener.document.getElementById("id");
                    var txtname_customer = window.opener.document.getElementById("name_customer");
                    
                    
                    txtid.value = id;
                    txtname_customer.value = name_customer;
                   
                }
                //window.opener.document.getElementById("open_qty").focus();
                //window.close();
            }
        </script>