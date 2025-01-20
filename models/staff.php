<?php 

class Staff
{
    public $id;
    public $fname;
    public $lname;
    public $position;
    public $stedname;
    public $shed;
    public $status;
    

    public function __construct($id,$fname,$lname,$position)
    {
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->position = $position;
    }

    public static function getAll()
    {
        $stafflist= [];
        require("connection_open.php");
        $sql = "select * from staff";
        $result = $conn->query($sql);
        
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row["staffId"];
            $fname = $my_row["fname"];
            $lname = $my_row["lname"];
            $position = $my_row["position"];
            
            $stafflist[] = new Staff($id,$fname,$lname , $position );
           
        }
        require("connection_close.php");
        
        
        return  $stafflist;
    }

    public static function get($id)
    {
        require("connection_open.php");
        $sql = "select * from staff
        where staffId = '$id' ";
        $result = $conn->query($sql);

        $my_row = $result->fetch_assoc();
        $id = $my_row["staffId"];
        $fname = $my_row["fname"];
        $lname = $my_row["lname"];
        $position = $my_row["position"];

        return new Staff($id,$fname,$lname,$position);

    }
    
    public static function getposition()
    {
        $positionall=["คนงาน","สัตวแพทย์"];

        return $positionall;

    }

    public static function addstaff($fname,$lname,$position)
    {
        require("connection_open.php");
        $sql = "INSERT INTO staff(staffId,fname, lname,position) VALUE(NULL, '$fname', '$lname', '$position');";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function editstaff($id,$fname,$lname,$position)
    {
        require("connection_open.php");
        $sql = "update staff set fname = '$fname' , lname = '$lname' , position = '$position'
        where staffId = '$id'";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function deletestaff($id)
    {
        require("connection_open.php");
        $sql = "delete from staff where staffId = $id";
        $result = $conn->query($sql);
        require("connection_close.php");
    }


    public static function addschedule($id,$shed)
    {
        $date = date("Y-m-d");
        require("connection_open.php");
        $sql = "insert into workAt(workAtId,date,staff_staffid,shedOpen_shedOpenId) values(NULL,'$date','$id','$shed')";
        $result = $conn->query($sql);

        require("connection_close.php");
    }

    


    


    
}

 
?>