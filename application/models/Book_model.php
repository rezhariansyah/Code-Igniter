<?php

class Book_model extends CI_model {
    
    public function getBook()
    {
        return $this->db->get("book");
    }

    public function getSingleBook($url)
    {
        // $query = $this->db->query('SELECT * FROM book WHERE url = "'.$url.'" ');
        $this->db->where('url', $url);
        return $this->db->get('book');
    }
}