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
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($viewRes['Data'] as $key => $value) { ?>
                <tr>
                    <td><?php echo $value->name ?></td>
                    <td><?php echo $value->mobile ?></td>
                    <td><?php echo $value->email ?></td>
                    <td>
                       <button> <a href="edit?userid=<?php echo $value->id; ?>">edit</a></button>
                    </td>
                    <td>
                        <a href="delete?userid=<?php echo $value->id; ?>">delete</a>
                    </td>
                </tr>

            <?php }


            ?>



        </tbody>
    </table>
</body>

</html>