<?php
class loginmodel extends CI_Model
{
	public function isvalidate($username,$password)
	{
        $q=$this->db->where(['username'=>$username,'password'=>$password])
                 ->get('users');
          if($q->num_rows())
          {
          	return $q->row()->id;
          } 
          else 
          {
             return False;    
          }        
	}
	public function articleList()
	{
		 $id=$this->session->userdata('id');
      $q=$this->db->select()
                  ->from('article')
                  ->where(['user_id'=>$id])
                  ->get();
       return $q->result();
	}
  public function num_rows()
  {
    $id=$this->session->userdata('id');
      $q=$this->db->select()
                  ->from('article')
                  ->where(['user_id'=>$id])
                  ->get();
       return $q->num_rows();
  }
  public function add_articles($array)
  {
    return $this->db->insert('article',$array);
  }
  public function del_articles($id)
  {
    return $this->db->delete('article',['id'=>$id]);
  }
  public function add_users($array)
  {
    return $this->db->insert('users',$array);
  }
}