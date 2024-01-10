<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <!-- <th scope="col">sr no.</th> -->
                <th scope="col">name</th>
                <th scope="col">mobile</th>
                <th scope="col">email</th>
                <th scope="col">age</th>
                <th scope="col">gender</th>
                <th scope="col">adharno</th>
                <th scope="col">panno</th>
                <th scope="col">city</th>
                <th scope="col">state</th>
                
            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($viewRes['Data'] as $key => $value) { ?>
                <tr>
                    <td><?php echo $value->name ?></td>
                    <td><?php echo $value->mobile ?></td>
                    <td><?php echo $value->email ?></td>
                    <td><?php echo $value->age ?></td>
                    <td><?php echo $value->gender ?></td>
                    <td><?php echo $value->adharno ?></td>
                    <td><?php echo $value->panno ?></td>
                    <td><?php echo $value->city ?></td>
                    <td><?php echo $value->state ?></td>
                    <!-- <td>
                       <a href="edit?userid=<?php echo $value->id; ?>" class="btn btn-primary">edit</a>
                    
                    </td>
                    <td>
                            <a href="delete?userid=<?php echo $value->id; ?>" class="btn btn-danger">delete</a>
                    </td> -->
                </tr>

            <?php }


            ?>



        </tbody>
    </table>
</body>

</html>