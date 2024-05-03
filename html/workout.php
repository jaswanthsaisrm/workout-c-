<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login & Registration | Codehalx</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <header>
       <h2 class="logo">fit-HUB</h2>
       <nav class="navigation">
        <button class="btnlogin-popup" id="loginButton">Login</button>
        <button class="btnlogin-popup" id="registerButton">sign up</button>
       </nav>
    </header>
    <!-- Login Wrapper -->
    <div class="wrapper" id="loginWrapper" style="display: none;">
        <div class="form-box" style="color: aliceblue;">
            <h2 style="color: aliceblue;">Login</h2>
            <br>
            <form action="home.html" me>
                <div>
                    <input type="text" name="username" id="username" class="name">
                    <label for="username">Username</label>
                </div>
                <br>
                <div>
                    <input type="password" name="password" id="password" class="name"> 
                    <label for="password">Password</label>
                </div>
                <br>
                <div>
                   <input class="submit" type="submit" value="Login">
                </div>
                <br>
                <div>
                  <p>Do no have an account?<a href="">register here</a> </p>
                 </div>
            </form>
        </div>
    </div>
    
    <!-- Registration Wrapper -->
    <div class="wrapper" id="registerWrapper" style="display: none;">
    <?php
error_reporting(E_ALL); 
if (isset($_POST["submit"])) {
    echo "Form submitted successfully!<br>";
    print_r($_POST); 

    $name = $_POST["name"];
    $password = $_POST["password"];
    $repeat = $_POST["repeat"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $weight = $_POST["weight"];
    $goal = $_POST["goal"];

    $errors = array();

    if (empty($name) || empty($password) || empty($repeat) || empty($email) || empty($gender) || empty($weight) || empty($goal)) {
        array_push($errors, "All fields are required");
    }
    if ($password !== $repeat) {
        array_push($errors, "Password does not match");
    }
    if (count($errors)>0) {
        echo "<div class='alert alert-danger'>Errors:</div>";
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
}
?>



        <div class="form-box" style="color: aliceblue;">
            <h2 style="color: aliceblue;">Register</h2>
            <br>
            <form action="workout.php" method="post">
                <div>
                    <input type="text" name="name" id="name" class="name">
                    <label for="name">Name</label>
                </div>
                <br>
                <div>
                    <label for="password">password</label><br>
                    <input type="password" name="password" id="password" class="name">
                </div>
                <br>
                <div>
                    <label for="repeat">repeat password</label><br>
                    <input type="password" name="repeat" id="repeat" class="name">
                </div>
                <br>
                <div>
                    <label for="gender">Gender</label><br>
                    <select name="gender" id="gender" class="name">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="weight" >Weight (kg)</label><br>
                    <input type="number" name="weight" id="weight" class="name">
                </div>
                <br>
                <div>
                    <label for="goal">Goal</label><br>
                    <select name="goal" id="goal" class="name">
                        <option value="lose_weight">Lose Weight</option>
                        <option value="gain_muscle">Gain Muscle</option>
                    </select>
                </div>
                <br>
               
                <br>
                <div>
                <input class="submit" type="submit" name="submit" value="Submit">

                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#loginButton").click(function() {
                $("#loginWrapper").show();
                $("#registerWrapper").hide();
            });

            $("#registerButton").click(function() {
                $("#loginWrapper").hide();
                $("#registerWrapper").show();
            });
        });
    </script>
</body>
</html>
