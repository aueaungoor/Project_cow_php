<?php
$controllers = array('pages' => ['home' , 'error'] 
, 'shed' => ['index' , 'form_addshed','form_editshed' , 'editshed','form_deleteshed','deleteshed' , 'addshed'] 
, 'staff' => ['addschedule','form_addschedule','index' , 'form_addstaff' , 'form_editstaff' , 'addstaff' , 'editstaff'  ,'form_deletestaff' , 'deletestaff'] ,
'schedule' => ['index' , 'form_deleteschedule' , 'deleteschedule' ,'search'] 
, 'shedopen' => ['index' , 'form_addshedopen' , 'addshedopen','form_deleteshedopen','deleteshedopen' , 'form_editshedopen','editshedopen'] );


function call($controller,$action)
{
   
    require("controllers/".$controller."_controller.php");
    switch($controller)
    {

        case "pages": $controller_obj = new PagesController(); break;
        case "shed": 
            require("models/shed.php");
            $controller_obj = new ShedController(); break;
        case "staff": 
            require("models/staff.php");
            require("models/shed.php");
            $controller_obj = new StaffController(); break;
        case "schedule":
            require("models/schedule.php");
            require("models/staff.php");
            $controller_obj = new ScheduleController(); break;
        case "shedopen": 
            require("models/shed.php");
            require("models/type.php");
            require("models/shedopen.php");
            $controller_obj = new ShedOpenController(); break;
       
    }
    
    $controller_obj->{$action}();

}

if(array_key_exists($controller, $controllers))
{
    
    if(in_array($action, $controllers[$controller]))
    {

        call($controller,$action);
    }
    else{
        call('pages','error');
    }
} 
else{
    call('pages' , 'error');
}




?>