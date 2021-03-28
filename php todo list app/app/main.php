<?php 

class Main extends Database {


    public function show_todo() {

        $sql = "SELECT * FROM items";
        $stmt = $this->connect()->query($sql);
        return $stmt;

     }

     

     public function delete($item_id) {

        $sql = "DELETE FROM items WHERE id='$item_id'";

        $stmt = $this->connect()->query($sql);

        return $stmt;

     }

     public function create($name, $done) {

        $sql = "INSERT INTO items (name, done, created) VALUES ('$name', '$done', NOW())";

        $stmt = $this->connect()->query($sql);
        
        return $stmt;

     }

     public function mark_done($item_id, $done) {

        $sql = "UPDATE items SET done='$done' WHERE id= '$item_id'";

        $stmt = $this->connect()->query($sql);

        return $stmt;

     }



}

// $main= new Main();