
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ผู้ใช้งาน
            <small>จัดการข้อมูลลูกค้าในระบบ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url(); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">ผู้ใช้งาน</li>
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
                            <a class="btn btn-success" href="<?php echo  base_url('customer/newdata'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                            <a class="btn btn-default" href="<?php echo  base_url('customer'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                        </div>
                        <div class="col-sm-6">
                            <div id="" class="dataTables_filter">
                            <form action="" method="GET" name="search">
                            	<label>ค้นหา</label>:<input type="search" name="keyword" class="form-control input-sm" placeholder="ค้นหาชื่อผู้ใช้งาน"></label>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 5%;">id</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 5%;">#</th>
                                        <!--<th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 10%;">ชื่อผู้ใช้</th>-->
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 20%">ชื่อจริง-นามสกุล</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  60px;">email</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  60px;">phone</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  60px;">Facebook</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  60px;">Line</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  60px;">Instargram</th>
                                       <!-- <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  60px;">ประเภทผู้ใช้</th>  -->
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  60px;">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($results)){ foreach ($results as $data) { ?>
                                        <tr role="row">
                                            <td><?php echo  $data->id; ?></td>
                                            <td><img src="<?php echo base_url() . 'pictures/customers/user_' . $data->filename;?>" alt="" class="img-circle c160"></td>
                                            <!--<td>
                                            <a href="<?php echo base_url('user/edit/'.$data->id); ?>"><?php echo  $data->username; ?></a>
                                            </td>-->
                                            <td><a href="<?php echo base_url('customer/edit/'.$data->id); ?>"><?php echo  $data->firstname . ' ' . $data->lastname; ?></a></td>
                                            <td><?php echo  $data->email; ?></td>
                                            <td><?php echo  $data->phone; ?></td>                                            
                                            <td><?php echo  $data->Facebook; ?></td>
                                            <td><?php echo  $data->line; ?></td>
                                            <td><?php echo  $data->instargram; ?></td>
                                           <!--  <td><?php echo  $data->user_type; ?></td>  -->
                                           <td>
                                            	<a class="btn btn-danger btn-xs deleteLine" href="<?php echo  base_url('customer/remove/'.$data->id); ?>" role="button"><i class="fa fa-fw fa-trash"></i> ลบข้อมูล</a>
                                            </td> 
                                        </tr>
                                    <?php } } ?>
                                </tbody>

                            </table>
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