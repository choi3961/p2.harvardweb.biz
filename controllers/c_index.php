<?php

class index_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
	} 
		
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_index_index');
			
		# Now set the <title> tag
			$this->template->title = "Hello World";
	
		# CSS/JS includes
			$client_files_head = Array("/css/main.css");
	    	$this->template->client_files_head = Utils::load_client_files($client_files_head);
	    	
	    	//$client_files_body = Array("project2");
	    	//$this->template->client_files_body = Utils::load_client_files($client_files_body);   
	      					     		
		# Render the view
			echo $this->template;
			//echo $client_files_head;
			//echo $this->template->client_files_head;
			print_r($this->template->client_files_head);



	} # End of method
	
	
} # End of class
