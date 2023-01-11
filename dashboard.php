<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body{
            background-image: url('background.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container{
            width: 100%;
            margin: auto;
            margin-top: 150px;
        }
        h1{
            text-align: center;
        }
        .section{
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php session_start(); ?>

<nav class="navbar navbar-expand-sm  bg-white navbar-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="/edusogno_test/">
      <img src="assets/logo.png" alt="Logo" style="width:140px;">
    </a>
  </div>
</nav>

<div class="container">
    <h1 class="title">Hello <?php echo $_SESSION['email']?> here are your events</h1>

<div class="row">
  <div class="col">
    <div class="section w3-card-4 w3-round-xxlarge" style="width: 350px">
        <div class="card-body">
            <h4 class="card-title">Go Cinema with your close frined</h4>
            <p class="card-text">15-10-2022 15:00</p>
            <div class="d-grid gap-3 mb-2 mt-2">
                <a href="#" class="btn btn-primary">Join</a>
            </div>
            
        </div>
    </div>
  </div>
  <div class="col">
    <div class="section w3-card-4 w3-round-xxlarge" style="width: 350px">
        <div class="card-body">
            <h4 class="card-title">Have a meeting for your project</h4>
            <p class="card-text">15-10-2022 15:00</p>
            <div class="d-grid gap-3 mb-2 mt-2">
                <a href="#" class="btn btn-primary">Join</a>
            </div>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="section w3-card-4 w3-round-xxlarge" style="width: 350px">
        <div class="card-body">
            <h4 class="card-title">Prepare second son's birthday</h4>
            <p class="card-text">15-10-2022 15:00</p>
            <div class="d-grid gap-3 mb-2 mt-2">
                <a href="#" class="btn btn-primary">Join</a>
            </div>
        </div>
    </div>
  </div>
</div>
    
    

<div>

</body>
</html>   