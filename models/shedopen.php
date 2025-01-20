<?php 

class ShedOpen
{
    public $id;
    public $exweight;
    public $startdate;
    public $status;
    public $type;
    public $shedid;
    public $totolcow;

    public function __construct($id,$exweight,$startdate,$status,$type,$shedid,$totolcow)
    {
        $this->id = $id;
        $this->exweight = $exweight;
        $this->startdate = $startdate;
        $this->status = $status;
        $this->type = $type;
        $this->shedid = $shedid;
        $this->totolcow = $totolcow;
    }

    public static function getAll()
    {
        $shedlist= [];

        require("connection_open.php");
        $sql = "SELECT s.shedOpenId as s,s.expectedWeight as e , if(c.shedOpenId,count(*),0) as totolcow ,s.startDate as fd ,s.status as ss , t.typeName as t , s.shed_shedId as sidd FROM shedOpen s 
LEFT JOIN cow c on c.shedOpenId = s.shed_shedId INNER JOIN type t on s.type_typeId = t.typeId GROUP BY s.shedOpenId order BY s";

        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            
            $id = $my_row["s"];
            $exweight = $my_row["e"];
            $startdate = $my_row["fd"];
            $status = $my_row["ss"];
            $type = $my_row["t"];
            $shedid = $my_row["sidd"];
            $totolcow = $my_row["totolcow"];
            
            $shedlist[] = new ShedOpen($id,$exweight,$startdate,$status,$type,$shedid,$totolcow);
           
        }
        require("connection_close.php");
        
        return  $shedlist;
    }


    public static function get($id)
    {
        $shedlist= [];

        require("connection_open.php");
        $sql = "SELECT s.shedOpenId as s,s.expectedWeight as e , if(c.shedOpenId,count(*),0) as totolcow ,s.startDate as fd ,s.status as ss , t.typeName as t , s.shed_shedId as sidd FROM shedOpen s 
        LEFT JOIN cow c on c.shedOpenId = s.shed_shedId INNER JOIN type t on s.type_typeId = t.typeId  where s.shedOpenId='$id' GROUP BY s.shedOpenId order BY s
       ";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

       $id = $my_row["s"];
       $exweight = $my_row["e"];
       $startdate = $my_row["fd"];
       $status = $my_row["ss"];
       $type = $my_row["t"];
       $shedid = $my_row["sidd"];
       $totolcow = $my_row["totolcow"];
           
        
        require("connection_close.php");
        
        return  new ShedOpen($id,$exweight,$startdate,$status,$type,$shedid,$totolcow);
    }



    public static function addshedopen($ex,$shed,$type)
    {
        $date = date("Y-m-d");
        require("connection_open.php");
        $sql = "insert into shedOpen(shedOpenId,expectedWeight,startDate,status,shed_shedId,type_typeId) values(NULL,'$ex','$date','ยังไม่ขาย','$shed','$type')";
        
        $result = $conn->query($sql);

        $sql = "update shed
                set status='ไม่ว่าง'
                where shedId = $shed";
        $result = $conn->query($sql);
        
        
        require("connection_close.php");
        
    }

    public static function delete($id,$shedid)
    {
        require("connection_open.php");
        $sql= "delete from shedOpen where shedOpenId = '$id'";
        $result = $conn->query($sql);

        $sql = "update shed
        set status='ว่าง'
        where shedId ='$shedid'";
        $result = $conn->query($sql);
        
        require("connection_close.php");
    }

    public static function editshedopen($id,$ex)
    {
        require("connection_open.php");
        $sql= "update shedOpen
                set expectedWeight = $ex
                where shedOpenId = $id";
        $result = $conn->query($sql);
        
        require("connection_close.php");
    }



    

    

    

}

 
?>