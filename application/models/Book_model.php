<?php

class book_model extends CI_model {
    
    public function getBook()
    {
        return $this->db->get("book");
    }

    public function getSingleBook($field, $value)
    {
        // $query = $this->db->query('SELECT * FROM book WHERE url = "'.$url.'" ');
        $this->db->where($field, $value);
        return $this->db->get('book');
    }

    public function addBook($data)
    {
        $this->db->insert('book', $data);
        return $this->db->insert_id();
    }
}