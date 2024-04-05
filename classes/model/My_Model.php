<?php

    class My_Model extends DBConnection {

        protected function get_row_data($tbl, $data, $type='') {
            $select = isset($data['select']) ? $data['select'] : '*';
            $where = isset($data['where']) ? $data['where'] : array();
            $join = isset($data['join']) ? $data['join'] : array();
            $sql = "SELECT $select FROM $tbl";
            
            foreach ($join as $table => $condition):
                $sql .= " JOIN $table ON $condition";
            endforeach;
            
            if (!empty($where)):
                $sql .= " WHERE ";
                $conditions = array();
                foreach ($where as $column => $value) {
                    $conditions[] = "$column = :$column";
                }
                $sql .= implode(" AND ", $conditions);
            endif;
            $stmt = $this->connect()->prepare($sql);
            try {
                foreach ($where as $column => $value):
                    $stmt->bindValue(":$column", $value);
                endforeach;
            // echo '<pre>';
            // print_r($stmt);
            // echo '</pre>';
            // exit;
                $stmt->execute();
                return ($type === 'row') ? $stmt->fetch() : $stmt->fetchAll();
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
                foreach($set as $key => $value):
                    $setClauses[] = "$key = ?";
                    $values[] = $value;
                endforeach;
                foreach($where as $key => $value):
                    $whereClauses[] = "$key = ?";
                    $values[] = $value;
                endforeach;
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
            if(isset($where)):
                $whereClauses = array();
                $values = array();
                foreach($where as $key => $value):
                    $whereClauses[] = "$key = ?";
                    $values[] = $value;
                endforeach;
                $sql = "DELETE FROM $tbl_name WHERE " . implode(' AND ', $whereClauses);
                $stmt = $this->connect()->prepare($sql);
                try {
                    $stmt->execute($values);
                    return true; 
                } catch(PDOException $e) {
                    echo 'ERROR ' . $e->getMessage();
                    return false; 
                }
            endif;
        }
        
    }
?>