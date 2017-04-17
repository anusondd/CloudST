<?php echo link_tag('plugins/datepicker/datepicker3.css'); ?>
<script src="<?php echo base_url(); ?>plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>plugins/datepicker/locales/bootstrap-datepicker.th.js" type="text/javascript"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            รายงานการเคลื่อนไหวสินค้า
            <small>รายงานการเคลื่อนไหวสินค้าทั้งหมด</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url(); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">รายงานการเคลื่อนไหวสินค้า</li>
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
                            <a class="btn btn-default" href="<?php echo  base_url('flowprint'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                        </div>
                        <div class="col-sm-6">
                            <div id="" class="dataTables_filter">
                            <form action="" method="GET" name="search">
                            	<label>ค้นหา</label>:
                              <input type="search" name="keyword" class="form-control input-sm" placeholder="ค้นหาชื่อสินค้า">
                              <input type="search" name="fdate" id="fdate" class="form-control input-sm" placeholder="วันที่เคลื่อนไหว (เริ่ม)" autocomplete="off">
                              <input type="search" name="tdate" id="tdate" class="form-control input-sm" placeholder="วันที่เคลื่อนไหว (สิ้นสุด)" autocomplete="off">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" value="receipt" name="transtype[]" checked="">
                                  รับเข้าสินค้า
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" value="open" name="transtype[]" checked="">
                                  เบิกสินค้า
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" value="return" name="transtype[]" checked="">
                                  คืนสินค้า
                                </label>
                              </div>
                              <button type="submit" class="btn btn-primary">ค้นหา</button>
                            </label>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                      <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 10%;">ประเภท</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 10%;">รหัสสินค้า</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 20%;">ชื่อสินค้า</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 20%;">คลังสินค้า</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 10%;">จำนวน</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 10%;">หน่วยนับ</th>
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 10%;">วันที่รายการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($results)){ foreach ($results as $data) { ?>
                                        <tr role="row">
                                            <td><?php echo $data->transtype; ?></td>
                                            <td><?php echo  $data->barcode; ?></td>
                                            <td><?php echo  $data->itemname; ?></td>
                                            <td><?php echo  $data->locname; ?></td>
                                            <td><?php echo  number_format($data->transqty,2); ?></td>
                                            <td><?php echo  $data->unit; ?></td>
                                            <td><?php echo  nice_date($data->transdate,'d/m/Y'); ?></td>
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
$('#fdate').datepicker({
    format: 'dd/mm/yyyy'
    , todayHighlight: true
    , language: 'th'
    , autoclose: 'true'
});

$('#tdate').datepicker({
    format: 'dd/mm/yyyy'
    , todayHighlight: true
    , language: 'th'
    , autoclose: 'true'
});
</script>
