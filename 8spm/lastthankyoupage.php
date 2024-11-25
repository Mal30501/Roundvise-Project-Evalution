<!DOCTYPE html>
<html?>
<head>
	<title>Login</title>
  
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>
<body style="height:100vh; position:relative;">


<div class="container" style="top: 50%; position: absolute; left: 50%; transform: translate(-50%, -50%);">
<h3 class="ms-5">Thank You Your response has been submitted</h3>
                    <small class="ms-5 ps-5">You will be redirected to Main page in 5 second</small>
</div>
                    <script>
                        $(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "index.php";
    }, 5000);
});
                    </script>
</body>
</html>