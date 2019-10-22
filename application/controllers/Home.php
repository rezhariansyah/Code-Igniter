<?php

class Home extends CI_controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function index()
    {           
        $query = $this->db->get("book");
        $data["bookList"] = $query->result_array();
        
        $this->load->view('home', $data);
    }

    public function detail($url)
    {
        {          
            // $query = $this->db->query('SELECT * FROM book WHERE url = "'.$url.'" ');
            $this->db->where('url', $url);
            $query = $this->db->get('book');
            $data['book'] = $query->row_array();

            $this->load->view('detail', $data);
        }
    }
}