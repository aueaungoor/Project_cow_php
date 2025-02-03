<br><h1>Are you sure to delete this schedule!!!!!!"</h1><br>
<?php

    echo "id : $staff->id 
         fname : $staff->fname
         lname : $staff->lname
         position: $staff->position
         <br>
         <td><a href=?controller=staff&action=index>Cancel</a></td>
         <td><a href=?controller=staff&action=deletestaff&id=$staff->id>Yes</a></td>";
         
?>


