<?php

// OBJECT MODEL:
class SimpleQuery {
    public $object;
    public $tableName;

    function __construct($object = array(), $tableName) {
        $this->object = $object;
        $this->tableName = $tableName;
        include("conexion.php");
        $this->dbh = $dbh;
    }
    function list() {
        $count = 0;
        $where = "";
        $query = "SELECT * FROM ".$this->tableName;
        foreach($this->object as $key => $value) {
            if($count > 0){
                $where .= " AND ";
            }
            $where .= $key." = '".$value."'";
            $count++;
        }
        if($count>0){
            $query .= " WHERE ";
            $query .= $where;
        }
        $query .= ";";
        $result = $this->dbh->query($query);
        $rows = [];
        if (isset($result->num_rows)) {
            while($row = $result->fetch_assoc()) {
                array_push($rows, $row);
            }
        }
        return $rows;
    }
    function insert() {
        $keys = "INSERT INTO ".$this->tableName."(`";
        $values = "VALUES ('";
        $count = 0;
        foreach($this->object as $key => $value) {
            if($count > 0){
                $keys .= "`, `";
                $values .= "','";
            }
            $keys .= $key;
            $values .= $value;
            $count++;
        }
        $keys .= "`) ";
        $values .= "');";
        $query = $keys . $values;
        $insert = $this->dbh->query($query);
        $this->object["id"] = $this->dbh->insert_id;
        return $this->object;
    }

    function update() {
        $query = "UPDATE ".$this->tableName." SET ";
        $count = 0;
        foreach($this->object as $key => $value) {
            if($count > 0){
                $query .= "' , ";
            }
            $query .= $key." = '".$value;
            $count++;
        }
        $query .= "' WHERE id = ".$this->object['id'].";"; 
        $update = $this->dbh->query($query);
    }

    function delete() {


        $query = "DELETE FROM ".$this->tableName." WHERE id = ".$this->object['id'].";";
        $delete = $this->dbh->query($query);
        
    }
}
?>