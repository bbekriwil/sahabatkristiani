<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function index()
	{
            $header['title']    = "My Account";
            $data['header']     = $header;
            $this->load->view('myaccount',$data);
	}
}

/* End of file account.php */
/* Location: ./application/controllers/account.php */