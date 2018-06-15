<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginout extends CI_Controller
{


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


    public function index()
    {
        $this->load->view('Signup');
    }

    public function save()
    {
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('city','City','required');
        $this->form_validation->set_rules('country','Country','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if($this->form_validation->run())
        {
           $data= $this->input->post();
           $this->load->model('Loginout_model');
           if($this->Loginout_model->saveRecords($data))
           {
            $this->session->set_flashdata('response','Signed up Successfully, Kindly Login');
           }
           else
           {
            $this->session->set_flashdata('response','Sign Up Failed');
           }
           $this->load->view('login');
        }
        else
        {
           $this->load->view('Signup');
        }
    }

    public function loggedin()
    {
        $postData   = $this->input->post();
        if(!empty($postData)){
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
            if($this->form_validation->run())
            {
                $username= $this->input->post('username');
                $password= $this->input->post('password');
                $this->load->model('Loginout_model');
                $checkUser  = $this->Loginout_model->checkRecords($username,$password);
                if(!empty($checkUser))
                {

                    $session_data = array('username'=>$username,'name'=>$checkUser->name,'city'=>$checkUser->city);
                    $this->session->set_userdata($session_data);
                    redirect('Loginout/dashboard');
                }
                else
                {
                    $this->session->set_flashdata('response','Invalid Credentials');
                }
            }

        }
    $this->load->view('login');
    }

    public function dashboard(){
       // $this->load->view('Successful');
        if($this->session->userdata('username')!='')
        {
        $this->load->view('Successful');
        }
        else
        {
            redirect('/Loginout/loggedin');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('/Loginout/loggedin');
    }
}