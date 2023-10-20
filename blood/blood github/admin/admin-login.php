<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

         <!-- logo  -->
         <link rel="icon" href="../logo.png" type="image/icon type">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>Admin Login</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Oswald', sans-serif;
            font-family: 'Tiro Gurmukhi', serif;
            font-family: 'Ubuntu', sans-serif
                /* font-size: 18px; */
                /* background-color: #24252A; */
        }

        header a {
            color: white;
            text-decoration: none;
        }

        header {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;

            height: 50px;
            background-color: red;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 10px 3%;

        }

        .logo {
            cursor: pointer;
            margin-right: auto;


        }

        .nav__links {
            list-style: none;
        }

        .nav__links li {
            margin: 0px 2px;
            display: inline-block;
            padding: 0px 30px;
        }

        .nav__links li a {
            transition: all 0.3s ease 0s;
        }

        .nav__links li a:hover {
            color: gray;
        }

        header a:hover {
            color: white;
        }


        .back-color {

height: 745px;
padding-top: 45px;

border-radius: 0px;
background: linear-gradient(to top right, #08aeea 0%, #b721ff 100%);
}

.conten {


border-radius: 20px;
background-color: white;
max-width: 730px;
height: 470px;
margin: 65px auto;
box-sizing: border-box;
padding: 0;
display: block;

}

.card-cont {
display: flex;
flex-direction: column;
position: relative;
}

.card-heading {
background-color: black;
padding: 20px 0;
border-radius: 8px;
}

.card-heading h1 {
color: white;
text-align: center;
text-transform: uppercase;
font-size: 24px;

}

.form-body {
padding: 30px 70px;
padding-bottom: 73px;
}

.in {

/* padding: -10px 14px; */
height: 50px;
margin: 63px 19px;

}

.in-sty {
width: 432px;
height: 39px;
padding: 20px;
margin-left: 22px;
border-radius: 7px
}
    </style>

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>


    <header>


        <a href="../index.html" class="logo"> <i class="fas fa-heartbeat"
                style='font-size:23px;color:white'></i>
            <b style="font-size: 23px">&nbsp;Blood Bank Management</b></a>

        <nav>

            <ul class="nav__links" style="margin-top: 14px">
                <li><a href="../index.html"><i class="fas fa-home"></i>&nbsp;Home</i></a></li>



                <li><a href="../patient/patient-login.html"><i class="fas fa-procedures"></i>&nbsp; Patient</i></a>
                </li>
                <li><a href="../donor/donor-login.php"><i class="fas fa-user"></i>&nbsp; Donor</i></a>
                </li>
                <li><a href="admin-login.php"><i class="fas fa-user-shield"></i>&nbsp; Admin</i></a>
                </li>
            </ul>
            </div>
        </nav>

    </header>


    <!-- <h1>Admin Login</h1><br>
   

    <form action="" method="post"> 
    <div class="container" >
        <div class="item">
            <label for="username">Username</label>
            <input type="text" name="un" id="username" placeholder="Username">
        </div>
        <div class="item">
            <label for="password">Password</label>
            <input type="password" name="ps" id="password" placeholder="Password">
        </div>

        <input type="submit" value="login" name="sub" class="btn">
    </div>
    </form> -->



    <div class="back-color">
   
        <div class="conten">
            <div class="card-cont">
                <div class="card-heading">
                    <h1>Admin Login</h1>
                </div>
                <?php if(isset($_GET['error'])){?> 
                    <p> <?php echo $_GET['error']?></p>
                <?php }?>
                <div class="card-body">

                    <form method="post" action="login.php">
                        <div class="form-body">
                            <div class="in">
                                <label for="username" style="font-size: 18px">Username</label>
                                <input type="text"  name="uname" id="username" autofocus placeholder="Username" class="in-sty">
                                
                            </div>
                            <div class="in">
                                <label for="password" style="font-size: 18px">Password</label>
                                <input type="password" name="pass"  id="password" placeholder="Password" class="in-sty">
                                
                            </div>

                            <div style=" margin-left: 17px;
                height: 26px;">
                              <button type="submit" name="submit" class="btn btn--radius-2 btn-danger"    style="width: 94px;
                              height: 42px;">Login</button>
                                <!--<a href="admin-home.html"  class="btn btn--radius-2 btn-danger"    style="width: 94px;
                                height: 42px;">login</a>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>