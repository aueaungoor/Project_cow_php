<?php 

class Schedule
{
    public $id;
    public $date;
    public $staffname;
    public $shedopen;
    public $position;

    public function __construct($id,$name,$staffname,$shedopen , $position)
    {
        $this->id = $id;
        $this->date = $name;
        $this->staffname = $staffname;
        $this->shedopen = $shedopen;
        $this->position = $position;
    }

    public static function getAll()
    {
        $schedule_list= [];
        require("connection_open.php");
        $sql = "SELECT w.workAtId , w.date as date,  s.fname as staffname, s.position as position, w.shedOpen_shedOpenId as shed FROM workAt w 
                INNER JOIN staff s on w.staff_staffId = s.staffId";
        $result = $conn->query($sql);
        if(!$result)
        {
            echo"<br>not have result";
        }
        
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row["workAtId"];
            $date = $my_row["date"];
            $staffname = $my_row["staffname"];
            $shedopen = $my_row["shed"];
            $position = $my_row["position"];
            
            $schedule_list[] = new Schedule($id,$date,$staffname,$shedopen ,$position);
           
        }
        require("connection_close.php");
        
        
        return  $schedule_list;
    }

    public static function get($id)
    {
        require("connection_open.php");
        $sql = "SELECT w.workAtId , w.date as date,  s.fname as staffname, s.position as position, w.shedOpen_shedOpenId as shed FROM workAt w 
                INNER JOIN staff s on w.staff_staffId = s.staffId
                where w.workAtId = $id ";
        $result = $conn->query($sql);

        $my_row = $result->fetch_assoc();
        $id = $my_row["workAtId"];
        $date = $my_row["date"];
        $staffname = $my_row["staffname"];
        $shedopen = $my_row["shed"];
        $position = $my_row["position"];

        return new Schedule($id,$date,$staffname,$shedopen ,$position);


    }

    public static function search($key)
    {
        $list=[];
        require("connection_open.php");
       
            $sql = "SELECT w.workAtId , w.date as date,  s.fname as staffname, s.position as position, w.shedOpen_shedOpenId as shed FROM workAt w 
            INNER JOIN staff s on w.staff_staffId = s.staffId
            where (s.fname LIKE '%$key%' )";
            $result = $conn->query($sql);

            while ($my_row = $result->fetch_assoc()) {
        $id = $my_row["workAtId"];
        $date = $my_row["date"];
        $staffname = $my_row["staffname"];
        $shedopen = $my_row["shed"];
        $position = $my_row["position"];
        
        $list[] = new Schedule($id,$date,$staffname,$shedopen ,$position);
       
    }
        
        

        return $list;


    }

    public static function delete($id)
    {
        require("connection_open.php");
        $sql = "delete from workAt where workAtId = '$id'";
        $result = $conn->query($sql);
        require("connection_close.php");

    }

    
}

 
?>