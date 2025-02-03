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

        .table {
            width: 70%;
            background-color: #ffffff;
            margin-left: 15%;
            margin-top: 1%;
        }

        .addBtn {
            margin-left: 70%;
            /* background-color: #205295; */
        }
    </style>
</head>

<body>
        <table class="table table-bordered">
            <thead class="table-light">
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>UPDATE</th>
            </thead>
            <tbody>
            <?php foreach($shed_list as $shed)
            {
            echo "<tr><td>$shed->id</td>
            <td>$shed->name</td>
            <td>$shed->status</td>
            <td><a href=?controller=shed&action=form_editshed&id=$shed->id>Edit</a></td>
            </tr>";
            }
            ?>
            </tbody>
    </table>
    <button type="button" class="addBtn btn btn-primary"><a href="?controller=pages&action=home" style="color: white;" >indexAll</a></button>
</body>

</html>