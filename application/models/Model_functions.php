<?php
class Model_functions extends CI_Model {

	public function get_results($sql){
		$res = $this->db->query($sql);
		if ($res->num_rows() > 0)
		{
			return $res->result_array();
		}
		else
		{
			return false;
		}
	}
	public function get_row($sql){
		$res = $this->db->query($sql);
		if ($res->num_rows() > 0)
		{
			$resp = $res->result_array();
			return $resp[0];
		}
		else
		{
			return false;
		}
	}
	
	public function login($username, $password, $check = FALSE)
	{
		$username = $this->db->escape(strtolower($username));
		if(!$check){$password = md5($this->db->escape($password));}
		return $this->db->get_row("SELECT * FROM `user` WHERE `username` = \"$username\" AND `password` = \"$password\";");
	}
	public function setting($id)
	{
		return $this->get_row("SELECT * FROM `setting` WHERE `setting_id` = '$id';");
	}
	public function homepage($id)
	{
		return $this->get_row("SELECT * FROM `homepage` WHERE `homepage_id` = '$id';");
	}
	public function parents()
	{
		return $this->get_results("
			SELECT s.* 
			FROM `service` AS s 
			WHERE s.parent = 0 
			ORDER BY s.order DESC;
		");
	}
	public function services()
	{
		return $this->get_results("
			SELECT s.*, p.title AS Parent 
			FROM `service` AS s
			LEFT JOIN `service` AS p ON s.parent = p.service_id 
			ORDER BY s.order DESC;
		");
	}
	public function featured()
	{
		return $this->get_results("
			SELECT s.* 
			FROM `service` AS s
			WHERE s.featured = 1 
			ORDER BY s.order DESC;
		");
	}
	public function get_service_byid($id)
	{
		return $this->get_row("SELECT * FROM `service` WHERE `service_id` = '$id';");
	}
	public function get_service_byslug($slug)
	{
		return $this->get_row("SELECT * FROM `service` WHERE `slug` = '$slug';");
	}
	public function slider()
	{
		return $this->get_results("SELECT * FROM `slider` ORDER BY `order` ASC;");
	}
	public function get_slider_byid($id)
	{
		return $this->get_row("SELECT * FROM `slider` WHERE `slider_id` = '$id';");
	}
	public function testimonials()
	{
		return $this->get_results("SELECT * FROM `testimonial` ORDER BY `name` ASC;");
	}
	public function get_testimonial_byid($id)
	{
		return $this->get_row("SELECT * FROM `testimonial` WHERE `testimonial_id` = '$id';");
	}
	public function blog($limit = 0)
	{
		if ($limit != 0) {
			return $this->get_results("SELECT `blog_id`, `title`,`slug`,`short`,`image`,`at` FROM `blog` ORDER BY `at` DESC LIMIT $limit;");
		}
		else{
			return $this->get_results("SELECT `blog_id`, `title`,`slug`,`short`,`image`,`at` FROM `blog` ORDER BY `at` DESC;");
		}
	}
	public function get_blog_byid($id)
	{
		return $this->get_row("SELECT * FROM `blog` WHERE `blog_id` = '$id';");
	}
	public function pages()
	{
		return $this->get_results("SELECT * FROM `page` ORDER BY `title` ASC;");
	}
	public function get_page_byid($id)
	{
		return $this->get_row("SELECT * FROM `page` WHERE `page_id` = '$id';");
	}
	public function faqs()
	{
		return $this->get_results("SELECT * FROM `faq` ORDER BY `faq_id` DESC;");
	}
	public function get_faq_byid($id)
	{
		return $this->get_row("SELECT * FROM `faq` WHERE `faq_id` = '$id';");
	}
	public function features()
	{
		return $this->get_results("SELECT * FROM `feature` ORDER BY `feature_id` DESC;");
	}
	public function get_feature_byid($id)
	{
		return $this->get_row("SELECT * FROM `feature` WHERE `feature_id` = '$id';");
	}
	public function team()
	{
		return $this->get_results("SELECT * FROM `team` ORDER BY `order` ASC;");
	}
	public function get_team_byid($id)
	{
		return $this->get_row("SELECT * FROM `team` WHERE `team_id` = '$id';");
	}
	public function get_states($id)
	{
		return $this->get_results("SELECT * FROM `state` WHERE `country_id` = '$id' ORDER BY `name` ASC;");
	}
	public function get_cities($id)
	{
		return $this->get_results("SELECT * FROM `city` WHERE `state_id` = '$id' ORDER BY `name` ASC;");
	}
	public function locations($status)
	{
		if ($status == 'all') {
			return $this->get_results("
				SELECT l.*, s.name AS state, c.name AS city 
				FROM `location` AS l 
				INNER JOIN `state` AS s ON l.state_id = s.state_id 
				INNER JOIN `city` AS c ON l.city_id = c.city_id 
				ORDER BY l.location_id ASC;
			");
		}
		else{
			return $this->get_results("
				SELECT l.*, s.name AS state, c.name AS city 
				FROM `location` AS l 
				INNER JOIN `state` AS s ON l.state_id = s.state_id 
				INNER JOIN `city` AS c ON l.city_id = c.city_id
				WHERE l.status = '$status' 
				ORDER BY l.location_id ASC;
			");
		}
	}
	public function get_location_byid($id)
	{
		return $this->get_row("SELECT * FROM `location` WHERE `location_id` = '$id';");
	}
	public function get_location_byslug($slug)
	{
		return $this->get_row("
			SELECT l.*, s.name AS state, c.name AS city 
			FROM `location` AS l 
			INNER JOIN `state` AS s ON l.state_id = s.state_id 
			INNER JOIN `city` AS c ON l.city_id = c.city_id
			WHERE l.status = 1 AND `slug` = '$slug' 
		");
	}
	public function location_facilities($location)
	{
		return $this->get_results("SELECT * FROM `location_facility` WHERE `location_id` = '$location' ORDER BY `location_id` ASC;");
	}
	public function get_location_facility_byid($id)
	{
		return $this->get_row("SELECT * FROM `location_facility` WHERE `location_facility_id` = '$id';");
	}
	public function contact_forms($status)
	{
		return $this->get_results("SELECT * FROM `contact_form` WHERE `status` = '$status' ORDER BY `at` ASC;");
	}
}