<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ผู้ใช้งาน
            <small>จัดการผู้ใช้งานในระบบ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo base_url('user'); ?>">ผู้ใช้งาน</a></li>
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
            <form role="form" action="<?php echo base_url('user/postdata'); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $user->id; ?>">
                <input type="hidden" value="<?php echo $user->filename; ?>" name="datafile">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            รูปภาพผู้ใช้
                        </label> 
                        <img src="<?php echo base_url() . 'pictures/user_' . $user->filename; ?>" alt="" class="img-circle v160">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            อัพโหลดรูปภาพ (นามสกุล JPG/PNG/GIF และขนาดไฟล์ห้ามเกิน 1MB.)
                        </label> <?php echo $this->session->flashdata('err_filename'); ?>
                        <input type="file" name="userfile" id="userfile" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ประเภทผู้ใช้งาน</label> <?php echo $this->session->flashdata('error_user_type'); ?>
                        <?php
                        if ($user->id == 1) { ?>
                        <input type="text" id="user_type" class="form-control" name="user_type" value="<?php echo $user->user_type; ?>" readonly="true">
                       <?php } else {
                            ?>
                            <select class="form-control" name="user_type">
                                <option value="staff" <?php
                                if ($user->user_type == 'staff') {
                                    echo 'selected';
                                }
                                ?>>
                                    ผู้จัดการเบิก-คืน
                                </option>
                                <option value="admin" <?php
                                if ($user->user_type == 'admin') {
                                    echo 'selected';
                                }
                                ?>>
                                    ผู้ช่วยดูแลระบบ
                                </option>
                                <option value="root" <?php
                                if ($user->user_type == 'root') {
                                    echo 'selected';
                                }
                                ?>>
                                    ผู้ดูแลระบบ
                                </option>
                            </select>
                        <?php }
                        ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อผู้ใช้งาน</label> <?php echo $this->session->flashdata('error_username'); ?>
                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $user->username; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">รหัสผ่านเข้าใช้งาน (สามารถว่างได้ถ้าไม่ต้องการเปลี่ยนรหัสผ่าน)</label> <?php echo $this->session->flashdata('error_password'); ?>
                        <input type="password" id="password" class="form-control" name="password" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อจริง</label> <?php echo $this->session->flashdata('error_firstname'); ?>
                        <input type="text" id="firstname" class="form-control" name="firstname" value="<?php echo $user->firstname; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">นามสกุลจริง</label> <?php echo $this->session->flashdata('error_lastname'); ?>
                        <input type="text" id="lastname" class="form-control" name="lastname" value="<?php echo $user->lastname; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">เบอร์โทรศัพท์</label> <?php echo $this->session->flashdata('error_phone'); ?>
                        <input type="text" id="phone" class="form-control" name="phone" value="<?php echo $user->phone; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">อีเมล์</label> <?php echo $this->session->flashdata('error_email'); ?>
                        <input type="text" id="email" class="form-control" name="email" value="<?php echo $user->email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">แผนก</label> <?php echo $this->session->flashdata('error_department'); ?>
                        <input type="text" id="department" class="form-control" name="department" value="<?php echo $user->department; ?>">
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                    <a class="btn btn-danger" href="<?php echo base_url('user'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                </div>
            </form>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->