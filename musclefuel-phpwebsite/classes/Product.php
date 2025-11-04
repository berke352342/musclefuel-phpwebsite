<?php

 class Product {
    private $conn;
    private $table = "products";

    public function __construct($db) {
        $this->conn = $db;
    }
\


    public function getAll() {

        return [ // all products will be shown in shop page
            ['id'=>1, 'name'=>'Whey Protein', 'description'=>'High quality whey protein', 'price'=>49.99, 'image'=>'vanilla.png'],
            ['id'=>2, 'name'=>'Gainer', 'description'=>'Mass gainer supplement', 'price'=>59.99, 'image'=>'gainer.png'],
            ['id'=>3, 'name'=>'Creatine', 'description'=>'Pure creatine monohydrate', 'price'=>29.99, 'image'=>'creatine.png']
        ];
    }

    public function getSingle($id) {
        $all = $this->getAll();
        foreach($all as $p) {
        if($p['id'] == $id) return $p;
        }
        return null;
    }


  // crud operations
    public function create($data) {
        return true;
     }
    public function update($id, $data) {
         return true; 
        }
}


?>
