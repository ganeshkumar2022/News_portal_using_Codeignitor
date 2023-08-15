<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin_model");
	}
	public function index()
	{
		$category=$this->admin_model->get_category();
		$news=$this->admin_model->get_all_news();
		$get_three=$this->admin_model->get_all_news();
		$this->load->view('home',array('news'=>$news,'category'=>$category,'get_three'=>$get_three));
	}
	public function search()
	{
		$search=$this->input->post('search');

		$category=$this->admin_model->get_category();
		$news=$this->admin_model->get_all_news();
		$get_three=$this->admin_model->get_all_news();
		$search_content=$this->admin_model->search_content($search);
		$this->load->view("search_content",array('search_content'=>$search_content,'news'=>$news,'category'=>$category,'get_three'=>$get_three));
	}
	public function select_news($vid)
	{
		$category=$this->admin_model->get_category();
		$sel_news=$this->admin_model->view_news($vid);
		$news=$this->admin_model->get_all_news();
		$get_three=$this->admin_model->get_all_news();
		$this->load->view('select_news',array('news'=>$news,'category'=>$category,'get_three'=>$get_three,'sel_news'=>$sel_news));
	}
	public function select_cat()
	{
		if($this->input->post('submit'))
		{
			$data["name"]=$this->input->post('name');
			$data["email"]=$this->input->post('email');
			$data["message"]=$this->input->post('message');
			$response=$this->admin_model->add_comments($data);
			if($response==true)
			{
				echo "<script>alert('Add comment successfully');</script>";
			}
			else
			{
				echo "<script>alert('Error to add comments');</script>";
			}
		}
		$cid=$this->input->get('cid');
		$cat=$this->admin_model->get_cat($cid);
		$category=$this->admin_model->get_category();
		$get_three=$this->admin_model->get_all_news();
		$this->load->view('selected_category',array('news'=>$cat,'category'=>$category,'get_three'=>$get_three));
	}
}
?>
