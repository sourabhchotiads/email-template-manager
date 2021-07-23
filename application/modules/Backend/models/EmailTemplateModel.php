<?php

    defined('BASEPATH') or exit('No Direct Script is allowed');

    class EmailTemplateModel extends CI_Model{

        public function getTemplateListing($post){
            $draw = $post['draw'];
            $row = $post['start'];
            $rowperpage = $post['length']; // Rows display per page
            $columnIndex = $post['order'][0]['column']; // Column index
            $columnName = $post['columns'][$columnIndex]['data']; // Column name
            $columnSortOrder = $post['order'][0]['dir']; // asc or desc
            $searchValue = $post['search']['value']; // Search value

            ## Search 
            $searchQuery = " ";
            if($searchValue != ''){
                $searchQuery .= " and (template_name like '%".$searchValue."%' or 
                template_subject like '%".$searchValue."%' ) ";
            }

            $totalRecords = $this->db->select('*')
                            ->from('email_templates')
                            ->get()
                            ->num_rows();

            $this->db->select('*')->from('email_templates');
            if($searchQuery != " "){
                $this->db->where($searchQuery);
            }
            $listing = $this->db->get()->result();

            $totalRecordwithFilter = 0;
            $result = [];
            if(!empty($listing)){
                $totalRecordwithFilter = count($listing);
                foreach($listing as $key => $list){

                    $action = '';

                    $data = [
                        'template_name' => $list->template_name,
                        'template_subject' => $list->template_subject,
                        'created_at' => $list->created_at,
                        'actions' => $action
                    ];

                    $result[] = $data;
                } 
            }

            $response = array(
                "draw" => intval($draw),
                "iTotalRecords" => $totalRecords,
                "iTotalDisplayRecords" => $totalRecordwithFilter,
                "aaData" => $result
            );

            return $response;
        }
    }