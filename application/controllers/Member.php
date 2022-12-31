<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$user = $this->ion_auth->get_users_groups()->row('name');

		if (!$this->ion_auth->logged_in()){
			redirect('auth/login','refresh');
		}else if($user != 'members'){
			redirect('auth/login','refresh');
		}
    }

    public function index()
    {
		$user = $this->ion_auth->get_users_groups()->row('name');
		echo "hai member : ".$user;
    }
}

/* End of file Member.php and path \application\controllers\Member.php */
