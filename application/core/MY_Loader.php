<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * CodeIgniter-HMVC
 *
 * @package    CodeIgniter-HMVC
 * @author     N3Cr0N (N3Cr0N@list.ru)
 * @copyright  2019 N3Cr0N
 * @license    https://opensource.org/licenses/MIT  MIT License
 * @link       <URI> (description)
 * @version    GIT: $Id$
 * @since      Version 0.0.1
 * @filesource
 *
 */

// load the MX_Loader class
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader{
    /**
     * An array of variables to be passed through to the
     * view, layout,....
     */
    protected $data = array();

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct(){
        // To inherit directly the attributes of the parent class.
        parent::__construct();
    }

    // Backend controller
    public function admin_view($view, $data = null){

        $this->data['site_title'] = SITE_NAME.' | '.ucfirst($data['pageName']);
        $this->data['page_data'] = $data;

        $this->load->view('partials/head',$this->data);
        $this->load->view('partials/topnav');
        $this->load->view('partials/menu');
        $this->load->view('partials/breadcrum');
        $this->load->view($view);
        $this->load->view('partials/footer');
    }


    // Backend controller
    public function front_view($view, $data = null){
        $this->data['page_data'] = $data;
        $this->load->view($view, $this->data);
    }

}
