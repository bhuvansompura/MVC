<!-- <?php error_reporting(0); ?> -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Form</title>
</head>


<body>
    <div class="container mt-3 p-3 mb-2 bg-white text-dark">
        <div class="text-center">
            <h2><b>Update Form</b></h2>
        </div>
        <form method="post" class="row g-3">
            <?php
            // echo "<pre>";
            // print_r($EditRes['Data'][0]->fullname);
            // echo "</pre>";
            ?>
            <div class="col-md-6 offset-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" value="<?php echo $EditRes['Data'][0]->fullname ;?>" class="form-control" name="fullname" id="fullname">
            </div>
            <div class="col-md-6 offset-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="<?php echo $EditRes['Data'][0]->email ;?>" name="email" class="form-control" id="email">
            </div>
            <div class="col-md-6 offset-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" <?php echo isset($EditRes) ? 'disabled' : "" ;?> value="<?php echo $EditRes['Data'][0]->password ?? "";?>" name="password" class="form-control" id="password">
            </div>
            <div class="col-md-6 offset-3">
                <label for="gender">Gender</label><br>
                <input type="radio" name="gender" id="Male" value="Male" <?php if($EditRes['Data'][0]->gender == 'Male'){ echo "checked";} ?> ><label for="Male">Male</label>
                <input type="radio" name="gender" id="Female" value="Female" <?php if($EditRes['Data'][0]->gender == 'Female'){ echo "checked";} ?>><label for="Female" >Female</label>
            </div>
            <div class="col-md-6 offset-3">
                <label for="">Hobby</label><br>
                <?php 
                $hobbyData = explode(",",$EditRes['Data'][0]->hobby);
                // print_r($hobbyData) ;
                ?>
                <input type="checkbox" name="hobby[]" id="cricket" value="cricket" <?php if(in_array("cricket",$hobbyData)){ echo "checked";} ?>><label for="cricket">cricket</label>
                <input type="checkbox" name="hobby[]" id="music" value="music" <?php if(in_array("music",$hobbyData)){ echo "checked";} ?>><label for="music">music</label>
                <input type="checkbox" name="hobby[]" id="reading" value="reading" <?php if(in_array("reading",$hobbyData)){ echo "checked";} ?>><label for="reading">reading</label>

            </div>

            <div class="col-md-6 offset-4">
                <button type="submit" name="update" class="btn btn-success">Update</button>
                <!-- <button type="reset" value="Cancel" class="btn btn-danger">Cancel</button> -->
            </div>
        </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>