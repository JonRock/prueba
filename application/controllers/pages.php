<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// Oh, oh... no tenemos una pagina para esto!
			show_404();
		}
			$data['title'] = ucfirst($page); // Capitaliza la primera letra
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);

		}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
// controller y luego tabulacion