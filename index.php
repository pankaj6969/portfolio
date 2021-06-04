<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">
    <style>
        nav{
            font-family: 'Goblin One', cursive;
        }
        @media only screen and (max-width: 200px) {
        body {
          width:200px;
        }
        }
    </style>
    <title>Pankaj Jaiswal</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg m-0 navbar-dark sticky-top bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-4" href="index.php">P J</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contact">Contact Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
        if(isset($_POST['Submit']))
        {
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "portfolio");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $name =  $_POST['Name'];
        $email = $_POST['Email'];
        $subject =  $_POST['Subject'];
        $message = $_POST['Message'];
    
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO contact  VALUES ('$name', 
            '$email','$subject','$message')";
          
        if(mysqli_query($conn, $sql)){
            echo"<div class='alert my-0 alert-danger conatiner-sm alert-dismissible fade show' role='alert'>
            Your Message was send.
          </div>";
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        }
?>
    <!-- home -->
    <section id="home" class=" home ">
        <div class="container-lg">
            <div class="row  min-vh-100 align-items-center align-content-center">
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="home-img text-center">
                        <img src="images/paasport.png" class="rounded-circle mw-100" alt="My Photo">
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0 order-md-first">
                    <div class="home-text">
                        <p class="text-muted mb-1">Hello I'm</p>
                        <h2 class="text-danger text-uppercase fs-1 fw-bold">technical student</h2>
                        <p class="fs-4">Pankaj Jasiwal</p>
                        <p class="mt-4 text-muted">I want to Secure a responsible career opportunity to fully utilize my
                            training and skills, while making a Significant contribution to the success of the company.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about page -->
    <div id="about" class="container-lg">
        <div class="row  min-vh-100 align-items-center align-content-center">
            <h3 class="text-center text-uppercase my-0 fw-bold">about me</h3>
            <div class="col-md-6 mt-3 mt-md-0">
                <div class="home-text">
                    <h3 class="text-danger text-uppercase fs-1 fw-bold ">Education</h3>
                    <h2 class="text-muted mb-1 ">BACHELOR Degree In Mining Engineering</h2>
                    <p class="fs-4">NATIONAL INSTITUTES OF TECHNOLOGY RAIPUR</p>
                    <p class=" text-muted">Current CPI: 7.40</p>
                </div>
                <div class="col-md-6 mt-5 mt-md-0 ">
                    <div class="home-text">
                        <h2 class="text-muted mb-1 ">Higher Education</h2>
                        <p class="fs-4">JAWAHAR NAVODAYA VIDAYALAYA BILASPUR</p>
                        <p class=" text-muted">12th (2018): 89% 10th (2016): 9.4 CGPA
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0 ">
                <div class="home-text">
                    <h3 class="text-danger text-uppercase fs-1 fw-bold "> Technical Skills</h3>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 85%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">HTML</div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">CSS</div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width:50%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">JavaScript</div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">Bootstrap
                        </div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">PHP
                        </div>
                    </div><BR>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">SQL
                        </div>
                    </div><BR>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">C++
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger my-3"><a style="text-decoration: none; color: white;"
                        href="files/Pankaj jasiwal CV.pdf" download>DOWNLOAD CV</a></button>
            </div>
        </div>
    </div>
    <!-- conatct page -->
    <div id="contact" class="container-lg fw-bold">
        <h3 class="text-center">CONTACT ME</h3>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="NAME" class="form-label">NAME</label>
                <input type="text" name="Name" class="form-control" id="NAME" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label  text-uppercase">Email address</label>
                <input type="email" name="Email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-uppercase">subject</label>
                <input type="text" name="Subject" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="textarea" class="form-label text-uppercase">write Message...</label>
                <textarea name="Message" class="form-control" id="textarea" rows="3" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" name="Submit" class="btn btn-danger" onclick="alretbox" >Submit</button>
            </div>
            <div class="text-center">
            <button type="reset" class="btn btn-danger my-2">Reset</button></div>
        </form>
    </div>
    <!-- footer -->
    <DIV class="bg-danger  my-2 text-center">
        <a
            href="https://www.linkedin.com/in/pankaj-jaiswal-48124319b?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BKf56j%2FkHSWq%2FZDzvr99s3A%3D%3D"><img
                class="img-fluid" width="50px" src="images/linkedin.png" alt="linkedin"></a>
        <a href="https://www.instagram.com/jaiswal_pankaj_1/"><img class="img-fluid" width="50px"
                src="images/instagram.png" alt="instagram"></a>
        <a href="mailto: jaiswalpankajji@gmail.com"><img class="img-fluid" width="50px"
                src="images/message-outline-xl.png" alt="email"></a>
    </DIV>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script>
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }      
    </script>

</body>


</html>