<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('User_model');
    }

    public function index() {
        $config = array();
        $config['base_url'] = base_url('user/index');
        $config['total_rows'] = $this->User_model->record_count($this->input->get('keyword'));
        $config['per_page'] = $this->input->get('keyword') == NULL ? 14 : 999;
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = round($choice);

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['results'] = $this->User_model->fetch_user($config['per_page'], $page, $this->input->get('keyword'));
        $data['link'] = $this->pagination->create_links();
        $data['total_rows'] = $config['total_rows'];
        $this->load->view('template/backheader');
        //$this->load->view('user/mainpage', $data);
        $this->load->view('dashboard');
        $this->load->view('template/backfooter');
    }

    public function newdata() {
        $this->load->view('template/backheader');
        $this->load->view('user/newdata');
        $this->load->view('template/backfooter');
    }
    public function register() {
        //$this->load->view('template/backheader');
        $this->load->view('user/register');
        //$this->load->view('template/backfooter');
    }
    public function Login_admin() {
        //$this->load->view('template/backheader');
        $this->load->view('user/Admin');
        //$this->load->view('template/backfooter');
    }
    public function registernbu() {
        //$this->load->view('template/backheader');
        $this->load->view('user/registernorth');
        //$this->load->view('template/backfooter');
    }
    public function about() {
        //$this->load->view('template/backheader');
        $this->load->view('user/about');
        //$this->load->view('template/backfooter');
    }

    public function postdata() {
        
        if ($this->input->server('REQUEST_METHOD') == TRUE) {

          if($this->input->post('username')=='admin' && $this->session->userdata('username')!='admin'){
            redirect('dashboard/permission','refresh');
            exit();
          }
            /*
             * อัพโหลดรูปภาพ******************************************************
             */
            $config['upload_path'] = './pictures/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1024 * 1; // 1mb
            $config['overwrite'] = TRUE;
            $config['file_name'] = ($this->input->post('datafile') == '') ? uniqid() : $this->input->post('datafile');

            $this->load->library('upload', $config);
            $no_file_error = "<p>You did not select a file to upload.</p>";
            if (!$this->upload->do_upload('userfile') && $this->upload->display_errors() != $no_file_error) {
                $checkfile = FALSE;
            } else {
                $checkfile = TRUE;
                /*
                 * ปรับขนาดรูปภาพ*************************************************
                 */
                $this->load->library('image_lib');
                $config['image_library'] = 'gd2';
                $config['source_image'] = $this->upload->upload_path . $this->upload->file_name;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 160;
                $config['height'] = 160;
                $config['new_image'] = 'user_' . $this->upload->file_name;


                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                $this->image_lib->clear();

                //--------------------------------------------------------------
                @unlink($this->upload->upload_path . $this->upload->file_name);
            }

            //------------------------------------------------------------------
            if ($this->input->post('id') == '') {
                $this->form_validation->set_rules('user_type', 'ประเภทผู้ใช้งาน', 'required', array('required' => 'ค่าห้ามว่าง!'));
                $this->form_validation->set_rules('username', 'ชื่อผู้ใช้งาน', 'trim|required|min_length[5]|max_length[12]|is_unique[users.username]|alpha_numeric', array(
                    'trim' => 'มีค่าว่าง',
                    'required' => 'ค่าห้ามว่าง',
                    'min_length' => 'ต้องมากกว่า 4 ตัวอักษรขึ้นไป',
                    'max_length' => 'ต้องน้อยกว่า 13 ตัวอักษรลงไป',
                    'is_unique' => 'มีชื่อผู้ใช้งานอยู่ในระบบแล้ว',
                    'alpha_numeric' => 'ต้องเป็นตัวอักษรภาษาอังกฤษและตัวเลขเท่านั้น'
                ));
                $this->form_validation->set_rules('password', 'รหัสผ่านเข้าใช้งาน', 'trim|required|min_length[6]|max_length[20]|alpha_numeric', array(
                    'trim' => 'มีค่าว่าง',
                    'required' => 'ค่าห้ามว่าง',
                    'min_length' => 'ต้องมากกว่า 5 ตัวอักษรขึ้นไป',
                    'max_length' => 'ต้องน้อยกว่า 21 ตัวอักษรลงไป',
                    'alpha_numeric' => 'ต้องเป็นตัวอักษรภาษาอังกฤษและตัวเลขเท่านั้น'
                ));
                $this->form_validation->set_rules('firstname', 'ชื่อจริง', 'required', array('required' => 'ค่าห้ามว่าง!'));
            } else {
                $this->form_validation->set_rules('password', 'รหัสผ่านเข้าใช้งาน', 'trim|min_length[6]|max_length[20]|alpha_numeric', array(
                    'trim' => 'มีค่าว่าง',
                    'min_length' => 'ต้องมากกว่า 5 ตัวอักษรขึ้นไป',
                    'max_length' => 'ต้องน้อยกว่า 21 ตัวอักษรลงไป',
                    'alpha_numeric' => 'ต้องเป็นตัวอักษรภาษาอังกฤษและตัวเลขเท่านั้น'
                ));
                $this->form_validation->set_rules('firstname', 'ชื่อจริง', 'required', array('required' => 'ค่าห้ามว่าง!'));
            }


            if ($this->form_validation->run() == TRUE && $checkfile == TRUE) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );

                $data = $this->upload->data();
                if ($_FILES['userfile']['name'] <> '') {
                    $datafile = ($this->input->post('datafile') == '') ? $data['file_name'] : $this->input->post('datafile');
                } else {
                    $datafile = ($this->input->post('id') == '') ? '' : $this->input->post('datafile');
                }


                $this->User_model->entry_user($this->input->post('id'), $datafile);


                redirect('user', 'refresh');
            } else {
                $data = array(
                    'error_user_type' => form_error('user_type'),
                    'username' => set_value('username'),
                    'error_username' => form_error('username'),
                    'password' => set_value('password'),
                    'error_password' => form_error('password'),
                    'firstname' => set_value('firstname'),
                    'error_firstname' => form_error('firstname'),
                    'err_filename' => form_error('filename'),
                    'err_filename' => $this->upload->display_errors()
                );
                $this->session->set_flashdata($data);

                if ($_FILES['userfile']['name'] <> '' && $this->input->post('datafile') == '') {
                    @unlink($this->upload->upload_path . "user_" . $this->upload->file_name);
                }
            }
            if ($this->input->post('id') == NULL) {
                redirect('user/newdata');
            } else {
                redirect('user/edit/' . $this->input->post('id'));
            }
        }
    }

    
    public function new_user() {

        if ($this->input->server('REQUEST_METHOD') == TRUE) {

          if($this->input->post('username')=='admin' && $this->session->userdata('username')!='admin'){
            redirect('dashboard/permission','refresh');
            exit();
          }

          
            /*
             * อัพโหลดรูปภาพ******************************************************
             */

            
            $config['upload_path'] = './pictures/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1024 * 1; // 1mb
            $config['overwrite'] = TRUE;
            $config['file_name'] = ($this->input->post('datafile') == '') ? uniqid() : $this->input->post('datafile');
        

            
            $this->load->library('upload', $config);
            $no_file_error = "<p>You did not select a file to upload.</p>";
            if (!$this->upload->do_upload('userfile') && $this->upload->display_errors() != $no_file_error) {
                $checkfile = FALSE;
            } else {
                $checkfile = TRUE;
                
                 // ปรับขนาดรูปภาพ*************************************************
                 
                $this->load->library('image_lib');
                $config['image_library'] = 'gd2';
                $config['source_image'] = $this->upload->upload_path . $this->upload->file_name;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 160;
                $config['height'] = 160;
                $config['new_image'] = 'user_' . $this->upload->file_name;


                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                $this->image_lib->clear();

                //--------------------------------------------------------------
                @unlink($this->upload->upload_path . $this->upload->file_name);
            } 

            


            //------------------------------------------------------------------
            if ($this->input->post('id') == '') {
                //$this->form_validation->set_rules('user_type', 'ประเภทผู้ใช้งาน', 'required', array('required' => 'ค่าห้ามว่าง!'));

                $this->form_validation->set_rules('username', 'ชื่อผู้ใช้งาน', 'trim|required|min_length[5]|max_length[12]|is_unique[users.username]|alpha_numeric', 

                    array(
                    'trim' => 'มีค่าว่าง',
                    'required' => 'ค่าห้ามว่าง',
                    'min_length' => 'ต้องมากกว่า 4 ตัวอักษรขึ้นไป',
                    'max_length' => 'ต้องน้อยกว่า 13 ตัวอักษรลงไป',
                    'is_unique' => 'มีชื่อผู้ใช้งานอยู่ในระบบแล้ว',
                    'alpha_numeric' => 'ต้องเป็นตัวอักษรภาษาอังกฤษและตัวเลขเท่านั้น'
                ));
                $this->form_validation->set_rules('password', 'รหัสผ่านเข้าใช้งาน', 'trim|required|min_length[6]|max_length[20]|alpha_numeric', array(
                    'trim' => 'มีค่าว่าง',
                    'required' => 'ค่าห้ามว่าง',
                    'min_length' => 'ต้องมากกว่า 5 ตัวอักษรขึ้นไป',
                    'max_length' => 'ต้องน้อยกว่า 21 ตัวอักษรลงไป',
                    'alpha_numeric' => 'ต้องเป็นตัวอักษรภาษาอังกฤษและตัวเลขเท่านั้น'
                ));
                $this->form_validation->set_rules('firstname', 'ชื่อจริง', 'required', array('required' => 'ค่าห้ามว่าง!'));
                $this->form_validation->set_rules('lastname', 'นามสกุล', 'required', array('required' => 'ค่าห้ามว่าง!'));
                $this->form_validation->set_rules('email', 'อีเมล์', 'trim|required|valid_email', array(
                    'trim' => 'มีค่าว่าง',
                    'required' => 'ค่าห้ามว่าง',
                    'valid_email' => 'รูปแบบอีเมล์ไม่ถูกต้อง'
                ));

            } else {
                $this->form_validation->set_rules('password', 'รหัสผ่านเข้าใช้งาน', 'trim|min_length[6]|max_length[20]|alpha_numeric', array(
                    'trim' => 'มีค่าว่าง',
                    'min_length' => 'ต้องมากกว่า 5 ตัวอักษรขึ้นไป',
                    'max_length' => 'ต้องน้อยกว่า 21 ตัวอักษรลงไป',
                    'alpha_numeric' => 'ต้องเป็นตัวอักษรภาษาอังกฤษและตัวเลขเท่านั้น'
                ));
                $this->form_validation->set_rules('firstname', 'ชื่อจริง', 'required', array('required' => 'ค่าห้ามว่าง!'));
                $this->form_validation->set_rules('email', 'อีเมล์', 'trim|required|valid_email', array(
                    'trim' => 'มีค่าว่าง',
                    'required' => 'ค่าห้ามว่าง',
                    'valid_email' => 'รูปแบบอีเมล์ไม่ถูกต้อง'
                ));
            }


            if ($this->form_validation->run() == TRUE && $checkfile == TRUE) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );

                $data = $this->upload->data();
                if ($_FILES['userfile']['name'] <> '') {
                    $datafile = ($this->input->post('datafile') == '') ? $data['file_name'] : $this->input->post('datafile');
                } else {
                    $datafile = ($this->input->post('id') == '') ? '' : $this->input->post('datafile');
                }


                $this->User_model->add_user($this->input->post('id'), $datafile);


                redirect('user/login', 'refresh');
            } else {
                $data = array(
                    'error_user_type' => form_error('lastname'),
                    'username' => set_value('lastname'),
                    'error_username' => form_error('username'),
                    'password' => set_value('password'),
                    'error_password' => form_error('password'),
                    'firstname' => set_value('firstname'),
                    'error_firstname' => form_error('firstname'),
                    'email' => set_value('email'),                    
                    'error_email' => form_error('email'),
                    'err_filename' => form_error('filename'),
                    //'err_filename' => $this->upload->display_errors()
                );
                $this->session->set_flashdata($data);

                if ($_FILES['userfile']['name'] <> '' && $this->input->post('datafile') == '') {
                    @unlink($this->upload->upload_path . "user_" . $this->upload->file_name);
                } 
            }
            if ($this->input->post('id') == NULL) {
                redirect('user/register');
            } else {
                redirect('user/edit/' . $this->input->post('id'));
            }
        }
    }



    public function edit($id) {
        $data['user'] = $this->User_model->read_user($id);
        $this->load->view('template/backheader');
        $this->load->view('user/edit', $data);
        $this->load->view('template/backfooter');
    }

    public function remove($id) {
      if($this->session->userdata('username')!='admin'){
        redirect('dashboard/permission','refresh');
        exit();
      }
        $result = $this->User_model->read_user($id);
        @unlink('./pictures/view_' . $result->filename);
        @unlink('./pictures/thumb_' . $result->filename);
        @unlink('./pictures/sm_' . $result->filename);

        $this->User_model->remove_user($id);
        redirect('user', 'refresh');
    }

    public function validlogin() {
        if ($this->input->server('REQUEST_METHOD') == TRUE) {
            if ($this->User_model->record_login($this->input->post('username'), $this->input->post('password')) == 1) {
                $result = $this->User_model->fetch_user_login($this->input->post('username'), $this->input->post('password'));
                $this->session->set_userdata(array('login_id' => $result->id, 'username' => $result->username, 'firstname' => $result->firstname, 'lastname' => $result->lastname,'img'=>$result->filename,'user_type'=>$result->user_type));
                redirect('dashboard','refresh');
            } else {
                $this->session->set_flashdata(array('msgerr' => '<p class="login-box-msg" style="color:red;">ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด!</p>'));
                redirect('user/login', 'refresh');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata(array('login_id', 'username', 'firstname','lastname','img','user_type'));
        redirect('', 'refresh');
    }

    public function login_old() {

        $this->load->view('user/login');
    }
    public function login() {

        $this->load->view('user/main');
    }

}
