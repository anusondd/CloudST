<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            ecStock 1.0 | itoffside.com
        </title>
        <!-- tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- bootstrap 3.3.4-->
        <?php echo link_tag('bootstrap/css/bootstrap.min.css'); ?>
        <!-- font awesome icons-->
        <?php echo link_tag('bootstrap/css/font-awesome.min.css'); ?>
        <!-- ionicons-->
        <?php echo link_tag('bootstrap/css/ionicons.min.css'); ?>
        <!--Theme style-->
        <?php echo link_tag('dist/css/AdminLTE.min.css'); ?>
        <!--Theme skin -->
        <?php echo link_tag('dist/css/skins/skin-blue.min.css'); ?>
        <!--Theme skin -->
        <?php echo link_tag('plugins/datatables/dataTables.bootstrap.css'); ?>
        <!--My Custom-->
        <?php echo link_tag('dist/css/mycustom.css'); ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript">
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js" type="text/javascript">
        </script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>dist/js/app.min.js" type="text/javascript">
        </script>
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">
            <div class="content-wrapper" style="margin-left: 0;">
                <!-- Main content -->
                <section class="content">
                    <!-- Your Page Content Here -->
                    <div class="box">
                        <div class="box-body">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div id="" class="dataTables_filter" style="text-align: left;">
                                            <form action="" method="GET" name="search">
                                                <label>ค้นหา</label>:<input type="search" name="keyword" class="form-control input-sm" placeholder="ค้นหารหัสเบิก"></label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 15%;">รหัสเบิก</th>
                                                    <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 30%;">ชื่อสินค้า</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 10%">เบิก</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 10%">คืน</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 15%">คงเหลือ</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 20%">หน่วยนับ</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  60px;">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (!empty($results)) {
                                                    foreach ($results as $data) {
                                                        ?>
                                                        <tr role="row">
                                                            <td><?php echo $data->id; ?></td>
                                                            <td><?php echo $data->itemname; ?></td>
                                                            <td><?php echo number_format($data->open_qty, 2); ?></td>
                                                            <td><?php echo number_format($data->return_qty, 2); ?></td>
                                                            <td><?php echo number_format($data->open_qty - $data->return_qty, 2); ?></td>
                                                            <td><?php echo $data->unit; ?></td>
                                                            <td>
                                                                <a class="btn btn-primary btn-xs" href="#" role="button" onclick="setName('<?php echo $data->id;?>','<?php echo $data->item_id;?>',
                                                                  '<?php echo $data->barcode;?>','<?php echo $data->itemname;?>','<?php echo $data->open_qty - $data->return_qty;?>',
                                                                  '<?php echo $data->unit;?>','<?php echo $data->open_entry;?>','<?php echo $data->open_location;?>','<?php echo $data->name;?>');"><i class="fa fa-check-square-o"></i> เลือก</a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Total <?php echo $total_rows; ?> entries</div>
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
        </div><!-- ./wrapper -->
        <script type="text/javascript">
            function setName(id,item_id,barcode,itemname,open_qty,unit,open_entry,open_location,name) {
                if (window.opener != null && !window.opener.closed) {
                    var txtid = window.opener.document.getElementById("open_id");
                    var txtitem_id = window.opener.document.getElementById("item_id");
                    var txtbarcode = window.opener.document.getElementById("barcode");
                    var txtitemname = window.opener.document.getElementById("itemname");
                    var txtopen_qty = window.opener.document.getElementById("after_qty");
                    var txtunit = window.opener.document.getElementById("unit");
                    var txtopen_entry = window.opener.document.getElementById("open_entry");
                    var txtopen_location = window.opener.document.getElementById("location_id");
                    var txtname = window.opener.document.getElementById("location_name");

                    txtid.value = id;
                    txtitem_id.value = item_id;
                    txtbarcode.value = barcode;
                    txtitemname.value = itemname;
                    txtopen_qty.value = open_qty;
                    txtunit.value = unit;
                    txtopen_entry.value = open_entry;
                    txtopen_location.value = open_location;
                    txtname.value = name;
                }
                window.opener.document.getElementById("open_qty").focus();
                window.close();
            }
        </script>
    </body>
</html>
