<form method="get" action="">

    <label>Name<input type="text" name="name"
    value="<?php echo $pet->name;?>"/></label><br>
    <label>Code<input type="date" name="age"
    value="<?php echo$pet->age?>"/></label><br>
    <label>Status<input type="text" name="breed"
    <?php
        foreach($customer_list as $customer)
        {
            echo"<option value=$customer->id>$customer->name</option>";
        }
    ?></select></label><br>
    <input type="hidden" name="controller" value="pet"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>
</form>