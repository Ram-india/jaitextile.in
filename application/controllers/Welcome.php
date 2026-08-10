<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header/header');
		$this->load->view('index');
		$this->load->view('header/ourclients');
		$this->load->view('header/footer');
	}
	public function about()
	{	
		$data['page']='about';
		$this->load->view('header/header');
		$this->load->view('about',$data);
		$this->load->view('header/ourclients');
		$this->load->view('header/footer');
	}
	public function yarndyeing()
	{	
		$data['page']='yarndyeing';
		$this->load->view('header/header');
		$this->load->view('yarndyeing',$data);
		$this->load->view('header/ourclients');
		$this->load->view('header/footer');
	}
	public function weaving()
	{	
		$data['page']='weaving';
		$this->load->view('header/header');
		$this->load->view('weaving',$data);
		$this->load->view('header/ourclients');
		$this->load->view('header/footer');
	}
	public function infra()
	{	
		$data['page']='infra';
		$this->load->view('header/header');
		$this->load->view('infra',$data);
		$this->load->view('header/ourclients');
		$this->load->view('header/footer');
	}
	public function products()
	{	
		$data['page']='products';
		$this->load->view('header/header');
		$this->load->view('products',$data);
		$this->load->view('header/ourclients');
		$this->load->view('header/footer');
	}
	public function recogintion()
	{	
		$data['page']='recogintion';
		$this->load->view('header/header');
		$this->load->view('recogintion',$data);
		$this->load->view('header/footer');
	}
	public function greenpolicy()
	{	
		$data['page']='greenpolicy';
		$this->load->view('header/header');
		$this->load->view('greenpolicy',$data);
		$this->load->view('header/ourclients');
		$this->load->view('header/footer');
	}
	public function careers()
	{	
		$data['page']='careers';
		$this->load->view('header/header');
		$this->load->view('careers',$data);
		$this->load->view('header/ourclients');
		$this->load->view('header/footer');
	}
	public function contactus()
	{	
		$data['page']='contact us';
		$this->load->view('header/header');
		$this->load->view('contact',$data);
		$this->load->view('header/ourclients');
		$this->load->view('header/footer');
	}
}
