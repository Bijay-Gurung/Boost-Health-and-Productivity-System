<?php
// Form Validation
$task = "";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(empty($_POST["task"])){
        echo "<script>alert('Empty task cannot be added');</script>";
    }else{
        //Database Configuration
        $db_host = 'localhost';
        $db_username = 'root';
        $db_pass = '';
        $db_name = 'taskmanager';
        
        //Database Connection
        $db = new mysqli($db_host,$db_username,$db_pass,$db_name);
        //Check Connection
        if($db->connect_error){
            die("Connection failed" .$db->connect_error);
        }
        
        //Inserting tasks into database
        $task = $_POST["task"];
        
        //Prepare and bind the statement to prevent SQL injection
        $stmt = $db->prepare("INSERT INTO tasks (task) values (?)");
        $stmt->bind_param('s',$task);
        
        if($stmt->execute()){
            echo"<script>alert('Task Added Successfully');</script>";
        }else{
            echo"<script>alert('Connection failed' ".$db->error."');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h2>Boost Productivity<br>& Health</h2>
        <nav>
            <div class="dateTime">
                <div class="Date">
                    <p id="day"></p>
                    <p id="date"></p>
                </div>
                
                <div class="Time">
                    <p id="time">6:12:54<span id="session">Am</span></p>
                    <p id="notification"><i class="fa-regular fa-bell" style="color: #555555;"></i></p>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="left">
            <div class="goals">
                <img src="img/solo.jpg" width="100px" height="200px">
                <button onclick="myGoals()">Goals<i class="fa-solid fa-bullseye" style="color: #ffffff;"></i></button>
            </div>
        </div>

        <div class="mid">
            <h1><span id="change">|</span> Bijay,<br><span id="changeText">Welcome Back</span></h1>
            <div class="gif">
                <img src="GIf/Books.gif" height="200px" width="250px">
            </div>
        </div>

        <?php
        echo "<div class='right'>";
            echo"<div class='task'>";
                echo"<p>Task Manager</p>";
                echo"<div class='tasks'>";
                    echo"<div class='input'>";
                        echo"<form method='POST' action='index.php'>";
                            echo"<input type='text' placeholder='search' id='task' name='task'>";
                            echo"<input type='submit' id='submit' name='submit' value='Add'>";
                        echo"</form>";

                    echo"</div>";
                    ?>
                    <?php
                    // Database Configuration
                    $db_host = 'localhost';
                    $db_username = 'root';
                    $db_pass = '';
                    $db_name = 'taskmanager';

                    // Database connection
                    $db = new mysqli($db_host,$db_username,$db_pass,$db_name);
                    
                    // Check Database Connection
                    if($db->connect_error){
                        die("Connection failed" .$db->connect_error);
                    }

                    $sql = "SELECT * FROM `tasks`";
                    $result = $db -> query($sql);
                    echo"<div class='output'>";
                    if($result->num_rows > 0){
                        echo"<ul>";
                        $index = 0; // $index is used to give unique identifier
                            while($row= $result->fetch_assoc()){
                                $index++;
                                echo "<div class='new'>";
                                echo"<input type='checkbox' id='check$index' onclick='completeTask($index)'>";
                                echo"<li id='tasklist$index'>".$row["task"]."</li>";
                                echo"<button type='submit' id='delete'><i class='fa-solid fa-trash' style='color: #000000;'></i></button>";
                                echo"<br>";
                                echo"</div>";
                            }
                        echo"</ul>";
                        echo"";
                    }
                    echo"</div>";
                echo"</div>";
            echo"</div>";
        echo"</div>";
        ?>
    </section>
    <footer>
        <div class="box fitness"></div>
        <div class="box meal"></div>
        <div class="box tracking"></div>
    </footer>
    <script src="https://kit.fontawesome.com/4f9d824da5.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>