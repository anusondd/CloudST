<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ผู้ใช้งาน
            <small>จัดการข้อมูลลูกค้าในระบบ</small>
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
            <form role="form" action="<?php echo base_url('customer/postdata'); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $customer->id; ?>">
                <input type="hidden" value="<?php echo $customer->filename; ?>" name="datafile">
                <div class="box-body">
                    
                <!--
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            รูปภาพลูกค้า
                        </label> 
                        <img src="<?php echo base_url() . 'pictures/user_' . $customer->filename; ?>" alt="" class="img-circle v160">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            อัพโหลดรูปภาพ (นามสกุล JPG/PNG/GIF และขนาดไฟล์ห้ามเกิน 1MB.)
                        </label> <?php echo $this->session->flashdata('err_filename'); ?>
                        <input type="file" name="userfile" id="userfile" >
                    </div>
                    -->

                    <!--<div class="form-group">
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
                    </div>-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อจริง</label> <?php echo $this->session->flashdata('error_firstname'); ?>
                        <input type="text" id="firstname" class="form-control" name="firstname" value="<?php echo $customer->firstname; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">นามสกุลจริง</label> <?php echo $this->session->flashdata('error_lastname'); ?>
                        <input type="text" id="lastname" class="form-control" name="lastname" value="<?php echo $customer->lastname; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">เบอร์โทรศัพท์</label> <?php echo $this->session->flashdata('error_phone'); ?>
                        <input type="text" id="phone" class="form-control" name="phone" value="<?php echo $customer->phone; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">อีเมล์</label> <?php echo $this->session->flashdata('error_email'); ?>
                        <input type="text" id="email" class="form-control" name="email" value="<?php echo $customer->email; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Facebook</label> <?php echo $this->session->flashdata('error_Facebook'); ?>
                        <input type="text" id="Facebook" class="form-control" name="Facebook" value="<?php echo $customer->Facebook; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">line</label> <?php echo $this->session->flashdata('error_line'); ?>
                        <input type="text" id="line" class="form-control" name="line" value="<?php echo $customer->line; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">instargram</label> <?php echo $this->session->flashdata('error_instargram'); ?>
                        <input type="text" id="instargram" class="form-control" name="instargram" value="<?php echo $customer->instargram; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ที่อยู่/Address</label> <?php echo $this->session->flashdata('error_Address'); ?>
                        <input type="text" id="Address" class="form-control" name="Address" value="<?php echo $customer->Address; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">จังหวัด/City</label> <?php echo $this->session->flashdata('error_City'); ?>
                        <input type="text" id="City" class="form-control" name="City" value="<?php echo $customer->City; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">อำเภอ/State</label> <?php echo $this->session->flashdata('error_State'); ?>
                        <input type="text" id="State" class="form-control" name="State" value="<?php echo $customer->State; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">รหัสไปรษณี/Postal Code</label> <?php echo $this->session->flashdata('error_Postal_Code'); ?>
                        <input type="text" id="Postal_Code" class="form-control" name="Postal_Code" value="<?php echo $customer->Postal_Code; ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ประเทศ/Country</label> <?php echo $this->session->flashdata('error_Country'); ?>
                        <input type="text" id="Country" class="form-control" name="Country" value="<?php echo $customer->Country; ?>" readonly="true">
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