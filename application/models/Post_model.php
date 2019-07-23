<?php 
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('posts');
				return $query->result_array();
			}

			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();
		}  

		public function create_post(){
			$slug = url_title($this->input->post('slug'));

			//Check if slug/URL already exists
			$query = $this->db->get('posts');
			$posts = $query->result_array();			
			foreach ($posts as $post) :
				if($post['slug'] == $slug){
					echo '<h2><br><br><center>http://localhost/Cphp/posts/ '.'<label style="background-color: #eaff00; color:#000000;">'.$slug.'</label>'.' URL unavailable</center></h2>';
					echo '<h3><center><p><a href="javascript:history.go(-1)" >&laquo; Go back to change URL</a></p></center></h3>';	
					die();
				}
			endforeach;

			//If it is unique, insert to DB
			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body')
			);
			return $this->db->insert('posts', $data);			
		}

		public function delete_post($id = NULL){
			$this->db->where('id', $id);
			$this->db->delete('posts');
			return true;
		}

		public function update_post($slug){
			$data = array(
	        'title' => $this->input->post('title'),
	        'body' => $this->input->post('body')
			);

			$this->db->where('slug', $slug);
			$this->db->update('posts', $data);
		}
	}