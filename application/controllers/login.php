<?php
class Login extends MY_Controller
{
    public function __construct()
    {
    	parent::__construct();
    	if($this->session->userdata('id'))
    		return redirect('admin/welcome');

    }
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','User Name','required|alpha_numeric');
		$this->form_validation->set_rules('pass','Password','required|max_length[12]');
		if($this->form_validation->run())
		{
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pass');
			$this->load->model('loginmodel');
			$id=$this->loginmodel->isvalidate($uname,$pass);
			if($id)
			{
                  $this->load->library('session');
                  $this->session->set_userdata('id',$id);
                  return redirect('admin/welcome');
			}
			else
			{
                   $this->session->set_flashdata('Login_failed','Invalid Username/Password');
                   return redirect('login');
			}
		}
		else
		{
			$this->load->view('Admin/Login');
		}
	}
}
?>	
