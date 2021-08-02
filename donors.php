<?php include 'includes/header.php'; ?>

<html>
<head>
<title>Checkpoint - Donor Registration</title>
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
            <h3>Meet Criterias First</h3>
                <form>
                    <input class="checkpoint" type="checkbox" name="Age">
            		<label class="checkpoint" for="Age">Age (between 18 years old - 60 years old)</label><br>
                    <input class="checkpoint" type="checkbox" name="Weight">
		            <label class="checkpoint"  for="Weight">Weight (between 50kg - 170 kg)</label><br>
	                <input class="checkpoint" type="checkbox" name="BloodPressure">
	            	<label class="checkpoint" class="head"for="BloodPressure">Blood Pressure (systolic =100-180mmHg and diastolic 50-100mmHg)</label><br>
            		<input class="checkpoint" type="checkbox" name="Disease">
		            <label class="checkpoint" for="Disease">"Sufeering from any heart, liver disease, HIV AIDS?"</label><br>
		            <button class="btn btn-block" onclick="validate(event)">Submit</button>
		        </form>

		<script>
			function validate(event)
			{
				let Age=document.getElementsByName("Age")[0];

				let Weight=document.getElementsByName("Weight")[0];
				let BloodPressure=document.getElementsByName("BloodPressure")[0];
                 let Disease=document.getElementsByName("Disease")[0];
                if(Age.checked && Weight.checked && BloodPressure.checked && Disease.checked )
                    {
	                	window.location.href="donor_reg.php";
                	}
                	else 
	                	alert ("Sorry Dude! You are ineligible!");
	                    event.preventDefault();
	            		}
        </script>                                
    </div>
    </div>
</div>
</body>
<?php include 'includes/header.php';?>

<?php include 'includes/footer.php';?>
</html>
