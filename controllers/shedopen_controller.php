<?php

class ShedopenController
{
    public function index()
    {
        $shedlist = ShedOpen::getAll();
        require('view/shedopen/index.php');
    }

    public function form_addshedopen()
    {
        $shedlist = Shed::getfreeshed();
        $typelist = Type::getAll();
        require('view/shedopen/form_addshedopen.php');
    }

    public function addshedopen()
    {
        $ex = $_GET['ex'];
        $shed = $_GET['shed'];
        $type = $_GET['type'];
        ShedOpen::addshedopen($ex,$shed,$type);
        $shedlist = ShedOpen::getAll();
        require('view/shedopen/index.php');
    }

    public function form_deleteshedopen()
    {
        $id = $_GET['id'];
        $shedopen = ShedOpen::get($id);
        require('view/shedopen/form_deleteshedopen.php');
    }

    public function deleteshedopen()
    {
        $id = $_GET['id'];
        $shedid = $_GET['shedid'];
       ShedOpen::delete($id,$shedid);
       $shedlist = ShedOpen::getAll();
        require('view/shedopen/index.php');
    }

    public function form_editshedopen()
    {
        $id = $_GET['id'];
        $ex=$_GET['ex'];
       ShedOpen::editshedopen($id,$ex);
       $shedlist = ShedOpen::get($id);
        require('view/shedopen/form_editshedopen.php');
    }

    public function editshedopen()
    {
        $id = $_GET['id'];
        $ex = $_GET['ex'];
        ShedOpen::editshedopen($id,$ex);
        $shedlist = ShedOpen::getAll();
        require('view/shedopen/index.php');
    }

    
    

    

    

    



    


    

}


?>