<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$data['title'] = "This Is Title";
		$data['content'] = "This Is The Contents - STMIK";
		$this->load->view('blog_view', $data);
	}
}
