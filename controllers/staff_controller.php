<?php

class StaffController
{
    public function index()
    {
        $staff_list = Staff::getAll();
        require('view/staff/index.php');
    }
    public function form_addschedule()
    {
        $id = $_GET['id'];
        $staff = Staff::get($id);
        $shed = Shed::getAll();
        require('view/staff/form_addschedule.php');
    }

    public function form_addstaff()
    {
        $positionall = Staff::getposition();
        require('view/staff/form_addstaff.php');
    }

    public function addstaff()
    {
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $position = $_GET['position'];
        Staff::addstaff($fname,$lname,$position);
        $staff_list = Staff::getAll();
        require('view/staff/index.php');
    }

    public function form_editstaff()
    {
        $id = $_GET['id'];
        $staff = Staff::get($id);
        $positionall=["คนงาน","สัตวแพทย์"];
        require('view/staff/form_editstaff.php');
    }

    public function editstaff()
    {
        $id = $_GET['id'];
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $position = $_GET['position'];
        Staff::editstaff($id,$fname,$lname,$position);
        $staff_list = Staff::getAll();
        require('view/staff/index.php');
    }

    public function form_deletestaff()
    {
        $id = $_GET['id'];
        $staff = Staff::get($id);
        require('view/staff/form_deletestaff.php');
    }

    public function deletestaff()
    {
        $id = $_GET['id'];
        Staff::deletestaff($id);
        $staff_list = Staff::getAll();
        require('view/staff/index.php');
    }

    public function addschedule()
    {
        $id = $_GET['id'];
        $shed = $_GET['shed'];
        Staff::addschedule($id,$shed);
        $staff_list = Staff::getAll();
        require('view/staff/index.php');
    }


    


    



    


    

   
}


?>