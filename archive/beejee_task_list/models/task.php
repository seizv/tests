<?php

class Task extends Model
{

    public function createTask($data, $upload_file, $id = null){
            if ( !isset($data['name']) || !isset($data['email']) || !isset($data['task'])){
                return false;
            }

            $id = (int)$id;
            $name = $this->db->escape($data['name']);
            $email = $this->db->escape($data['email']);
            $text = $this->db->escape($data['task']);
            $is_ready = isset($data['is_ready']) ? 1 : 0;
            $foto = $upload_file;

            if ( !$id ){ // Add new record
                $sql = "
                    INSERT INTO todo
                    SET name = '{$name}',
                        email = '{$email}',
                        text = '{$text}',
                        foto = '{$foto}'                
                        ";
            } else { // Update existing record
                $sql = "UPDATE todo
                        SET text = '{$text}',
                            is_ready = '{$is_ready}'
                        WHERE id = '{$id}'
                        ";
                }
                return $this->db->query($sql);
            }


}