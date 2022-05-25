<?php 
class Template{
	protected $_ci; 
 	function __construct() {
		$this->_ci = &get_instance(); 
	}

	function views($template = NULL, $data = NULL) { 
		if ($template != NULL) {
			$data['head'] 			= $this->_ci->load->view('admin/_template/head', $data, TRUE); 
			$data['navbar'] 		= $this->_ci->load->view('admin/_template/navbar', $data, TRUE); 
			$data['sidebar']		= $this->_ci->load->view('admin/_template/sidebar', $data, TRUE); 
			$data['konten'] 		= $this->_ci->load->view($template, $data, TRUE); 
			$data['content'] 		= $this->_ci->load->view('admin/_template/content', $data, TRUE); 
			$data['footer'] 		= $this->_ci->load->view('admin/_template/footer', $data, TRUE); 
			echo $data['template']  = $this->_ci->load->view('admin/_template/template', $data, TRUE); 
		}
	}
	}
?>