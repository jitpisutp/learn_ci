<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insertdata extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('member_model');
        }

	public function index()
	{
        $data['query']=$this->member_model->showdata8();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>'; 
        // exit;


		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('banner');
		$this->load->view('navbar');
        $this->load->view('insert_view2');
        $this->load->view('member_view', $data);
        $this->load->view('footer');
		$this->load->view('js');

	}

    public function edit($m_id)
	{
        $data['rsedit']=$this->member_model->read($m_id);

		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('banner');
		$this->load->view('navbar');
        $this->load->view('edit_view', $data);
        $this->load->view('footer');
		$this->load->view('js');

	}
    public function addingg()
	{
        $this->member_model->addmember();
        //redirect('','refresh');
	}
    public function addingg2()
	{
        $this->member_model->addmember2();
        //redirect('','refresh');
	}
    public function editdata()
	{
        //print_r($_POST);
        $this->member_model->editmember();
        redirect('','refresh');
	
	}
    public function del($m_id)
	{
        //print_r($_POST);
        $this->member_model->deldata($m_id);
        redirect('','refresh');
	
	}
    
}
    