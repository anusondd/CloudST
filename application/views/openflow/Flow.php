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
                            <a class="btn btn-primary" href="<?php echo  base_url('openflow/Openflow/'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูลการสั่งซื้อ</a>
                            <a class="btn btn-info" href="<?php echo  base_url('openflow'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
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
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width:  5%">สถานะ</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width:  5%;">Tack</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width:  5%;">ชื่อลูกค้า</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width:  5%">วันที่</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width:  10%">ชื่อสินค้า</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width:  5%">ราคา</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width:  5%">จำนวน</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width:  5%">ราคาสุทธิ</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width:  5%">ที่อยู่</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($results)){ foreach ($results as $data) { ?>
                                        <tr role="row">
                                            <td><?php echo $data->flowstatus;?> 
                                                <?php if ($data->flowstatus =='Waiting' ) { ?>
                                                <a href="<?php echo base_url('openflow/commit/'.$data->id); ?>" class="btn btn-warning">ยืนยันการชำระ</a>
                                                <?php }else{  ?>
                                                <a href="" class="btn btn-success">จ่ายแล้ว</a>
                                                <?php } ?>
                                            </td>
                                            <td><?php echo $data->Tack; ?></td>
                                            <td><a href="<?php echo base_url('openflow/edit/'.$data->id); ?>"><?php echo $data->name_customer; ?></td>
                                            <td><?php echo $data->open_date;   ?></td>
                                            <td><?php echo $data->itemname;   ?></td>
                                            <td><?php echo $data->price;   ?></td>                                            
                                            <td><?php echo $data->count;   ?></td>
                                            <td><?php echo $data->price*$data->count;?></td>
                                            <td>
                                            
                                            <a href="<?php echo base_url('customer/read/'.$data->id_customer); ?>"
                                            class="btn btn-primary"
                                            >
                                             รายละเอียด   
                                            </a>
                                            </td>


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