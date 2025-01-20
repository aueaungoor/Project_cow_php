<?php 

class Type
{
    public $id;
    public $name;
    public $price;
 

    public function __construct($id,$name,$price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public static function getAll()
    {
        $typelist =[];
        require("connection_open.php");
        $sql = "select * from type";
        $result = $conn->query($sql);
        
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row["typeId"];
            $name = $my_row["typeName"];
            $price = $my_row["pricePerKg"];
            
            $typelist[] = new Type($id,$name,$price );
           
        }

        require("connection_close.php");

        return  $typelist;
    }

    

    

}

 
?>