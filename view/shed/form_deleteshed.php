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
        <div class="card" style="margin-top: 7%; width: 600px;margin-left: 280px;">
            <div class="card-header">
                DELETE
            </div>
            <div class="card-body mt-2" style="margin-left: 3%;">
                <!-- <h5 class="card-title">DELETE</h5> -->
                <h5 class="card-text">Are you sure to delete this?</h5>
                <p class="card-text"><?php

                            echo "Id : $shed->id 
                            Name: $shed->name
                            Status : $shed->status
           
                </p> ";?>

            <form method="get" action="">
                    <input type="hidden" name="controller" value="shed">
                    <input type="hidden" name="id" value="<?php echo $shed->id;?>">
                    <button type="submit" class="btn btn-secondary" name="action" value="index">Back</button>
                    <button type="submit" class="btn btn-primary" name="action" value="deleteshed">Yes</button>
            </form>

</body>

</html>
