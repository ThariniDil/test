<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');                    /***** LOADING HELPER TO AVOID PHP ERROR ****/
		$this->load->model('Welcome_model','welcome'); /* LOADING MODEL * Welcome_model as welcome */
	}


	/**************************  START FETCH OR VIEW FORM DATA ***************/
	public function index()
	{
		$this->data['view_data']= $this->welcome->view_data();
	    $this->load->view('welcome_message', $this->data, FALSE);
	}
	/****************************  END FETCH OR VIEW FORM DATA ***************/


	/****************************  START OPEN ADD FORM FILE ******************/
	public function add_data()
	{
		$this->load->view('add');
	}
	/****************************  END OPEN ADD FORM FILE ********************/

    
    /****************************  START INSERT FORM DATA ********************/
    public function submit_data()
    {
    $data = array('cid'                        => $this->input->post('cid'),
			      'title'                      => $this->input->post('title'),
			      'cperson'                    => $this->input->post('cperson'),
			      'des'                        => $this->input->post('des'),
				  'tel'                        => $this->input->post('tel'),
				  'mobile'                     => $this->input->post('mobile'),
				  'fax'                        => $this->input->post('fax'),
				  'email'                      => $this->input->post('email'));
    
    $insert = $this->welcome->insert_data($data);
    $this->session->set_flashdata('message', 'Your data inserted Successfully..');
    redirect('welcome/index');
    }
    /****************************  END INSERT FORM DATA ************************/


    /****************************  START FETCH OR VIEW FORM DATA ***************/
    public function view_data()
    {
    $this->data['view_data']= $this->welcome->view_data();
    $this->load->view('welcome_message', $this->data, FALSE);
    }
    /****************************  END FETCH OR VIEW FORM DATA ***************/

    
    /****************************  START OPEN EDIT FORM WITH DATA *************/
    public function edit_data($id)
    {
    $this->data['edit_data']= $this->welcome->edit_data($id);
    $this->load->view('edit', $this->data, FALSE);
    }
    /****************************  END OPEN EDIT FORM WITH DATA ***************/


    /****************************  START UPDATE DATA *************************/
    public function update_data($id)
    {
    $data = array('cid'                        => $this->input->post('cid'),
			      'title'                      => $this->input->post('title'),
			      'cperson'                    => $this->input->post('cperson'),
			      'des'                        => $this->input->post('des'),
				  'tel'                        => $this->input->post('tel'),
				  'mobile'                     => $this->input->post('mobile'),
				  'fax'                        => $this->input->post('fax'),
				  'email'                      => $this->input->post('email'),
			      );
    $this->db->where('id', $id);
    $this->db->update('customer_contacts', $data);
    $this->session->set_flashdata('message', 'Your data updated Successfully..');
    redirect('welcome/index');
    }
    /****************************  END UPDATE DATA ****************************/


    /****************************  START DELETE DATA **************************/
    public function delete_data($id)
    {  
    $this->db->where('id', $id);
    $this->db->delete('customer_contacts');
    $this->session->set_flashdata('message', 'Your data deleted Successfully..');
    redirect('welcome/index');
    }
    /****************************  END DELETE DATA ***************************/

}
