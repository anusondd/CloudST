<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Loadpost {

    public function __construct() {
        $this->CI = & get_instance();
    }

    public function check_permission()
    {

      if($this->CI->session->userdata('user_type') == 'staff')
        {
          if(   /*$this->CI->router->class == 'user' or */$this->CI->router->class == 'itemtype' or $this->CI->router->class == 'item' or $this->CI->router->class == 'location')
            {
            redirect('dashboard/permission','refresh');
            exit();
            }

        }
        elseif($this->CI->session->userdata('user_type') == 'admin')
            {
              if($this->CI->router->method=='remove')
                {
                  redirect('dashboard/permission','refresh');
                  exit();
                }
            }
      }

    // ป้องกันการเข้าถึง
    public function check_login() {
      $rs = 0;
      if($this->CI->session->userdata('login_id') == NULL){
        if($this->CI->router->class == 'dashboard'){
          $rs = ($this->CI->router->method=='index') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='permission') ? $rs+1 : $rs;
        }

        if($this->CI->router->class == 'item'){
          $rs = ($this->CI->router->method=='index') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='newdata') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='postdata') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='edit') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='remove') ? $rs+1 : $rs;
        }

        if($this->CI->router->class == 'itemtype'){
          $rs = ($this->CI->router->method=='index') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='newdata') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='postdata') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='edit') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='remove') ? $rs+1 : $rs;
        }

        if($this->CI->router->class == 'location'){
          $rs = ($this->CI->router->method=='index') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='newdata') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='postdata') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='edit') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='remove') ? $rs+1 : $rs;
        }

        if($this->CI->router->class == 'openflow'){
          $rs = ($this->CI->router->method=='index') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='newdata') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='postdata') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='edit') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='remove') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='flowup') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='locationup') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='userup') ? $rs+1 : $rs;
        }

        if($this->CI->router->class == 'receipt'){
          $rs = ($this->CI->router->method=='index') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='newdata') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='postdata') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='edit') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='remove') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='productup') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='locationup') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='userup') ? $rs+1 : $rs;
        }

        if($this->CI->router->class == 'returnflow'){
          $rs = ($this->CI->router->method=='index') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='newdata') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='postdata') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='edit') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='remove') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='openup') ? $rs+1 : $rs;
        }

        if($this->CI->router->class == 'user'){
          $rs = ($this->CI->router->method=='index') ? $rs+1 : $rs;
         // $rs = ($this->CI->router->method=='newdata') ? $rs+1 : $rs;
         //$rs = ($this->CI->router->method=='postdata') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='edit') ? $rs+1 : $rs;
          $rs = ($this->CI->router->method=='remove') ? $rs+1 : $rs;
        }
      }

      // ตรวจสอบการเข้าสู่ระบบหากไม่ได้เข้าสู่ระบบให้ไปที่หน้า LOGIN ของผู้ประกอบการ
      if($rs > 0 && $this->CI->session->userdata('login_id') == NULL){
        redirect('user/login','refresh');
      }
    }

}
