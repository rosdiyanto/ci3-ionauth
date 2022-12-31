<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Reseller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$user = $this->ion_auth->get_users_groups()->row('name');

		if (!$this->ion_auth->logged_in()){
			redirect('auth/login','refresh');
		}else if($user != 'resellers'){
			redirect('auth/login','refresh');
		}
    }

    public function index()
    {
		$user = $this->ion_auth->get_users_groups()->row('name');
		echo "hai reseller : ".$user;
    }
}

/* End of file Reseller.php and path \application\controllers\Reseller.php */
