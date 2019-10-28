<?php

class Book_model extends CI_model {
    
    public function getBook()
    {
        $filter = $this->input->get('find');
        $this->db->like('title', $filter);
        
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
        return $this->db->insert('book', $data);
        // return $this->db->insert_id();
    }

    public function updateBook($id, $editBook)
    {
        $this->db->where('id', $id);
        $this->db->update('book', $editBook);
        return $this->db->affected_rows('book', $editBook);
    }

    public function delete_book($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('book');
        return $this->db->affected_rows();
    }

}