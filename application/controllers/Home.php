<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_CONTROLLER {

    public function index()
	{

		$this->load->model("courses_model"); 
    $data["courses"]=$this->courses_model->getCourse(); 

		$this->load->view('sections/header');
		$this->load->view('templates/activity');
		$this->load->view('templates/featuredcourses',$data);
		$this->load->view('templates/whychoose');
		$this->load->view('sections/footer');
    }
    



	public function courses()
  {
    $this->load->model("courses_model"); 
    $data["courses"]=$this->courses_model->getCourse(); 

	$this->load->view('sections/header');
    $this->load->view("templates/featuredcourses",$data);
	$this->load->view('sections/footer');
}
   

    public function about()
	{
		$this->load->view('sections/header');
		$this->load->view('about');
		$this->load->view('sections/footer');
	}
    public function contact()
	{
		$this->load->view('sections/header');
		$this->load->view('contact');
		$this->load->view('sections/footer');
	}




}