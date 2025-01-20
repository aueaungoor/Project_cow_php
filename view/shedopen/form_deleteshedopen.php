<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Farm management</title>
    <style>
        body {
            background-color: #f6f6f6;
        }

        .cc{
            color: white;
        }

    </style>
</head>

<body>
        <div class="card" style="margin-top: 7%; width: 600px;margin-left: 200px;">
            <div class="card-header">
                DELETE
            </div>
            <div class="card-body mt-2" style="margin-left: 3%;">
                <!-- <h5 class="card-title">DELETE</h5> -->
                <h5 class="card-text">Are you sure to delete this?</h5>
                <p class="card-text"><?php

                            echo "id : $shedopen->id 
                            status: $shedopen->status
                            shed : $shedopen->shedid
                            Totolcow : $shedopen->totolcow
                            Type: $shedopen->type
           
                </p> ";?>

            <form method="get" action="">
                    <input type="hidden" name="controller" value="shedopen">
                    <input type="hidden" name="id" value="<?php echo $shedopen->id;?>">
                    <input type="hidden" name="shedid" value="<?php echo $shedopen->shedid;?>">
                    <button type="submit" class="btn btn-secondary" name="action" value="index">Back</button>
                    <button type="submit" class="btn btn-primary" name="action" value="deleteshedopen">Yes</button>
            </form>

</body>

</html>
