<?php

$conn = mysqli_connect("localhost", "root", "", "dashboard2");
$query = "SELECT * FROM `my_details`";
$excute_query = mysqli_query($conn, $query);
$excute_data = mysqli_num_rows($excute_query);
for ($i = 1; $i <= $excute_data; $i++) {
    $yash = mysqli_fetch_row($excute_query);
}
//print_r($excute_query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Designed by Dr.Yash Nagar-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dashboard</title>
    <!-- Add Bootstrap CSS Link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom CSS -->

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3">
                <h2>Sidebar</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">Menu 1</a></li>
                    <li class="list-group-item"><a href="#">Menu 2</a></li>
                    <li class="list-group-item"><a href="#">Menu 3</a></li>
                </ul>
                <h2>My Social Profiles</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="http://sites.google.com/view/vishalsolanki2122/home" target="_blank">Google Site</a></li>
                    <li class="list-group-item"><a href="https://www.linkedin.com/in/vishal-solanki-bb558a285?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank">LinkedIn</a></li>
                    <li class="list-group-item"><a href="https://www.blog.com" target="_blank">Blog</a></li>
                    <li class="list-group-item"><a href="https://github.com/vishalsolanki2122/web_dev_php" target="_blank">GitHub</a></li>
                </ul>
            </nav>
            <!-- Main content -->
            <main class="col-md-9">
                <div id="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class=" ">My Dashboard</h1>
                            </div>
                            <div class="col-md-6">
                                <img src="img/kgf_main.png" alt="Logo" width="90" class="float-end redi">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="dashboard-item">
                        <div id="about-me" class="section-title">
                            <h2>About Me</h2>
                        </div>
                        <?php echo $yash[0] ?>
                    </div>
                </div>
                <!-- This is skill database -->
                <?php
                $conn = mysqli_connect("localhost", "root", "", "dashboard2");
                $query = "SELECT * FROM `skill_set`";
                $excute_query1 = mysqli_query($conn, $query);
                $excute_date1 = mysqli_num_rows($excute_query1);
                for($i=0;$i<=3;$i++)
                {
                       $yash1 = mysqli_fetch_row($excute_query1);
                }
                ?>
                <div class="dashboard-item">
                    <div id="my-skillset" class="section-title">
                        <h2>My Skillset</h2>
                    </div>
                    <ul>
                          <li><?php echo $yash1[0] ?></li>
                             
                    </ul>
                </div>
                <div class="dashboard-item">
                    <div id="assignments" class="section-title">
                        <h2>Assignments</h2>
                    </div>
                    <div class="btn-group">
                        <a href="https://github.com/vishalsolanki2122/web_dev_php/tree/main/task1" target="_blank"><button class="ocean-blue-button gradient-button">Task 1</button></a>
                        <a href="https://github.com/vishalsolanki2122/web_dev_php/tree/main/task2" target="_blank"><button class="sunset-orange-button gradient-button">Task 2</button></a>
                        <a href="https://github.com/vishalsolanki2122/web_dev_php/tree/main/task%203" target="_blank"><button class="spring-green-button gradient-button">Task 3</button></a>
                        <button class="royal-purple-button gradient-button">Task 4</button>
                        <button class="ruby-red-button gradient-button">Task 5</button>
                        <button class="goldenrod-yellow-button gradient-button">Minor Project Module</button><br>

                        <button class="spring-green-button gradient-button">Database Module</button>
                    </div>
                </div>
                <div class="dashboard-item">
                    <div id="project-details" class="section-title">
                        <h2>My Project Details</h2>
                    </div>
                    <?php echo $yash[2] ?>
                </div>
        </div>
        </main>
    </div>
    </div>

    <div id="footer">
        <h3>My Dashboard</h3>
        <img src="img/kgf_main.png" alt="Footer Logo" width="100" class="redi">
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>