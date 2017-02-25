<?php

class Page extends Model{

    public function getAll(){
        $sql = "select * from todo where 1";
        return $this->db->query($sql);
    }

    public function sortBy($sort){
        $sql = "SELECT * 
                FROM `todo` 
                ORDER BY `todo`.`{$sort}` ASC";
        return $this->db->query($sql);
    }

}