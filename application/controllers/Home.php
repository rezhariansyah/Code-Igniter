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
        // find book   
        $query = $this->Book_model->getBook();
        $data["bookList"] = $query->result_array();

        $data['count'] = $query->num_rows();
        
        $this->load->view('home', $data);
    }

    public function detail($url)
    {
        {
            $query = $this->Book_model->getSingleBook('url', $url);
            $data['book'] = $query->row_array();

            $this->load->view('detail', $data);
        }
    }

    public function form_add()
    {  
        if($this->input->post()) {
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['url'] = $this->input->post('url');
            $data['price'] = $this->input->post('price');
            
            $id = $this->Book_model->addBook($data);
            if($id)                
                echo '<div class="alert alert-primary" role="alert">
                        A simple warning alert—check it out!
                    </div>';
                
                redirect('/');
                
        }
        $this->load->view('form_add');
    }

    public function form_edit($id)
    {
        $query = $this->Book_model->getSingleBook('id', $id);
        $data['book'] = $query->row_array();     
        
        if($this->input->post()) {
            $editBook['title'] = $this->input->post('title');
            $editBook['description'] = $this->input->post('description');
            $editBook['url'] = $this->input->post('url');
            $editBook['price'] = $this->input->post('price');
            
            $id = $this->Book_model->updateBook($id, $editBook);
                      
            redirect('/');
            
        }

        $this->load->view('form_edit', $data);
        
    }

    public function delete_book($id)
    {
        $this->Book_model->delete_book($id);
        
        redirect('/');      
    }
}

