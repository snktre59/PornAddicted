<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {
	
	public function categories()
	{
        
        $this->layout->view('videos/categories', $data);
	}
}