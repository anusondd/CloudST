<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ลงทะเบียน น้องๆที่น่ารัก
            <small>ยินดีต้อนรับนักศึกษาใหม่นะครับ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo base_url('user'); ?>">ผู้ใช้งาน</a></li>
            <li class="active">เพิ่มข้อมูลใหม่</li>
        </ol>
    </section>
    <!-- Main content -->
    
    <section class="content">
    <div class="main-login main-center">
        <!-- Your Page Content Here -->
        <div class="box box-heading">
            <div class="box-header with-border">
                <h3 class="box-title">เพิ่มข้อมูล</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('user/postdata'); ?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            อัพโหลดรูปภาพ (นามสกุล JPG/PNG/GIF และขนาดไฟล์ห้ามเกิน 1MB.)
                        </label> <?php echo $this->session->flashdata('err_filename'); ?>
                        <input type="file" name="userfile" id="userfile" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ประเภทผู้ใช้งาน</label> <?php echo $this->session->flashdata('error_user_type'); ?>
                        <select class="form-control" name="user_type">
                            <option value="root">
                                นาย
                            </option>
                            <option value="root">
                                นางสาว
                            </option>
                            <option value="root">
                                นาง
                            </option>
                            <option value="root">
                                อื่นๆ
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อผู้ใช้งาน</label> <?php echo $this->session->flashdata('error_username'); ?>
                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $this->session->flashdata('username'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">รหัสผ่านเข้าใช้งาน</label> <?php echo $this->session->flashdata('error_password'); ?>
                        <input type="password" id="password" class="form-control" name="password" value="<?php echo $this->session->flashdata('password'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อจริง</label> <?php echo $this->session->flashdata('error_firstname'); ?>
                        <input type="text" id="firstname" class="form-control" name="firstname" value="<?php echo $this->session->flashdata('firstname'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">นามสกุลจริง</label> <?php echo $this->session->flashdata('error_lastname'); ?>
                        <input type="text" id="lastname" class="form-control" name="lastname" value="<?php echo $this->session->flashdata('lastname'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">เบอร์โทรศัพท์</label> <?php echo $this->session->flashdata('error_phone'); ?>
                        <input type="text" id="phone" class="form-control" name="phone" value="<?php echo $this->session->flashdata('phone'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">อีเมล์</label> <?php echo $this->session->flashdata('error_email'); ?>
                        <input type="text" id="email" class="form-control" name="email" value="<?php echo $this->session->flashdata('email'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ช่องทางการติดต่อ Facebook,Line,Instargram,</label> <?php echo $this->session->flashdata('error_department'); ?>
                        <input type="text" id="department" class="form-control" name="department" value="<?php echo $this->session->flashdata('department'); ?>">
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                    <a class="btn btn-danger" href="<?php echo base_url('user'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                </div>
            </form>
        </div>

        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->