<?php
class Controller{
	//public variables
	public $load;
	public $model;
	
	//controller class
	function __construct($pageURI)
	{
		
		$this->load = new Load();
		$this->model = new Model();
		// determine what page you're on
		$this->$pageURI();
	}
	//Homepage
	function home(){
		$data = null;
		$this->load->view('home',$data);
	}
	//Gallery Page
	function gallery(){
		$data = null;
		$this->load->view('modelpage',$data);
	}
	//References Page
	function references(){
		$data = null;
		$this->load->view('references',$data);
	}
	//Admin page
	function admin(){
		$data = null;
		$this->load->view('admin',$data);
	}
	//Build Database
	function dbBuildTable()
	{
		$data = $this->model->dbCreateTable();
		$this->load->view('admin', $data);
	}
	
	//Insert data in Database
	function dbInsertData()
	{
		$data = $this->model->dbInsertData();
		$this->load->view('admin', $data);
	}
	
	//Get data from Database
	function dbGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('admin', $data);
	}
	
	//Delete all data in Database
	function dbDeleteData()
	{
		$data = $this->model->dbDeleteData();
		$this->load->view('admin', $data);
	}
	//Delete all data in Database
	function dbDeleteTable()
	{
		$data = $this->model->dbDeleteTable();
		$this->load->view('admin', $data);
	}
}

?>