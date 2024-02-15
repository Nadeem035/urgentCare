<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	public function __construct()
	{
	        parent::__construct();
	        error_reporting(0);
	        $this->load->database();
	        $this->load->model('Model_functions','model');
	        $this->load->helper(array('form', 'url'));
	        $this->load->library('session');
	}

	/**
	*

		@HATH NA LAIE

	*
	*/
	public function template($page = '', $data = '')
	{
		if (isset($_SESSION['admin']))
		{
			$data['admin'] = unserialize($_SESSION['admin']);
			$data['login'] = true;
		}
		else
		{
			$data['login'] = false;
		}
		$this->load->view('admin/header',$data);
		$this->load->view($page,$data);
		$this->load->view('admin/footer',$data);
	}
	public function login_template($page = '', $data = '')
	{
		if (isset($_SESSION['admin']))
		{
			$data['admin'] = unserialize($_SESSION['admin']);
			$data['login'] = true;
		}
		else
		{
			$data['login'] = false;
		}
		$this->load->view('admin/new_login_header',$data);
		$this->load->view($page,$data);
		$this->load->view('admin/new_login_footer',$data);

	}




	/**
	
	@Login Randi-Rona

	*/
	
	public function login()
	{
		if (isset($_SESSION['admin']))
		{
			redirect('admin/index');
			return;
		}
		$data['title'] = 'Login';
		$this->login_template('admin/signin', $data);
	}
	public function check_login()
	{
		if(isset($_SESSION['admin']) && $_SESSION['admin']!= "")
		{
			$user = unserialize($_SESSION['admin']);
			$username = $user['username'];
			$password = $user['password'];
			$resp = $this->model->get_row("SELECT * FROM `admin` WHERE `username` = '$username'  AND `password` =  '$password'");
			if ($resp)
			{
				return $user;
			}
			else
			{
				redirect('admin/login');
			}
		}
		else 
		{
			redirect('admin/login');
		}
	}
	public function change_password()
	{
		$user = $this->check_login();
		$data['signin'] = FALSE;
		$username = $user['username'];
		if (isset($_POST['password']) && strlen($_POST['password']) > 0 && isset($_POST['re_password']) && strlen($_POST['re_password']) > 0) 
		{
			$password = md5($_POST['password']);
			$re_password = md5($_POST['re_password']);
			if ($password === $re_password) 
			{
				if ($this->db->update('admin', array("password"=>$password), array("username"=>$username))) 
				{
					redirect("admin/logout");
				}
			}
			else
			{
				redirect("admin/change_password?error=1&msg='Your Provided Passwords are not matched, please try with correct password'");
			}
		}
		$data['username'] = $username;
		$this->template("admin/change_password", $data);
	}

	public function logout()
	{
		unset($_SESSION['admin']);
		redirect("admin/login");
	}
	/**
	@Login Ajax
	*/
	public function process_login()
	{
		if ($_POST)
		{
			$username = $_POST['username'];
			$password = md5($_POST['password']);

			$resp = $this->model->get_row("SELECT * FROM `admin` WHERE `username` = '$username'  AND `password` =  '$password';");
			if ($resp)
			{
				$_SESSION['admin'] = serialize($resp);
				redirect('admin/index');
				return;
			}
			else
			{
				redirect('admin/login');
				return;
			}
		}
		else
		{
			redirect('admin');
		}
	}
	

	/***************************************
	*	callling main index function here 
	****************************************/
	public function index($status='all')
	{
		$this->setting();
	}
	public function setting()
	{
		$user = $this->check_login();
		$data['q'] = $this->model->setting(1);
		$data['page_title'] = "Update: Setting";
		$data['menu'] = 'setting';
		$this->template('admin/setting', $data);
	}
	public function homepage()
	{
		$user = $this->check_login();
		$data['q'] = $this->model->homepage(1);
		$data['page_title'] = "Update: Home Page";
		$data['menu'] = 'homepage';
		$this->template('admin/homepage', $data);
	}
	public function services()
	{
		$user = $this->check_login();
		$data['title'] = "Admin Panel";
		$data['page_title'] = 'Services';
		$data['menu'] = 'services';
		$data['services'] = $this->model->services();
		$this->template('admin/services', $data);
	}
	public function locations($status)
	{
		$user = $this->check_login();
		$data['title'] = "Admin Panel";
		if ($status == 1) {
			$data['page_title'] = 'Active Locations';
		}
		else if ($status == 0) {
			$data['page_title'] = 'Inactive Locations';
		}
		else{
			$data['page_title'] = 'All Locations';
		}
		$data['menu'] = 'locations_'.$status;
		$data['locations'] = $this->model->locations($status);
		$this->template('admin/locations', $data);
	}
	public function slider()
	{
		$user = $this->check_login();
		$data['title'] = "Admin Panel";
		$data['page_title'] = 'Slider';
		$data['menu'] = 'slider';
		$data['slider'] = $this->model->slider();
		$this->template('admin/slider', $data);
	}
	public function testimonials()
	{
		$user = $this->check_login();
		$data['title'] = "Admin Panel";
		$data['page_title'] = 'Testimonials';
		$data['menu'] = 'testimonials';
		$data['testimonials'] = $this->model->testimonials();
		$this->template('admin/testimonials', $data);
	}
	public function blog()
	{
		$user = $this->check_login();
		$data['title'] = "Admin Panel";
		$data['page_title'] = 'All Posts';
		$data['menu'] = 'blog';
		$data['blog'] = $this->model->blog(0);
		$this->template('admin/blog', $data);
	}
	public function pages()
	{
		$user = $this->check_login();
		$data['title'] = "Admin Panel";
		$data['page_title'] = 'All Pages';
		$data['menu'] = 'pages';
		$data['pages'] = $this->model->pages();
		$this->template('admin/pages', $data);
	}
	public function faqs()
	{
		$user = $this->check_login();
		$data['title'] = "Admin Panel";
		$data['page_title'] = 'All FAQs';
		$data['menu'] = 'faqs';
		$data['faqs'] = $this->model->faqs();
		$this->template('admin/faqs', $data);
	}
	public function features()
	{
		$user = $this->check_login();
		$data['title'] = "Admin Panel";
		$data['page_title'] = 'All Features';
		$data['menu'] = 'features';
		$data['features'] = $this->model->features();
		$this->template('admin/features', $data);
	}
	public function team()
	{
		$user = $this->check_login();
		$data['title'] = "Admin Panel";
		$data['page_title'] = 'Team';
		$data['menu'] = 'team';
		$data['team'] = $this->model->team();
		$this->template('admin/team', $data);
	}
	public function contact_forms($status)
	{
		$user = $this->check_login();
		$data['title'] = "Admin Panel";
		if ($status == '0') {
			$data['page_title'] = 'New Contact Forms';
		}
		else{
			$data['page_title'] = 'Seen Contact Forms';
		}
		$data['menu'] = 'contact_forms_'.$status;
		$data['contact_forms'] = $this->model->contact_forms($status);
		$this->template('admin/contact_forms', $data);
	}
	/**********************************************
	*	starting Add functions from here for:
	*	company, News&Events, Home, Collection, Albums And Photo 	************************************************/

	public function add_service()
	{
		$user = $this->check_login();
		$data['page_title'] = 'Add Service';
		$data['menu'] = 'add_service';
		$data['parents'] = $this->model->parents();
		$data['msg_code'] = isset($_GET['msg']) && $_GET['msg'] != '' ? $_GET['msg'] : FALSE;
		$data['error'] = isset($_GET['error']) && $_GET['error'] != '' ? 'error' : 'correct';
		$this->template('admin/add_service', $data);
	}
	public function add_location()
	{
		$user = $this->check_login();
		$data['page_title'] = 'Add Location';
		$data['menu'] = 'add_location';
		$data['services'] = $this->model->services();
		$data['states'] = $this->model->get_states(231);
		$data['msg_code'] = isset($_GET['msg']) && $_GET['msg'] != '' ? $_GET['msg'] : FALSE;
		$data['error'] = isset($_GET['error']) && $_GET['error'] != '' ? 'error' : 'correct';
		$this->template('admin/add_location', $data);
	}
	public function add_testimonial()
	{
		$user = $this->check_login();
		$data['page_title'] = 'Add Testimonial';
		$data['menu'] = 'testimonials';
		$this->template('admin/add_testimonial', $data);
	}
	public function add_blog()
	{
		$user = $this->check_login();
		$data['page_title'] = 'Add Blog Post';
		$data['menu'] = 'blog';
		$this->template('admin/add_blog', $data);
	}
	public function add_faq()
	{
		$user = $this->check_login();
		$data['page_title'] = 'Add FAQ';
		$data['menu'] = 'faq';
		$this->template('admin/add_faq', $data);
	}
	public function add_feature()
	{
		$user = $this->check_login();
		$data['page_title'] = 'Add Feature';
		$data['menu'] = 'features';
		$this->template('admin/add_feature', $data);
	}
	public function add_team()
	{
		$user = $this->check_login();
		$data['page_title'] = 'Add Team Member';
		$data['menu'] = 'team';
		$this->template('admin/add_team', $data);
	}
	public function add_slider()
	{
		$user = $this->check_login();
		$data['page_title'] = 'Add Slider';
		$data['menu'] = 'slider';
		$this->template('admin/add_slider', $data);
	}
	/**********************************************
	*	starting insert functions from here for:
	*	company, News&Events, Home, Collection, Albums And Photo 	************************************************/

	public function post_slider()
	{
		$user = $this->check_login();
		$this->db->insert("slider", $_POST);
		redirect("admin/slider/?msg=Slider Added!");
	}
	public function post_service()
	{
		$user = $this->check_login();
		$resp = $this->db->insert("service", $_POST);
		redirect("admin/services/all/?msg=Service Added!");
	}
	public function post_location()
	{
		$user = $this->check_login();
		$_POST['services'] = implode(',', $_POST['services']);
		$resp = $this->db->insert("location", $_POST);
		redirect("admin/locations/".$_POST['status']."/?msg=Location Added!");
	}
	public function post_testimonial()
	{
		$user = $this->check_login();
		$resp = $this->db->insert("testimonial", $_POST);
		redirect("admin/add-testimonial/?msg=Testimonial Added!");
	}
	public function post_blog()
	{
		$user = $this->check_login();
		$resp = $this->db->insert("blog", $_POST);
		redirect("admin/blog/?msg=Blog Post Added!");
	}
	public function post_faq()
	{
		$user = $this->check_login();
		$resp = $this->db->insert("faq", $_POST);
		redirect("admin/add-faq/?msg=FAQ Added!");
	}
	public function post_feature()
	{
		$user = $this->check_login();
		$resp = $this->db->insert("feature", $_POST);
		redirect("admin/add-feature/?msg=Feature Added!");
	}
	public function post_team()
	{
		$user = $this->check_login();
		$resp = $this->db->insert("team", $_POST);
		redirect("admin/add-team/?msg=Team Member Added!");
	}
	public function post_photos()
	{
		$user = $this->check_login();
		foreach($_FILES["image"]["tmp_name"] as $key => $img) {

			$_FILES['file']['name']       = $_FILES['image']['name'][$key];
            $_FILES['file']['type']       = $_FILES['image']['type'][$key];
            $_FILES['file']['tmp_name']   = $_FILES['image']['tmp_name'][$key];
            $_FILES['file']['error']      = $_FILES['image']['error'][$key];
            $_FILES['file']['size']       = $_FILES['image']['size'][$key];

			$config['upload_path'] = 'uploads/';
	    	$config['allowed_types'] = 'jpg|png|jpeg|PNG|JPEG|JPG';
	    	$config['encrypt_name'] = TRUE;
	    	$ext = pathinfo($_FILES["file"]['name'], PATHINFO_EXTENSION);
			$new_name = md5(time().$_FILES["file"]['name']).'.'.$ext;
			$config['file_name'] = $new_name;
	    	$resp = $this->load->library('upload', $config);
	    	if ($resp) {
	        	$this->upload->do_upload('file');
				$insert['img'] = $this->upload->data()['file_name'];
				$this->db->insert("slider", $insert);
	    	}
		}
		redirect("admin/slider/?msg=Slide Added!");
	}
	
	/**********************************************
	*	starting edit functions from here for:
	*	company, News&Events, Home, Collection, Albums And Photo
	************************************************/
	
	public function edit_slider()
	{
		$user = $this->check_login();
		$new_id = isset($_GET['id']) ? $_GET['id'] : 0;
		if($new_id < 1) 
		{
			echo ("Wrong Slider ID has been passed");
		}
		else 
		{
			$data['q'] = $this->model->get_slider_byid($new_id);
			$data['page_title'] = "Edit: Slider";
			$data['mode'] = "edit";
			$data['menu'] = 'slider';
			$this->template('admin/add_slider', $data);
		}
	}
	public function edit_service()
	{
		$user = $this->check_login();
		$new_id = isset($_GET['id']) ? $_GET['id'] : 0;
		if($new_id < 1) 
		{
			echo ("Wrong Service ID has been passed");
		}
		else 
		{
			$data['q'] = $this->model->get_service_byid($new_id);
			$data['parents'] = $this->model->parents();
			$data['page_title'] = "Edit: Service";
			$data['mode'] = "edit";
			$data['signin'] = FALSE;
			$data['menu'] = 'services';
			$this->template('admin/add_service', $data);
		}
	}
	public function edit_location()
	{
		$user = $this->check_login();
		$new_id = isset($_GET['id']) ? $_GET['id'] : 0;
		if($new_id < 1) 
		{
			echo ("Wrong Location ID has been passed");
		}
		else 
		{
			$data['q'] = $this->model->get_location_byid($new_id);
			$data['services'] = $this->model->services();
			$data['states'] = $this->model->get_states(231);
			$data['cities'] = $this->model->get_cities($data['q']['state_id']);
			$data['page_title'] = "Edit: Location";
			$data['mode'] = "edit";
			$data['signin'] = FALSE;
			$this->template('admin/add_location', $data);
		}
	}
	public function edit_testimonial()
	{
		$user = $this->check_login();
		$new_id = isset($_GET['id']) ? $_GET['id'] : 0;
		if($new_id < 1) 
		{
			echo ("Wrong testimonial ID has been passed");
		}
		else 
		{
			$data['q'] = $this->model->get_testimonial_byid($new_id);
			$data['page_title'] = "Edit: Testimonial";
			$data['mode'] = "edit";
			$data['menu'] = 'testimonials';
			$this->template('admin/add_testimonial', $data);
		}
	}
	public function edit_blog()
	{
		$user = $this->check_login();
		$new_id = isset($_GET['id']) ? $_GET['id'] : 0;
		if($new_id < 1) 
		{
			echo ("Wrong Blog ID has been passed");
		}
		else 
		{
			$data['q'] = $this->model->get_blog_byid($new_id);
			$data['page_title'] = "Edit: Blog Post";
			$data['mode'] = "edit";
			$data['menu'] = 'blog';
			$this->template('admin/add_blog', $data);
		}
	}
	public function edit_page()
	{
		$user = $this->check_login();
		$new_id = isset($_GET['id']) ? $_GET['id'] : 0;
		if($new_id < 1) 
		{
			echo ("Wrong Page ID has been passed");
		}
		else 
		{
			$data['q'] = $this->model->get_page_byid($new_id);
			$data['page_title'] = "Edit: Page";
			$data['mode'] = "edit";
			$data['menu'] = 'pages';
			$this->template('admin/add_page', $data);
		}
	}
	public function edit_faq()
	{
		$user = $this->check_login();
		$new_id = isset($_GET['id']) ? $_GET['id'] : 0;
		if($new_id < 1) 
		{
			echo ("Wrong FAQ ID has been passed");
		}
		else 
		{
			$data['q'] = $this->model->get_faq_byid($new_id);
			$data['page_title'] = "Edit: FAQ";
			$data['mode'] = "edit";
			$data['menu'] = 'faqs';
			$this->template('admin/add_faq', $data);
		}
	}
	public function edit_feature()
	{
		$user = $this->check_login();
		$new_id = isset($_GET['id']) ? $_GET['id'] : 0;
		if($new_id < 1) 
		{
			echo ("Wrong Feature ID has been passed");
		}
		else 
		{
			$data['q'] = $this->model->get_feature_byid($new_id);
			$data['page_title'] = "Edit: Feature";
			$data['mode'] = "edit";
			$data['menu'] = 'features';
			$this->template('admin/add_feature', $data);
		}
	}
	public function edit_team()
	{
		$user = $this->check_login();
		$new_id = isset($_GET['id']) ? $_GET['id'] : 0;
		if($new_id < 1) 
		{
			echo ("Wrong Team Member ID has been passed");
		}
		else 
		{
			$data['q'] = $this->model->get_team_byid($new_id);
			$data['page_title'] = "Edit: Team Member";
			$data['mode'] = "edit";
			$data['menu'] = 'team';
			$this->template('admin/add_team', $data);
		}
	}
	/**********************************************
	*	starting update functions from here for:
	*	company, News&Events, Home, Collection, Albums And Photo 	
	************************************************/
	public function update_setting()
	{
		$user = $this->check_login();
		$aid = $_POST['aid'];
		unset($_POST['aid'], $_POST['mode'], $_POST['security']);
		$this->db->where("setting_id",1);
		$data = $this->db->update("setting", $_POST);
		if($data)
		{
			redirect("admin/setting/?msg=Edited Setting");
		}
		else
		{
			redirect("admin/setting/?error=1&msg=Error occured while Editing Setting");
		}
	}
	public function update_slider()
	{
		$user = $this->check_login();
		$aid = $_POST['aid'];
		// $_POST = add_slashes_recursive($_POST);
		unset($_POST['aid'], $_POST['mode'], $_POST['security']);
		$this->db->where("slider_id",$aid);
		$data = $this->db->update("slider", $_POST);
		if($data)
		{
			redirect("admin/slider/?msg=Edited Slider");
		}
		else
		{
			redirect("admin/slider/?error=1&msg=Error occured while Editing Slider");
		}
	}
	public function update_homepage()
	{
		$user = $this->check_login();
		$aid = $_POST['aid'];
		unset($_POST['aid'], $_POST['mode'], $_POST['security']);
		$this->db->where("homepage_id",1);
		$data = $this->db->update("homepage", $_POST);
		if($data)
		{
			redirect("admin/homepage/?msg=Edited Home Page");
		}
		else
		{
			redirect("admin/homepage/?error=1&msg=Error occured while Editing Home Page");
		}
	}
	public function update_service()
	{
		$user = $this->check_login();
		$aid = $_POST['aid'];
		unset($_POST['aid'], $_POST['mode'], $_POST['security']);
		$this->db->where("service_id",$aid);
		$data = $this->db->update("service", $_POST);
		if($data)
		{
			redirect("admin/services/all?msg=Edited Service");
		}
		else
		{
			redirect("admin/services/all?error=1&msg=Error occured while Editing Service");
		}
	}
	public function update_location()
	{
		$user = $this->check_login();
		$aid = $_POST['aid'];
		unset($_POST['aid'], $_POST['mode'], $_POST['security']);
		$_POST['services'] = implode(',', $_POST['services']);
		$this->db->where("location_id",$aid);
		$data = $this->db->update("location", $_POST);
		if($data)
		{
			redirect("admin/locations/".$_POST['status']."?msg=Edited Location");
		}
		else
		{
			redirect("admin/locations/".$_POST['status']."?error=1&msg=Error occured while Editing Location");
		}
	}
	public function update_testimonial()
	{
		$user = $this->check_login();
		$aid = $_POST['aid'];
		unset($_POST['aid'], $_POST['mode'], $_POST['security']);
		$this->db->where("testimonial_id",$aid);
		$data = $this->db->update("testimonial", $_POST);
		if($data)
		{
			redirect("admin/testimonials?msg=Edited Testimonial");
		}
		else
		{
			redirect("admin/testimonials?error=1&msg=Error occured while Editing Testimonial");
		}
	}
	public function update_blog()
	{
		$user = $this->check_login();
		$aid = $_POST['aid'];
		unset($_POST['aid'], $_POST['mode'], $_POST['security']);
		$_POST['updated_by'] = $user['admin_id'];
		$_POST['updated_at'] = date('Y-m-d H:i:s');
		$this->db->where("blog_id",$aid);
		$data = $this->db->update("blog", $_POST);
		if($data)
		{
			redirect("admin/blog/?msg=Edited Blog Post");
		}
		else
		{
			redirect("admin/blog/?error=1&msg=Error occured while Editing Blog Post");
		}
	}
	public function update_page()
	{
		$user = $this->check_login();
		$aid = $_POST['aid'];
		unset($_POST['aid'], $_POST['mode'], $_POST['security']);
		$this->db->where("page_id",$aid);
		$data = $this->db->update("page", $_POST);
		if($data)
		{
			redirect("admin/pages/?msg=Edited Page");
		}
		else
		{
			redirect("admin/pages/?error=1&msg=Error occured while Editing Page");
		}
	}
	public function update_team()
	{
		$user = $this->check_login();
		$aid = $_POST['aid'];
		unset($_POST['aid'], $_POST['mode'], $_POST['security']);
		$this->db->where("team_id",$aid);
		$data = $this->db->update("team", $_POST);
		if($data)
		{
			redirect("admin/team?msg=Edited Team Member");
		}
		else
		{
			redirect("admin/team?error=1&msg=Error occured while Editing Team Member");
		}
	}
	public function update_faq()
	{
		$user = $this->check_login();
		$aid = $_POST['aid'];
		unset($_POST['aid'], $_POST['mode'], $_POST['security']);
		$this->db->where("faq_id",$aid);
		$data = $this->db->update("faq", $_POST);
		if($data)
		{
			redirect("admin/faqs?msg=Edited FAQ");
		}
		else
		{
			redirect("admin/faqs?error=1&msg=Error occured while Editing FAQ");
		}
	}
	public function update_feature()
	{
		$user = $this->check_login();
		$aid = $_POST['aid'];
		unset($_POST['aid'], $_POST['mode'], $_POST['security']);
		$this->db->where("feature_id",$aid);
		$data = $this->db->update("feature", $_POST);
		if($data)
		{
			redirect("admin/features?msg=Edited Feature");
		}
		else
		{
			redirect("admin/features?error=1&msg=Error occured while Editing Feature");
		}
	}
	/**********************************************
	*	starting delete functions from here for:
	*	company, News&Events, Home, Collection, Albums And Photo 	
	************************************************/
	public function delete_service()
	{
		$user = $this->check_login();
		$photo = $this->model->get_row("SELECT `image` FROM `service` WHERE `service_id` = '".$_GET['id']."';");
		$this->db->where('service_id', $_GET['id']);
		$resp = $this->db->delete('service');
		if($resp)
		{
			unlink('uploads/'.$photo['image']);
			redirect("admin/services/all/?msg=Service has Deleted");
		}
		else
		{
			redirect("admin/services/all/?error=1&msg=Service has failed to delete. Try Again!");
		}
	}
	public function delete_location()
	{
		$user = $this->check_login();
		$photo = $this->model->get_row("SELECT `image` FROM `location` WHERE `location_id` = '".$_GET['id']."';");
		$this->db->where('location_id', $_GET['id']);
		$resp = $this->db->delete('location');
		if($resp)
		{
			unlink('uploads/'.$photo['image']);
			redirect("admin/locations/all/?msg=Location has Deleted");
		}
		else
		{
			redirect("admin/locations/all/?error=1&msg=Location has failed to delete. Try Again!");
		}
	}
	public function delete_slider()
	{
		$user = $this->check_login();
		$photo = $this->model->get_row("SELECT `img` FROM `slider` WHERE `slider_id` = '".$_GET['id']."';");
		$this->db->where('slider_id', $_GET['id']);
		$resp = $this->db->delete('slider');
		if($resp)
		{
			unlink('uploads/'.$photo['img']);
			redirect("admin/slider?msg=Slide has Deleted");
		}
		else
		{
			redirect("admin/slider?error=1&msg=Slide has failed to delete. Try Again!");
		}
	}
	public function delete_testimonial()
	{
		$user = $this->check_login();
		$photo = $this->model->get_row("SELECT `img` FROM `testimonial` WHERE `testimonial_id` = '".$_GET['id']."';");
		$this->db->where('testimonial_id', $_GET['id']);
		$resp = $this->db->delete('testimonial');
		if($resp)
		{
			unlink('uploads/'.$photo['img']);
			redirect("admin/testimonials?msg=Testimonial has Deleted");
		}
		else
		{
			redirect("admin/testimonials?error=1&msg=Testimonial has failed to delete. Try Again!");
		}
	}
	public function delete_blog()
	{
		$user = $this->check_login();
		$photo = $this->model->get_row("SELECT `image` FROM `blog` WHERE `blog_id` = '".$_GET['id']."';");
		$this->db->where('blog_id', $_GET['id']);
		$resp = $this->db->delete('blog');
		if($resp)
		{
			unlink('uploads/'.$photo['image']);
			redirect("admin/blog/?msg=Blog has Deleted");
		}
		else
		{
			redirect("admin/blog/?error=1&msg=Blog has failed to delete. Try Again!");
		}
	}
	public function delete_faq()
	{
		$user = $this->check_login();
		$this->db->where('faq_id', $_GET['id']);
		$resp = $this->db->delete('faq');
		if($resp)
		{
			redirect("admin/faqs/?msg=FAQ has Deleted");
		}
		else
		{
			redirect("admin/faqs/?error=1&msg=FAQ has failed to delete. Try Again!");
		}
	}
	public function delete_feature()
	{
		$user = $this->check_login();
		$this->db->where('feature_id', $_GET['id']);
		$resp = $this->db->delete('feature');
		if($resp)
		{
			redirect("admin/features/?msg=Feature has Deleted");
		}
		else
		{
			redirect("admin/features/?error=1&msg=Feature has failed to delete. Try Again!");
		}
	}
	public function delete_team()
	{
		$user = $this->check_login();
		$photo = $this->model->get_row("SELECT `img` FROM `team` WHERE `team_id` = '".$_GET['id']."';");
		$this->db->where('team_id', $_GET['id']);
		$resp = $this->db->delete('team');
		if($resp)
		{
			unlink('uploads/'.$photo['img']);
			redirect("admin/team?msg=Team Member has Deleted");
		}
		else
		{
			redirect("admin/team?error=1&msg=Team Member has failed to delete. Try Again!");
		}
	}
	/**
	*

	@AJAX PHOTO
		
	*
	*/
	public function post_photo_ajax()
	{
		$user = $this->check_login();
		if ($_FILES){
			$config['upload_path'] = 'uploads/';
        	$config['allowed_types'] = 'gif|jpeg|jpg|png|PNG|JPEG|JPG|GIF';
        	$config['encrypt_name'] = TRUE;
        	$ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
			$new_name = md5(time().$_FILES['img']['name']).'.'.$ext;
			$config['file_name'] = $new_name;
			$this->load->library('upload', $config);
        	if ($this->upload->do_upload('img'))
        	{
	        	$img = $this->upload->data()['file_name'];
	        	echo json_encode(array("status"=>true,"data"=>$img));
        	}
        	else{
        		#error
	        	echo json_encode(array("status"=>false));
        	}

		}
		else{
			redirect('admin/logout');
		}
	}
	/**
	*

	@AJAX
		
	*
	*/
	public function get_city_by_state_ajax()
	{
		$user = $this->check_login();
		if ($_POST) {
			$city = $this->model->get_cities($_POST['id']);
			if ($city) {
				$resp = '<option value="">Select City</option>';
				foreach ($city as $ckey => $c) {
					$resp .= '<option value="'.$c['city_id'].'">'.$c['name'].'</option>';
				}
				echo json_encode(array("status"=>true,"type"=>"city","data"=>$resp));
			}
			else{
				echo json_encode(array("status"=>false,"msg"=>"No data found"));
			}
		}
		else {
			redirect('admin/logout');
		}
	}
	public function get_location_facilities()
	{
		$user = $this->check_login();
		$resp = $this->model->location_facilities($_POST['id']);
		$html = '';
		foreach ($resp as $key => $q) {
			$html .= '<tr>
					    <td>'.$q['heading'].'</td>
					    <td>'.$q['title'].'</td>
					    <td><a href="javascript://" data-id="'.$q['location_facility_id'].'" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row btnDelete"><i class="icon md-delete" aria-hidden="true"></i></a></td>
					</tr>';
		}
		echo json_encode(array("status"=>true,"html"=>$html));
	}
	public function post_location_facility()
	{
		$user = $this->check_login();
		parse_str($_POST['data'],$post);
		$this->db->insert('location_facility',$post);
		$id = $this->db->insert_id();
		$q = $this->model->get_location_facility_byid($id);
		$html .= '<tr>
				    <td>'.$q['heading'].'</td>
				    <td>'.$q['title'].'</td>
				    <td><a href="javascript://" data-id="'.$q['location_facility_id'].'" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row btnDelete"><i class="icon md-delete" aria-hidden="true"></i></a></td>
				</tr>';
		echo json_encode(array("status"=>true,"html"=>$html,"msg"=>"Added."));
	}
	public function delete_location_facility()
	{
		$user = $this->check_login();
		$this->db->where('location_facility_id',$_POST['id'])->delete('location_facility');
		echo json_encode(array("status"=>true,"msg"=>"Deleted."));
	}
	public function change_form_status()
	{
		$user = $this->check_login();
		$this->db
		->where('contact_form_id',$_POST['id'])
		->set('status',$_POST['status'])
		->update('contact_form');
		echo json_encode(array("status"=>true,"msg"=>"status changed."));
	}
}
