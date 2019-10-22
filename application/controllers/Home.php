<?php

class Home extends CI_controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Book_model');
    }

    public function index()
    {           
        $query = $this->Book_model->getBook();
        $data["bookList"] = $query->result_array();
        
        $this->load->view('home', $data);
    }

    public function detail($url)
    {
        {          
            $query = $this->Book_model->getSingleBook($url);
            $data['book'] = $query->row_array();

            $this->load->view('detail', $data);
        }
    }
}