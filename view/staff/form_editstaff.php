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
                        <input type="text" name="id" class="form-control" placeholder="Id_Staff" aria-label="Id_Staff" value="<?php echo $staff->id;?>" readonly>
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">First_Name</label>
                        <input type="text"  name="fname" class="form-control" placeholder="First_Name" aria-label="First_Name" value="<?php echo $staff->fname;?>" >
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Last_Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Last_Name" aria-label="Last_Name" value="<?php echo $staff->lname;?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Position<select name="position"><br>
                        <?php
                        foreach($positionall as $p)
                            {
                            echo"<option value=$p>$p</option><br>";
                            }
                        ?></select></label><br>
                    </div>
                </div>


                <div class=" mb-3" style="margin-left: 75%;">
                <input type="hidden" name="controller" value="staff">
                <button type="submit" class="btn btn-secondary" name="action" value="index">Back</button>
                <button type="submit" class="btn btn-primary" name="action" value="editstaff">Save</button>
                </div>
                
            </form>
        </div>    
       

</body>

</html>
