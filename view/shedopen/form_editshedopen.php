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
                        <label for="formGroupExampleInput" class="form-label">Id_ShedOpen</label>
                        <input type="text" name="id" class="form-control" placeholder="Id_ShedOpen" aria-label="Id_ShedOpen" value="<?php echo $shedlist->id;?>" readonly>
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">ExpectWeight</label>
                        <input type="text"  name="ex" class="form-control" placeholder="ExpectWeight" aria-label="ExpectWeight" value="<?php echo $shedlist->exweight;?>" >
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Totolcow</label>
                        <input type="text" name="totolcow" class="form-control" placeholder="Totolcow" aria-label="Totolcow" value="<?php echo $shedlist->totolcow;?>" readonly>
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">StartDate</label>
                        <input type="text"  name="startdate" class="form-control" placeholder="startdate" aria-label="startdate" value="<?php echo $shedlist->startdate;?>"readonly> 
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Shed_Id</label>
                        <input type="text" name="shed" class="form-control" placeholder="shed" aria-label="shed" value="<?php echo $shedlist->shedid;?>" readonly>
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Type</label>
                        <input type="text"  name="type" class="form-control" placeholder="type" aria-label="type" value="<?php echo $shedlist->type;?>"readonly >
                    </div>
                </div>


                <div class=" mb-3" style="margin-left: 75%;">
                <input type="hidden" name="controller" value="shedopen">
                <button type="submit" class="btn btn-secondary" name="action" value="index">Back</button>
                <button type="submit" class="btn btn-primary" name="action" value="editshedopen">Save</button>
                </div>
                
            </form>
        </div>    
       

</body>

</html>
