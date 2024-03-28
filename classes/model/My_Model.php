<?php

    class My_Model extends DBConnection {

        protected function get_row_data($tbl, $data, $type='') {
            $select = isset($data['select']) ? $data['select'] : '*';
            
            $where = isset($data['where']) ? $data['where'] : '';
            
            $sql = "SELECT $select FROM $tbl";
            
            if (!empty($where)) {
                $sql .= " WHERE $where";
            }
            
            $stmt = $this->connect()->prepare($sql);

            try {

                $stmt->execute();
                
                if ($type === 'single') {
                    return $stmt->fetch(PDO::FETCH_ASSOC);
                } else {
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
            } catch(PDOException $e) {

                echo 'ERROR ' . $e->getMessage();

                return false; 
            }
        }

        protected function insert_data($tbl, $data) {

            if(isset($data)) {

                $keys = array();
                $dataValues = array();
        
                foreach($data as $key => $data_value) {
                    $keys[] = $key;
                    $dataValues[] = $data_value;
                }
        
                $valuePlaceholders = rtrim(str_repeat('?,', count($dataValues)), ',');
        
                $sql = "INSERT INTO $tbl (" . implode(',', $keys) . ") VALUES ($valuePlaceholders)";
        
                $stmt = $this->connect()->prepare($sql);
                
                try {

                    $stmt->execute($dataValues);
                    return true; 
                } catch(PDOException $e) {
                    
                    echo 'ERROR ' . $e->getMessage();

                    return false; 
                }
            }
        }

        protected function update_data($tbl_name, $set, $where) {

            if(isset($set) && isset($where)) {
            
                $setClauses = array();
                $whereClauses = array();
                $values = array();
        
                foreach($set as $key => $value) {
                    $setClauses[] = "$key = ?";
                    $values[] = $value;
                }
        
                foreach($where as $key => $value) {
                    $whereClauses[] = "$key = ?";
                    $values[] = $value;
                }
        
                $sql = "UPDATE $tbl_name SET " . implode(', ', $setClauses) . " WHERE " . implode(' AND ', $whereClauses);
        
                $stmt = $this->connect()->prepare($sql);
                
                try {
                    
                    $stmt->execute($values);
                    return true; 

                } catch(PDOException $e) {
                  
                    echo 'ERROR ' . $e->getMessage();
                    return false; 
                }
            }
        }

        protected function delete_data($tbl_name, $where) {
            if(isset($where)) {
                
                $whereClauses = array();
                $values = array();
        
                foreach($where as $key => $value) {
                    $whereClauses[] = "$key = ?";
                    $values[] = $value;
                }
        
                $sql = "DELETE FROM $tbl_name WHERE " . implode(' AND ', $whereClauses);
        
                $stmt = $this->connect()->prepare($sql);
                
                try {
                 
                    $stmt->execute($values);
                    return true; 
                } catch(PDOException $e) {
                    
                    echo 'ERROR ' . $e->getMessage();
                    return false; 
                }
            }
        }
        
    }
?>