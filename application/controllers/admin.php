<?php
class Admin extends MY_Controller
{

	public function welcome()
	{
        if(!$this->session->userdata('id'))
		{
			return redirect('login');
		}
		$this->load->model('loginmodel','ar');
		$articles=$this->ar->articleList();
		$this->load->view('Admin/dashboard',['articles'=>$articles]);
	}
	public function register()
	{
		$this->load->view('admin/register');
	}
	public function adduser()
	{
		$this->load->view('admin/add_articles');
	}
	public function delarticles()
	{
         $id=$this->input->post('id');
         $this->load->model('loginmodel','useradd');
         if($this->useradd->del_articles($id))
         {
        	$this->session->set_flashdata('msg','Article Deleted Successfully');
        	$this->session->set_flashdata('msg_class','alert-success');
         }
         else
         {
        	$this->session->set_flashdata('msg','Article Not Deleted Please Try Again!');
        	$this->session->set_flashdata('msg_class','alert-danger');
         }
         return redirect('admin/welcome');
	}
	public function userValidation()
	{
		if($this->form_validation->run('add_article_rules'))
        {
        	$post=$this->input->post();
        	$this->load->model('loginmodel','useradd');
        	if($this->useradd->add_articles($post))
        	{
        		$this->session->set_flashdata('msg','Article Added Successfully');
        		$this->session->set_flashdata('msg_class','alert-success');
        	}
        	else
        	{
        		$this->session->set_flashdata('msg','Article Not Added Please Try Again!');
        		$this->session->set_flashdata('msg_class','alert-danger');
        	}
        	return redirect('admin/welcome');
        }
        else
        {
        	$this->load->view('admin/add_articles');
        }
	}
	public function sendemail()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','User Name','required|alpha_numeric');
		$this->form_validation->set_rules('password','Password','required|max_length[12]');
		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','Last Name','required|alpha');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if($this->form_validation->run())
		{
             $post=$this->input->post();
             $this->load->model('loginmodel','useradd');
             if($this->useradd->add_users($post))
             {
                   echo "ok";
             }
             else
             {
                   echo "fuckoff";
             }
		}
        else
        {
           $this->load->view('Admin/register'); 
        }
	}
	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect('login');
	}

}
?>