<?php
class Pages extends CI_Controller {

    public function view()
    {
    	if(current_url() == base_url())
    	{
    		$page = 'home';
    	}
    	else {
    		$page = $this->uri->uri_string();
    	}
    	$patharray = explode('/', $page);
    	$title = end($patharray);
	    $data['title'] = ucfirst(str_replace('-', ' ',str_replace('_',' ',$title)));
      //local
      $data['public_folder'] = base_url() . 'public_html/';
      //production
      // $data['public_folder'] = base_url();
	    $this->load->view('templates/header', $data);
      $this->load->view('templates/slideshow', $data);
	    if($page == 'home') {
        //local
        // $localPath = 'C:\xampp\htdocs\dps_v3\dps_v3-abudhabi\public_html';
	    	// $data['imgDirSlide'] = scandir( FCPATH . 'img/slideshow');

        //production
        // $data['imgDirSlide'] = scandir( FCPATH . 'img/slideshow');


	    	$this->load->view('pages/'.$page, $data);

	    }
	    else {
	  	//   	switch ($i) {
			//     case "apple":
			//         echo "i is apple";
			//         break;
			//     case "bar":
			//         echo "i is bar";
			//         break;
			//     case "cake":
			//         echo "i is cake";
			//         break;
			// }
			switch ($title) {
        case 'national_day_2015':
				case 'national_day_2014':
				case 'graduation_2014':
				case 'elementary_sports_day_2014':
				case 'kg_sports_day_2014':
				case 'kg_graduation_2015':
        case 'eid_al_adha_al_mubarak_2015':
					$data['galleryImgDir'] = scandir(FCPATH . 'img/gallery/' . $title . '/thumbnail');
	    			$data['curPage'] = $title;
					break;
				default:
					# code...
					break;
			}
	    	// if($title == 'national_day_2014' || $title == 'graduation_2014')
	    	// {
	    	// 	$data['galleryImgDir'] = scandir(FCPATH . 'img/gallery/' . $title . '/thumbnail');
	    	// 	$data['curPage'] = $title;
	    	// }
	    	$this->load->view('pages/'.$page, $data);

	    }
      $this->load->view('templates/sidebar', $data);
	    $this->load->view('templates/footer', $data);

    }

    public function contact_us() {
    	$page = $this->uri->uri_string();
    	$patharray = explode('/', $page);
    	$title = end($patharray);
	    $data['title'] = ucfirst(str_replace('-', ' ',$title)); // Capitalize the first letter
	    $data['public_folder'] = base_url();

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<span class="error">- ', '</span>');

		$this->form_validation->set_rules('full-name', 'Full Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('comment', 'Comment', 'required');

		if ($this->form_validation->run() === FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('pages/contact-us');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/footer');

		}
		else {

			$this->load->library('email');

			$this->email->from($this->input->post('email', TRUE), $this->input->post('full-name', TRUE));
			$this->email->to('administration@dhafraschools.com');

			$this->email->subject('Questions/Feedback');
			$this->email->message($this->input->post('comment', TRUE));

			$this->email->send();

		}

	}

	public function download($file) {
		if (file_exists("files/$file")) {

			$this->load->helper('download');

			$data = file_get_contents("files/$file");

			force_download($file, $data);

		}
		else {

			$this->load->view('error_file');

		}
	}
}
