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
                        <label for="formGroupExampleInput" class="form-label">ExpectWeight</label>
                        <input type="text" name="ex" class="form-control" placeholder="ExpectWeight" aria-label="ExpectWeight" >
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                    <label>Shed<select name="shed"><br>
                    <?php
                        foreach($shedlist as $s)
                        {
                            echo"<option value=$s->id>$s->name</option>";
                        }
                    ?></select></label><br>
                    </div>
                    <div class="col">
                    <label>Type<select name="type"><br>
                        <?php
                            foreach($typelist as $t) 
                            {
                                echo"<option value=$t->id>$t->name</option>";
                            }
                        ?></select></label><br>
                    </div>
                </div>


                <div class=" mb-3" style="margin-left: 75%;">
                <input type="hidden" name="controller" value="shedopen">
                <button type="submit" class="btn btn-secondary" name="action" value="index">Back</button>
                <button type="submit" class="btn btn-primary" name="action" value="addshedopen">Save</button>
                </div>
                
            </form>
        </div>    
       

</body>

</html>