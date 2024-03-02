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
        <div class="right">
            <div class="task">
                <p>Task Manager</p>
                <div class="tasks">
                    <div class="input">
                        <form method="POST" action="index.php">
                            <input type="text" placeholder="search" id="task" name="task">
                            <button id="btn" name="btn">Add</button>
                        </form>

                    </div>
                    <div class="output">
                        <ul>
                            <li>Go to Walk</li>
                            <li>2hrs of Coding</li>
                            <li>Do Exercise</li>
                            <li>Take Cold Shower</li>
                            <li>Take Cold Shower</li>
                            <li>Take Cold Shower</li>
                            <li>Take Cold Shower</li>
                            <li>Take Cold Shower</li>
                            <li>Take Cold Shower</li>
                            <li>Take Cold Shower</li>
                            <li>Take Cold Shower</li>
                            <li>Take Cold Shower</li>
                            <li>Take Cold Shower</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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