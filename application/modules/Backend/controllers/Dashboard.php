<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    
    class Dashboard extends MY_Controller{

        protected $data = array();

        public function __construct(){

            parent::__construct();
        }

        public function index(){

            $this->data['pageName'] = 'dashboard';

            $this->load->admin_view('dashboard',$this->data);
        }
    }