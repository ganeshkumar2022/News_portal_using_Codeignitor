<?php
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index()
	{
		$error=null;
		$this->load->view('admin_login',array('lerror'=>$error));
	}
	public function login_verify()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		if($admin=$this->admin_model->admin($email))
		{
			if($password==base64_decode($admin->password))
			{
				$this->session->set_userdata('aid',$admin->id);
				redirect('admin/dashboard');
			}
			else
			{
				$error="Invalid login details";
				$this->load->view('admin_login',array('lerror'=>$error));
			}
		}
		else
		{
			$error="Invalid login details";
			$this->load->view('admin_login',array('lerror'=>$error));
		}
	}
	public function dashboard()
	{
		if($this->session->has_userdata('aid'))
		{
			$this->load->view('admin/dashboard');
		}
		else
		{
			redirect("admin");
		}
	}
	public function change_password()
	{
		if($this->session->has_userdata('aid'))
		{
			$err=$suc=null;
			if($this->input->post('change_password'))
			{
			 $id=$this->session->userdata('aid');
			 $old_password=base64_encode($this->input->post('old_password'));
			 $password=base64_encode($this->input->post('password'));
			 $confirm_password=base64_encode($this->input->post('confirm_password'));
			 if($this->admin_model->getpass($old_password,$id))
			 {
				if($password==$confirm_password)
				{
				$response=$this->admin_model->update_password($password,$id);
					if($response==true)
					{
						$suc="<p class='text-success font-weight-bold' id='succ'>Password updated successfully...</p>";
					}
					else
					{
						$err="<p class='text-danger font-weight-bold' id='succ'>Error to update password...</p>";
					}
				}
				else
				{
					$err="<p class='text-danger font-weight-bold' id='succ'>New password and confirm password not matched...</p>";
				}
			 }
			 else
			 {
				$err="<p class='text-danger font-weight-bold' id='succ'>Old password is not correct...</p>";
			 }
			}
			$this->load->view('admin/change_password',array('error'=>$err,'suc'=>$suc));
		}
		else
		{
			redirect("admin");
		}
	}
	public function profile()
	{
		if($this->session->has_userdata('aid'))
		{
			$a=null;
			$id=$this->session->userdata('aid');
			if($this->input->post('update_profile'))
			{
				$data["name"]=$this->input->post('name');
				$data["email"]=$this->input->post('email');
				$response=$this->admin_model->update_profile($data,$id);
				if($response==true)
				{
					$a='
					<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Success!</strong> Profile updated successfully...
					</div>
					';
				}
				else
				{
					$a='
					<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> Error to update profile...
					</div>
					';
				}
			}
			$admin_info=$this->admin_model->getAdmin($id);
			$this->load->view('admin/profile',array('admin_info'=>$admin_info,'a'=>$a));
		}
		else
		{
			redirect("admin");
		}
	}
	public function logout()
	{
		if($this->session->has_userdata('aid'))
		{
			$this->session->unset_userdata("aid");
			redirect("admin");	
		}
		else
		{
			redirect("admin");
		}
	}
	public function category_add()
	{
		if($this->session->has_userdata('aid'))
		{
			$a=null;
			if($this->input->post('add_category'))
			{
				$category_name=$this->input->post('name');
				if($this->admin_model->check_cat($category_name))
				{
					$a='
					<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> Category name already exists...
					</div>
					';
				}
				else
				{
					$data["category_name"]=$this->input->post('name');
					$response=$this->admin_model->add_category($data);
					if($response==true)
				{
					$a='
					<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Success!</strong> Category added successfully...
					</div>
					';
				}
				else
				{
					$a='
					<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> Error to add category...
					</div>
					';
				}

				}
			}
			$this->load->view('admin/add_category',array('a'=>$a));	
		}
		else
		{
			redirect("admin");
		}
	}
	public function manage_category()
	{
		if($this->session->has_userdata('aid'))
		{
			$category=$this->admin_model->get_category();
		$this->load->view('admin/manage_category',array('category'=>$category));
		}
		else
		{
			redirect("admin");
		}
	}

	public function manage_sub_category()
	{
		if($this->session->has_userdata('aid'))
		{
		$category=$this->admin_model->get_sub_category();
		$this->load->view('admin/manage_sub_category',array('category'=>$category));
		}
		else
		{
			redirect("admin");
		}
	}

	public function delete_category()
	{
		if($this->session->has_userdata('aid'))
		{
			$id=$this->input->get('id');
			$this->admin_model->delete_category($id);
			redirect('admin/manage_category');
		}
		else
		{
			redirect("admin");
		}
	}
	public function delete_sub_category()
	{
		if($this->session->has_userdata('aid'))
		{
			$id=$this->input->get('id');
			$this->admin_model->delete_sub_category($id);
			redirect('admin/manage_sub_category');
		}
		else
		{
			redirect("admin");
		}
	}
	public function add_sub_category()
	{
		if($this->session->has_userdata('aid'))
		{
		$category=$this->admin_model->get_category();
		$this->load->view('admin/add_sub_category',array('category'=>$category));
		}
		else
		{
			redirect("admin");
		}
	}
	public function add_news()
	{
		if($this->session->has_userdata('aid'))
		{
		$category=$this->admin_model->get_category();
		$subcategory=$this->admin_model->get_sub_category();
		$this->load->view('admin/add_news',array('category'=>$category,'subcategory'=>$subcategory));
		}
		else
		{
			redirect("admin");
		}
	}
	public function add_n()
	{
		if($this->session->has_userdata('aid'))
		{
		$data["title"]=$this->input->post('title');
		$data["category_id"]=$this->input->post('category_id');
		$data["sub_category_id"]=$this->input->post('sub_category_id');
		$data["description"]=$this->input->post('description');
		$config["upload_path"]="uploads/";
		$config["allowed_types"]="jpg|png";
		$config["max_size"]=4048;
		$this->load->library("upload",$config);
		if($this->upload->do_upload('myimage'))
		{
			$image=$this->upload->data();
			$data["myimage"]=$image["file_name"];
			$response=$this->admin_model->add_news($data);
			if($response==true)
			{
				$this->session->set_flashdata("success","Add News successfully...");
				redirect("admin/add_news");
			}
			else
			{
				$this->session->set_flashdata("error","Error to add news...");
				redirect("admin/add_news");
			}
		}
		else
		{
			$error=$this->upload->display_errors();
			$this->session->set_flashdata("error",$error);
			redirect("admin/add_news");
		}
		}
		else
		{
			redirect("admin");
		}
	}
	public function add_sub()
	{
		if($this->session->has_userdata('aid'))
		{
		$data["category_id"]=$this->input->post('category_id');
		$data["sub_category_name"]=$this->input->post("sub_category_name");
		$response=$this->admin_model->add_sub_category($data);
		if($response==true)
		{
			$this->session->set_flashdata('success','Subcategory added successfully...');
			redirect("admin/add_sub_category");
		}
		else
		{
			$this->session->set_flashdata('error','Error to add Sub category...');
			redirect("admin/add_sub_category");
		}
		}
		else
		{
			redirect("admin");
		}
	}
	public function get_select()
	{
		$a=$this->input->get('id');
		$result=$this->admin_model->get_select($a);
		$this->load->view("res",array('result'=>$result));
		
	}
	public function manage_news()
	{
		if($this->session->has_userdata('aid'))
		{
			$category=$this->admin_model->get_all_news();
		$this->load->view('admin/manage_news',array('news'=>$category));
		}
		else
		{
			redirect("admin");
		}
	}
	public function delete_news()
	{
		if($this->session->has_userdata('aid'))
		{
		$id=$this->input->get('id');
		$this->admin_model->delete_news($id);
		redirect('admin/manage_news');
		}
		else
		{
			redirect("admin");
		}
	}
	public function edit_news()
	{
		if($this->session->has_userdata('aid'))
		{
			
		$id=$this->input->get('id');
		$category=$this->admin_model->get_category();
		$subcategory=$this->admin_model->get_sub_category();
		$news=$this->admin_model->get_news_id($id);
		$this->load->view('admin/edit_news',array('news'=>$news,'category'=>$category,'subcategory'=>$subcategory));
		}
		else
		{
			redirect("admin");
		}
	}


	//edit news start 

	public function editor()
	{
		
		if($this->session->has_userdata('aid'))
		{
			
			
			$id=$this->input->post('id');
			$data["title"]=$this->input->post('title');
			$data["category_id"]=$this->input->post('category_id');
			$data["sub_category_id"]=$this->input->post('sub_category_id');
			$data["description"]=$this->input->post('description');
			$config["upload_path"]="uploads/";
			$config["allowed_types"]="jpg|png";
			$config["max_size"]=4048;
			$this->load->library("upload",$config);
			
			if(!empty($_FILES["myimage"]["name"]))
			{
				if($this->upload->do_upload('myimage'))
				{
					$image=$this->upload->data();
					$data["myimage"]=$image["file_name"];
					
				}
				else
				{
					$error=$this->upload->display_errors();
					$this->session->set_flashdata("error",$error);
					redirect("admin/edit_news?id=".$id);
				}
			}
			
			$response=$this->admin_model->edit_news($data,$id);
				if($response==true)
				{
					//echo "<script>alert('Edit news successfully');</script>";
					$this->session->set_flashdata("success","Edit News successfully...");
					redirect("admin/edit_news?id=".$id);
				}
				else
				{
					echo "<script>alert('Error to edit news');</script>";
					$this->session->set_flashdata("error","Error to Edit news...");
					redirect("admin/edit_news?id=".$id);
				}
			
		}
		else
		{
			redirect("admin");
		}
	}
	//edit news end

}
?>
