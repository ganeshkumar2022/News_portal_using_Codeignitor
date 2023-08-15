<?php
class Admin_model extends CI_Model
{
	public function admin($email)
	{
		return $this->db->where('email',$email)->get('admin')->row();
	}
	public function getpass($old_password,$id)
	{
		return $this->db->where('id',$id)->where('password',$old_password)->get('admin')->row();
		
	}
	public function update_password($password,$id)
	{
		$this->db->query("update admin set password='$password' where id=$id");
		return true;
	}
	public function getAdmin($id)
	{
		return $this->db->where('id',$id)->get('admin')->row();
	}
	public function update_profile($data,$id)
	{
		$this->db->where('id',$id)->update("admin",$data);
		return true;
	}
	public function check_cat($category_name)
	{
	   $query=$this->db->where('category_name',$category_name)->get('category');
	   if($query->num_rows()>0)
	   {
		return true;
	   }
	   else
	   {
		return false;
	   }

	}
	public function add_category($data)
	{
		$this->db->insert("category",$data);
		return true;
	}
	public function get_category()
	{
		$query=$this->db->get('category');
		return $query->result();
	}
	public function delete_category($id)
	{
		$this->db->where('cid',$id)->delete('category');
	}
	public function add_sub_category($data)
	{
		$this->db->insert('subcategory',$data);
		return true;
	}
	public function get_sub_category()
	{
		$this->db->order_by('id','desc');
		$this->db->select("id, category_name, category_id, sub_category_name");
		$this->db->from("category");
		$this->db->join("subcategory","category.cid=subcategory.category_id");
		$query=$this->db->get();
		return $query->result();
	}
	public function delete_sub_category($id)
	{
		
		$this->db->where('id',$id)->delete('subcategory');
	}
	public function get_select($a)
	{
		$query=$this->db->where('category_id',$a)->get('subcategory');
		return $query->result();
	}
	public function add_news($data)
	{
		$this->db->insert("news",$data);
		return true;
	}
	public function get_all_news()
	{
		
		$this->db->select("*");
		$this->db->from("category");
		$this->db->join("subcategory","category.cid=subcategory.category_id");
		$this->db->join("news","subcategory.id=news.sub_category_id");
		$this->db->order_by("nid","desc");
		$query=$this->db->get();
		return $query->result();
	}
	public function delete_news($id)
	{
		$this->db->where('nid',$id);
		$this->db->delete('news');
	}
	public function get_news_id($id)
	{
		$this->db->where('nid',$id);
		$this->db->select("*");
		$this->db->from("category");
		$this->db->join("subcategory","category.cid=subcategory.category_id");
		$this->db->join("news","subcategory.id=news.sub_category_id");
		$this->db->order_by("nid","desc");
		$query=$this->db->get();
		return $query->result();
	}

	public function edit_news($data,$id)
	{
		$this->db->set($data);
		$this->db->where("nid",$id);
		$this->db->update("news",$data);
		return true;
	}
	public function get_cat($cid)
	{
		$this->db->where('subcategory.category_id',$cid);
		$this->db->select("*");
		$this->db->from("category");
		$this->db->join("subcategory","category.cid=subcategory.category_id");
		$this->db->join("news","subcategory.id=news.sub_category_id");
		$this->db->order_by("nid","desc");
		$query=$this->db->get();
		return $query->result();
	}
	public function add_comments($data)
	{
		$this->db->insert("comments",$data);
		return true;
	}
	public function view_news($vid)
	{
		$this->db->where('nid',$vid);
		$query=$this->db->get('news');
		return $query->result();
	}
	public function search_content($search)
	{
		$query=$this->db->query("select * from news where title like '%$search%'");
		return $query->result();
	}
}
?>
