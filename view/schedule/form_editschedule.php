<form method="get" action="">

    <label>Date<input type="text" name="date" readonly
    value="<?php echo $schedule->date;?>"/></label><br>
    <label>Name<input type="text" name="name"
    value="<?php echo$schedule->staffname?>"/></label><br>
    <label>Position<input type="text" name="position" readonly
    value="<?php echo$schedule->position?>"/></label><br>
    <label>Shed<input type="text" name="shed"
    value="<?php echo$schedule->shedopen?>"/></label><br>

    <input type="hidden" name="controller" value="schedule"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="editschedule">Update</button>
</form>