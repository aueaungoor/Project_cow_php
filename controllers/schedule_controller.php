<?php

class ScheduleController
{
    public function index()
    {
        $type=["shed","staff"];
        $schedule_list = Schedule::getAll();
        require('view/schedule/index.php');
    }

    public function form_deleteschedule()
    {
        $id = $_GET['id'];
        $schedule = Schedule::get($id);
        require('view/schedule/form_deleteschedule.php');
    }

    public function search()
    {
        $key = $_GET['key'];
        if($key)
        {
            $schedule_list = Schedule::search($key);
        }
        else{
            $schedule_list = Schedule::getAll();
        }
        require('view/schedule/index.php');
    }

    public function deleteschedule()
    {
        $id = $_GET['id'];
        Schedule::delete($id);
        $schedule_list = Schedule::getAll();
        require('view/schedule/index.php');
    }

    

    

    
    

}


?>