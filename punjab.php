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
    <title>PUNJAB STATE GOVERNMENT </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
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
    <style>
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
h1{
    color: darkorange;
    text-align: center;
    text-shadow: 0cqb;
}
body{
    background-color: oldlace;
}

h2{
    text-align: center;
    color: darkred;
}

    </style>
<h1>PUNJAB STATE GOVERNMENT HEALTH SCHEMES</h1><hr><br><br>
<h2>Jan Aushadhi Health Scheme</h2>
<img src="images/aus.webp" height="300" width="350" align="left">
<p>A Government of India Campaign, under which it was planned to provide cheaper, non-branded essential medicines through dedicated outlets in all District Hospitals of Punjab was launched in December 2008. Objectives of Jan Aushadhi: To promote awareness about cost effective drug prescribing.<br><br>
<ul>
    Mission<br><br>

   <li>Create awareness among public regarding generic medicines.</li> 
    <li>Create demand for generic medicines through medical practioners.</li>
    <li>Create awareness through education and awareness program that high price need not be synonymous with high quality.</li>
    <li>Provide all the commonly used generic medicines covering all the therapeutic groups.</li>
    <li>Provide all the related health care products too under the scheme.</li>
    <li>Vision:
    
        To bring down the healthcare budget of every citizen of India through providing Quality generic Medicines at Affordable Prices.<br><a href="http://janaushadhi.gov.in/pmjy.aspx">CLCIK HERE</a></li>
        <br><br<br>

<h2>Punjab Nirogi Society</h2>
<img src="images/p.jpeg" height="300" width="440" align="left">
<p><br><br>Punjab Nirogi Yojna (DHS-3)<br>
    (Centre Share 33%: State Share 66%)<br>
    
    In order to provide financial assistance to poor patient’s particularly living poverty line who is suffering from major life threatening disease to receive medical treatment at any of the Super Specialty Hospital/ Institute under the Government or other Government Hospitals, the State Government decided to set up State Illness Fund under the Centrally Sponsored Scheme. As per the requirement of the Government of India, an independent society, has been got registered under Society Registration Act 1860 under the name & Style of “PUNJAB NIROGI SOCIETY” (PNS) in the year 2007-08 (August).
    <br><br><br><a href="https://phsc.punjab.gov.in/en/schemesprogramspunjab-nirogi-society/overview-of-scheme">CLCIK TO KNOW MORE</a>


    
</p>

</ul>
</p>

<br><br><br><br><br><br><br><br><br>
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