<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>

    </div><!-- End Page Title -->




    <!-- 
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div> -->

    <div class="card-body">
        <h2 class="card-title text-center "> <b>View ALL Users </b></h2>

        <table class="table table-borderless datatable">
            <thead>
                <tr>
                    <th scope="col">Sr No</th>
                    <th scope="col">fullname</th>
                    <th scope="col">email</th>
                    <th scope="col">gender</th>
                    <th scope="col">hobby</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // echo "<pre>";
                // print_r($viewRes['Data']);
                // echo "</pre>";
                $i = 0;
                foreach ($viewRes['Data'] as $key => $value) {
                    $i++; ?>
                    <tr>
                        <th><?php echo $i ?></th>
                        <td><?php echo $value->fullname; ?></td>
                        <td><?php echo $value->email; ?></td>
                        <td><?php echo $value->gender; ?></td>
                        <td><?php echo $value->hobby; ?></td>
                        <td>
                            <a class="badge bg-success" href="edit?userid=<?php echo $value->id; ?>">Edit</a>
                            <a class="badge bg-danger" href="delete?userid=<?php echo $value->id; ?>">Delete</a>

                        </td>
                    </tr>

                <?php  }
                ?>

            </tbody>
        </table>

    </div>

    </div>
    </div><!-- End Recent Sales -->