<?php

class ShedController
{
    public function index()
    {
        $shed_list = Shed::getAll();
        require('view/shed/index.php');
       
    }

    public function form_editshed()
    {
        $id = $_GET['id'];
        $shed = Shed::get($id);
        require('view/shed/form_editshed.php');
    }

    public function editshed()
    {
        $id = $_GET['id'];
        $name = $_GET['name'];
        Shed::edit($id,$name);
        $shed_list = Shed::getAll();
        require('view/shed/index.php');
    }

    public function deleteshed()
    {
        $id = $_GET['id'];
        Shed::delete($id);
        $shed_list = Shed::getAll();
        require('view/shed/index.php');
    }

    public function addshed()
    {
        $name = $_GET['name'];
        Shed::addshed($name);
        $shed_list = Shed::getAll();
        require('view/shed/index.php');
       
    }

    public function form_deleteshed()
    {
       $id = $_GET['id'];
        $shed = Shed::get($id);
        require('view/shed/form_deleteshed.php');
       
    }

    public function form_addshed()
    {
        require('view/shed/form_addshed.php');
       
    }


    






}


?>