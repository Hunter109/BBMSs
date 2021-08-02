<?php include 'includes/header.php'; ?>

<html>
<head>
<title>D0NOR REGISTRATION FORM</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Cleaning Company Website Template" name="keywords">
        <meta content="Cleaning Company Website Template" name="description">

        <!-- Favicon -->
        <link href="assets/images/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="hero row align-items-center">
    <div class="col-md-7">
        <h2>Emergency Case</h2>
        <h2><span>Donate Blood </span> On Demand!</h2>
        <p>Your Blood Could Save a Life. Make a Different & Donate Blood.</p>
        <a class="btn" href="">Explore Now</a>
    </div>

    <!-- Before Login starts -->
<div class="col-md-5">
    <div class="form">
    <h3>Donor Registration form</h3>
    <form>
        <input class="form-control" type="text" placeholder="Your Name" required>
        <input class="form-control" type="text" placeholder="Age" required>
        <input class="form-control" type="email" placeholder="Email Address" required>
        <input class="form-control" type="textarea" placeholder="Address" required>
        <input class="form-control" type="number" placeholder="Mobile Number" required>
            <div class="control-group">
            <select class="custom-select">
                <option selected>A (+ve)</option>
                <option value="1">A (-ve)</option>
                <option value="1">AB (+ve)</option>
                <option value="1">AB (-ve)</option>
                <option value="1">B (+ve)</option>
                <option value="1">B (-ve)</option>
                <option value="1">O (+ve)</option>
                <option value="1">O (-ve)</option>
            </select>
            </div>
        <div class="control-group">
            <select class="custom-select">
                <option>Male</option>
                <option>Female</option>
                <option>Xakka</option>
            </select>
        </div>
    <button class="btn btn-block">Submit</button>
    </form>
    </div>
    </div>
</div>
</body>
<?php include 'includes/footer.php';?>
</html>
