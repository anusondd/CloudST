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
                            <a class="btn btn-success" href="<?php echo  base_url('openflow/reserve/' .$da->id); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มสินค้า</a>
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
                                    <?php if(!empty($results)){ foreach ($results as $data) { ?>
                                        <tr role="row">
                                            <td><?php echo $data->barcode;  ?></td>
                                            <td><?php echo $data->itemname; ?></td>
                                            <td><?php echo $data->price;    ?></td>
                                            <td><?php echo $data->count;    ?></td>
                                            <td><?php echo $data->unit;     ?></td>
                                            <td></td>
                                            
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

