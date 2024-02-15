<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hildes extends CI_Controller {

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
	**/

	public function __construct()
	{
	        parent::__construct();
	        error_reporting(0);
	        $this->load->database();
	        $this->load->model('Model_functions','model');
	        $this->load->helper(array('form', 'url', 'dall'));
	        $this->load->library('session');
	}

	/**
	*

		@HATH NA LAIE

	*
	*/
	public function template($page = '', $data = '')
	{
		$data['setting'] = $this->model->setting(1);
		$data['parents'] = $this->model->parents();
		$data['services'] = $this->model->services();
		$data['locations'] = $this->model->locations(1);
		$this->load->view('header',$data);
		$this->load->view($page,$data);
		$this->load->view('footer',$data);
	}
	/**
	*

		@START

	*
	*/
	public function index()
	{
		$data = page(1);
		$data['homepage'] = $this->model->homepage(1);
		$data['slider'] = $this->model->slider();
		$data['testimonials'] = $this->model->testimonials();
		$data['blog'] = $this->model->blog(2);
		$data['teams'] = $this->model->team();
		$data['featured'] = $this->model->featured();
		$data['features'] = $this->model->features();
		$data['active_menu'] = 'home';
		$this->template('index',$data);
	}
	public function faqs()
	{
		$data = page(5);
		$data['active_menu'] = 'faqs';
		$data['faqs'] = $this->model->faqs();
		$this->template('faqs', $data);
	}
	public function about_us()
	{
		$data = page(7);
		$data['teams'] = $this->model->team();
		$data['active_menu'] = 'about_us';
		$this->template('about_us', $data);
	}
	public function privacy()
	{
		$data = page(8);
		$data['active_menu'] = 'privacy';
		$this->template('page', $data);
	}
	public function terms()
	{
		$data = page(9);
		$data['active_menu'] = 'terms';
		$this->template('page', $data);
	}
	public function contact_us()
	{
		$data = page(11);
		$data['active_menu'] = 'contact_us';
		$this->template('contact_us', $data);
	}
	public function covid_19_services()
	{
		$data = page(16);
		$data['active_menu'] = 'covid_19_services';
		$this->template('page', $data);
	}
	public function employer_resources()
	{
		$data = page(17);
		$data['active_menu'] = 'employer_resources';
		$this->template('page', $data);
	}
	public function careers()
	{
		$data = page(18);
		$data['active_menu'] = 'careers';
		$this->template('careers', $data);
	}
	public function blog()
	{
		$data = page(6);
		$data['active_menu'] = 'blog';
		$blog['blog'] = $this->model->blog(0);
		if ($blog['blog']) {
			$data['blog'] = $this->load->view('html/blog',$blog,true);
		}
		else{
			$data['blog'] = false;
		}
		$this->template('blog', $data);
	}
	public function blog_detail($slug)
	{
		$data['post'] = $this->model->get_blog_post($slug);
		$data['meta_title'] = $data['post']['meta_title'];
		$data['meta_key'] = $data['post']['meta_key'];
		$data['meta_desc'] = $data['post']['meta_desc'];
		$data['popular'] = $this->model->get_results("SELECT `title`,`slug`,`image`,`at` FROM `blog` WHERE `blog_id` != '".$data['post']['blog_id']."' ORDER BY RAND() LIMIT 6;");
		$data['active_menu'] = '';
		$this->template('blog_detail', $data, 'blog_detail');
	}
	public function services()
	{
		$data = page(2);
		$data['features'] = $this->model->features();
		$data['active_menu'] = 'services';
		$this->template('services', $data);
	}
	public function service($slug)
	{
		$data['service'] = $this->model->get_service_byslug($slug);
		$data['meta_title'] = $data['service']['meta_title'];
		$data['meta_key'] = $data['service']['meta_key'];
		$data['meta_desc'] = $data['service']['meta_desc'];
		$data['active_menu'] = 'services';
		$this->template('service', $data);
	}
	public function locations()
	{
		$data = page(19);
		$data['active_menu'] = 'locations';
		$this->template('locations', $data);
	}
	public function location($slug)
	{
		$data['location'] = $this->model->get_location_byslug($slug);
		$data['facilities'] = $this->model->location_facilities($data['location']['location_id']);
		$data['meta_title'] = $data['location']['meta_title'];
		$data['meta_key'] = $data['location']['meta_key'];
		$data['meta_desc'] = $data['location']['meta_desc'];
		$data['active_menu'] = 'locations';
		$this->template('location', $data);
	}
	/**
	*

		@FORMS

	*
	*/
	public function submit_contact_form()
	{
		$this->db->insert('contact_form', $_POST);
		echo true;
	}
	/**
	*

		@TEST

	*
	*/
	public function test()
	{
		die;
		$query = $this->db->query('UPDATE `phase` SET `count`=`count`+1 WHERE `phase_id` = 1');
	}

}
