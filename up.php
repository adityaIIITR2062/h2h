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
    <title>Uttar Pradesh Schemes</title>
    <link rel="stylesheet" href="css./styles.css">

</head>
<body>
    <style>
h1{
    text-align: center;
    color: tomato;
}
body{
    background-color: aqua;
    color: green;
}
h2{
    text-align: center;
    color: darkred
}
.text{
    color: blue;
    
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
<h1>UTTAR PRADESH HEALTH SCHEMES</h1>  <hr>  
<img src="images/lic.jpg" height="250" width="300">
<img src="images/icds.jpg"height="250" width="300">
<img src="images/adlo.jpeg"height="250" width="300">
<img src="images/nvb.jpg"height="250" width="310">

<h2>AAM AADMIN BIMA YOJNA</h2>
<p>
    
    The Aam Aadmi Bima Yojana covers natural death/accidental death, permanent total disability, and partial permanent disability. The scheme provides coverage to individuals residing in rural areas and individuals who are below the poverty line.
    For those who work in various occupations like carpentry, fishing, handloom weaving, etc., the Aam Aadmi Bima Yojana (AABY) is designed. There are 48 defined occupations that exist as per this policy scheme’s wordings. AABY and Janashree Bima Yojana (JBY) were two Health schemes of a similar sort that existed before to 2013, both were combined after 2013. For a Rs.30,000 insurance coverage, the annual premium is Rs.200. The qualifying requirements for this policy are that you must be a family head or a family earner (income at or below the poverty line) and be employed in one of the 48 listed vocations.
    TO KNOW MORE CLICK ON:<a href="https://www.bankbazaar.com/health-insurance/aam-aadmi-bima-yojana.html#:~:text=The%20Aam%20Aadmi%20Bima%20Yojana,are%20below%20the%20poverty%20line.">CLICK HERE</a> 


</p>
<h2>INTEGRATED CHILD DEVELOPMENT SERVICES</h2>
<p> The beneficiaries under the Scheme are children in the age group of 0-6 years, pregnant women and lactating mothers. Objectives of the Scheme are:
<ul>
 <li>to improve the nutritional and health status of children in the age-group 0-6 years;</li>   
    
  <li>to lay the foundation for proper psychological, physical and social development of the child;</li>  
    
   <li>to reduce the incidence of mortality, morbidity, malnutrition and school dropout;</li> 
    
   <li>to achieve effective co-ordination of policy and implementation amongst the various departments to promote child development;</li>  
    
  <li>to enhance the capability of the mother to look after the normal health and nutritional needs of the child through proper nutrition and health education.

  </li>  
  TO KNOW MORE:<a href="http://icds-wcd.nic.in/">CLICK HERE</a>
</ul>
</p>
<h2>ADLOSCENT HEALTH AWARENESS PROGRAM</h2>
<p>We identified five key areas in which students needed to be educated. They are:

    <ul>
        <li>Nutrition</li>
      <li>Sexual and Reproductive Health</li>  
      <li>Substance Misuse</li>   
       <li>Mental Health</li>   
         <li>Physical Health and Well Being<br><a href="https://www.youthforseva.org/Adolescent-Health-and-Awareness-Programs">CLICK TO KNOW </a></li>  
</ul></p>
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
    
		<p style="background-color: #060606;
        padding: 20px;
        text-align: center;
        font-size: 14px;
        color: #ffffff;
        position:bottom;
        bottom: 0;
        width: 100%;margin-bottom: 0px;">Copyright &copy; 2023 | Code Leapers</p> 

</body>
</html>