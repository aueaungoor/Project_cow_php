<?php 

class Shed
{
    public $id;
    public $name;
    public $status;


    public function __construct($id,$name,$status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
    }

    public static function getAll()
    {
        $shedlist= [];
        require("connection_open.php");
        $sql = "select * from shed";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row["shedId"];
            $name = $my_row["shedName"];
            $status = $my_row["status"];
            
            $shedlist[] = new Shed($id,$name,$status );
           
        }
        require("connection_close.php");
        
        return  $shedlist;
    }

    public static function get($id)
    {
        require("connection_open.php");
        $sql = "select * from shed
        where shedId = '$id' ";
        $result = $conn->query($sql);

        $my_row = $result->fetch_assoc();
        $id = $my_row['shedId'];
        $name = $my_row['shedName'];
        $status = $my_row['status'];

        require("connection_close.php");
        return new Shed($id,$name,$status);

    }

    public static function edit($id,$name)
    {
        require("connection_open.php");
        $sql ="update shed
                set shedName = '$name' 
        where shedId = $id ";
        $result = $conn->query($sql);
        require("connection_close.php");

    }

    public static function delete($id)
    {
        require("connection_open.php");
        $sql ="delete from shed
        where shedId = '$id' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "success";

    }

    public static function getfreeshed()
    {
        $shedlist= [];
        require("connection_open.php");
        $sql = "select * from shed
        where status ='ว่าง' ";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row["shedId"];
            $name = $my_row["shedName"];
            $status = $my_row["status"];
            
            $shedlist[] = new Shed($id,$name,$status );
           
        }
        require("connection_close.php");
        
        return $shedlist;
    }

    public static function addshed($name)
    {
        require("connection_open.php");
        $sql = "insert into shed(shedId,shedName,status) values(NULL,'$name','ว่าง')";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    


}

 
?>