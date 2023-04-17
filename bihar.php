<?php

include 'config.php';

if (isset($_POST['post_comment'])) {

	$name = $_POST['name'];
	$message = $_POST['message'];

	$sql = "INSERT INTO demo (name, message)
		VALUES ('$name', '$message')";

	if ($conn->query($sql) === TRUE) {
		echo "";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIHAR HEALTH SCHEMES</title>
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
</head>
<body>
<style>
h1{
    text-align: center;
    color: red;
}
h2{
    text-align: center;
    color: darkorange;
    
    .menu-btn {
	background-color: #040008;
	color: white;
	padding: 16px;
	font-size: 20px;
	font-weight: bolder;
	font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	border: none;
}

.menu-btn {
            background-color: #040008;
            color: white;
            padding: 16px;
            font-size: 20px;
            font-weight: bolder;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border: none;
        }

        .dropdown-menu {
            position: relative;
            display: inline-block;
        }

        .menu-content {
            display: none;
            position: absolute;
            background-color: #017575;
            min-width: 160px;
            z-index: 1;
        }

        nav {
            background-color: #017575;
        }

        .links,
        .links-hidden {
            display: inline-block;
            color: rgb(255, 255, 255);
            padding: 12px 16px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }

        .links-hidden {
            display: block;
        }

        .links {
            display: inline-block;
        }

        .links-hidden:hover,
        .links:hover {
            background-color: rgb(8, 107, 46);
        }

        .dropdown-menu:hover .menu-content {
            display: block;
        }

        .dropdown-menu:hover .menu-btn {
            background-color: #3e8e41;
        }



        body {
            background-color: rgb(202, 255, 255);
        }

    .wrapper {
	background: white;
	border-radius: 10px;
	width: 500px;
	height: 300px;
	display: flex;
	justify-content: center;
	align-items: center;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
}

.wrapper .form input {
	background: #222222;
	color: white;
	font-size: 15px;
	width: 450px;
	border-radius: 20px;
	padding: 10px;
	border: none;
	outline: none;
	margin-bottom: 10px;
	margin-top: 20px;
}

.wrapper .form textarea {
	background: #222222;
	color: white;
	font-size: 15px;
	width: 450px;
	border-radius: 20px;
	padding: 10px;
	border: none;
	outline: none;
	resize: none;
}

.wrapper .form .btn {
	background: #222222;
	color: white;
	font-size: 15px;
	border: none;
	outline: none;
	cursor: pointer;
	padding: 10px;
	width: 200px;
	border-radius: 20px;
	margin: 0 auto;
	display: block;
	margin-top: 5px;
	margin-bottom: 20px;
	opacity: 0.8;
	transition: 0.3s all ease;
}

.wrapper .form .btn:hover {
	opacity: 1;
}

.content {
	text-align: center;
	background: royalblue;
	color: white;
	padding: 10px;
	width: 500px;
	border-radius: 10px;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}

.content p {
	margin-bottom: 15px;
	width: 450px;
}
</style>
      <script src="//code.tidio.co/zsurtwbieuvgc4aj2t138ql6s6zg3ckr.js" async></script>
    <nav>
        <a class="links" href="index.html">HOME</a>
        <a class="links" href="#">CONTACT US</a>
        <a class="links" href="central.php">CENTRAL SCHME</a>
        <div class="dropdown-menu">
            <button class="menu-btn">STATES v </button>
                    <div class="menu-content">
                        <a class="links-hidden" href="up.php">Uttar Pradesh</a>
                        <a class="links-hidden" href="bihar.php">Bihar</a>
                        <a class="links-hidden" href="punjab.php"> Punjab</a>
                    </div>
        </div>
    </nav>


<h1>BIHAR HEALTH SCHEMES</h1><hr>
<img src="images/ayushman.png" height="250" width="300" align="left">
<p><h2>AYUSHMAN BHARAT BIHAR</h2><br>
    National Health Authority (NHA) is the apex body responsible for implementing India's flagship public health insurance/assurance scheme called "Ayushman Bharat Pradhan Mantri Jan Arogya Yojana" & has been entrusted with the role of designing strategy, building technological infrastructure and implementation of "Ayushman Bharat Digital Mission" to create a National Digital Health Eco-system.
    NHA is leading the implementation for Ayushman Bharat Digital Mission (ABDM) in coordination with different ministries/departments of the Government of India, State Governments, and private sector/civil society organizations.
<br><a href="https://setu.pmjay.gov.in/setu/">CLICK HERE</a>

</p><br><br>
<h2> MUKHYAMANTRI JAN AROGYA YOJNA</h2>
<img src="images/jan.jpeg" height="250" width="300" align="right"><br><br>
<p>The scheme is expected to benefit about 89 lakh households, which are not covered under PMJAY or the Ayushman Bharat Yojana.

    Similar to PMJAY, the new health insurance scheme will most likely issue a card to all the beneficiaries. The process of making these beneficiary cards will begin in May at the Suvidha Kendra or empanelled hospitals. Also, the secondary and tertiary hospitalisation costs will be sponsored by the state authorities.
    
    At present, there are a total of 904 empanelled hospitals, including 208 personal hospitals, under the Ayushman Bharat Yojana. The same hospitals will provide treatment to the beneficiary families under the Mukhyamantri Jan Arogya Yojana.<a href="https://www.livehindustan.com/bihar/story-bihar-to-start-cm-jan-arogya-yojana-crores-people-deprived-of-ayushman-bharat-scheme-will-get-free-treatment-7126474.html">click here</a> </p>

<h2>JANANI EVAM BAAL SURAKSHA YOJNA</h2><br>
<p>To improve the condition of pregnant women and newborns, the government has launched Janani Suraksha Yojana (JSY). Financial assistance to be given to mothers once they deliver. 
    On delivery of a pregnant woman in JSY, 6,000 rupees are given directly to her bank account for providing adequate nutrition to the mother and child.
<br>
<ul>
<img src="images/bal.jpeg" height="250" width="300" align="left"><br><br><br><br><br>
    Documents required to get the benefit of JSY

   <li>Aadhar Card</li> 
   <li>Voter ID Card</li> 
   <li>Delivery certificate issued by government hospital</li> 
   <li>Woman's bank account number</li> 
    
   <center>
    <div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Name">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>
	</div>

	<div class="content">
		<?php

		$sql = "SELECT * FROM demo";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while ($row = $result->fetch_assoc()) {
				?>
				<h3>
					<?php echo $row['name']; ?>
				</h3>
				<p>
					<?php echo $row['message']; ?>
				</p>

			<?php }
		} ?>
	</div>
    </center>

</ul>
</p>
</body>
</html>