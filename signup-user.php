<?php require_once "login.php"; ?>

<head>
<style>
        
        button a{
            color: #000;
            font-weight: 500;
            
        }
        button a:hover{
            text-decoration: none;
            color: black;
        }
        </style>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
<div class="text">
               <h2 class="text-white display-6">"Tell me and i forget. Teach me and I remember. Involve me and I learn."</h2>
               <h2 class="text-white display-6">- Benjamin Franklin</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                <button type="button" class="btn btn-light"><a href="land.php">Back</a></button>
                    <h2 class="text-center">Signup</h2>
                    <p class="text-center">It's quick and easy.</p>
                   
                      
                 
                    <div class="form-group">
                        <input class="form-control" type="text" name="fname" placeholder="Firstname" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="lname" placeholder="Lastname" required>
                    </div>
                    <input class="form-control" type="text" name="course" placeholder="Course" required>
                    </div>
                    <input class="form-control" type="text" name="section" placeholder="Section" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <label for="">Sign up As</label>
          <select name="login" id="" class="custom-select custom-select-sm">
            <option value="3">Student</option>
            <option value="2">Faculty</option>
            <option value="1">Admin</option>
          </select>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
                    <div class="link login-link text-center">Already have an account? <a href="login.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>