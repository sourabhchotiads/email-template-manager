<?php
    defined('BASEPATH') or exit('No Direct Script is allowed');

    class EmailTemplate extends MY_Controller{

        protected $data = array();

        function __construct(){
            parent::__construct();
            $this->data['pageName'] = 'Email Template Manager';

            $this->load->model('EmailTemplateModel','template');
        }

        public function index(){
            $this->load->admin_view('emailTemplates/listing',$this->data);
        }

        public function getListing(){
            $data = array();

            $post = $this->input->post();
            $listing = $this->template->getTemplateListing($post);

            echo json_encode($listing);
        }


        public function templateForm(){
            
        }
    }