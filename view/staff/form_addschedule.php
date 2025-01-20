<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Farm management</title>
    <style>
        body {
            background-color: #f6f6f6;
        }
    </style>
</head>

<body>

    <div class="card " style="margin-top: 7%; width: 700px;margin-left: 200px;">
            <form action="" style="width: 550px; margin-left: 10%; margin-top: 3%;">
                <div class="row mb-3">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Id_Staff</label>
                        <input type="text" name="id" class="form-control" placeholder="id" aria-label="id" value="<?php echo $staff->id;?>" readonly>
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">First_name</label>
                        <input type="text"  name="fname" class="form-control" placeholder="firstname" aria-label="firstname" value="<?php echo $staff->fname;?>" readonly >
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Last_name</label>
                        <input type="text"  name="lname" class="form-control" placeholder="lastname" aria-label="lastname" value="<?php echo $staff->lname;?>"readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Position</label>
                        <input type="text" name="position" class="form-control" placeholder="position" aria-label="position" value="<?php echo $staff->position;?>"readonly>
                    </div>

                </div>

                <div class="row mb-3">

                    <div class="col">
                    <label>Shed<select name="shed"><br>
                    <?php
                        foreach($shed as $s)
                        {
                            echo"<option value=$s->id>$s->name</option>";
                        }
                    ?></select></label>
                    </div>
                </div>

                    <div class=" mb-3" style="margin-left: 75%;">
                    <input type="hidden" name="controller" value="staff"/>
                    <button type="submit" class="btn btn-secondary" name="action" value="index">Back</button>
                    <button type="submit" class="btn btn-primary" name="action" value="addschedule">Save</button>
                    </div>
                    
                
            </form>
    </div>

    


</body>

</html>