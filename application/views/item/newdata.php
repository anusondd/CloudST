<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            สินค้า
            <small>จัดการสินค้า</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo base_url('item'); ?>">สินค้า</a></li>
            <li class="active">เพิ่มข้อมูลใหม่</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">เพิ่มข้อมูล</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('item/postdata'); ?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            อัพโหลดรูปภาพ (นามสกุล JPG/PNG/GIF และขนาดไฟล์ห้ามเกิน 1MB.)
                        </label> <?php echo $this->session->flashdata('err_filename'); ?>
                        <input type="file" name="userfile" id="userfile" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ประเภทสินค้า</label> <?php echo $this->session->flashdata('error_itemtype_id'); ?>
                        <select class="form-control" name="itemtype_id">
                            <option value="">
                                เลือกข้อมูล
                            </option>
                            <?php
                            foreach ($results as $result) {
                                ?>
                                <option value="<?php echo $result->id; ?>">
                                    <?php echo $result->name; ?>
                                </option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อสินค้า</label> <?php echo $this->session->flashdata('error_name'); ?>
                        <input type="text" id="name" class="form-control" name="name" value="<?php echo $this->session->flashdata('name'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">รหัสสินค้า(บาร์โค๊ด)</label> <?php echo $this->session->flashdata('error_barcode'); ?>
                        <input type="text" id="barcode" class="form-control" name="barcode" value="<?php echo $this->session->flashdata('barcode'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ราคาสินค้า</label> <?php echo $this->session->flashdata('error_price'); ?>
                        <input type="text" id="price" class="form-control" name="price" value="<?php echo $this->session->flashdata('price'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">หน่วยนับสินค้า</label> <?php echo $this->session->flashdata('error_unit'); ?>
                        <input type="text" id="unit" class="form-control" name="unit" value="<?php echo $this->session->flashdata('unit'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">รายละเอียด</label> <?php echo $this->session->flashdata('error_description'); ?>
                        <textarea rows="3" class="form-control" id="description" name="description"><?php echo $this->session->flashdata('description'); ?></textarea>
                    </div>
                    
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                    <a class="btn btn-danger" href="<?php echo base_url('item'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                </div>
            </form>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->