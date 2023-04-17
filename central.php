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
    <title>Central Schemes</title>
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
h1 {
            text-align: center;
            color: crimson;
        }

        h2 {
            color: red;
        }

        p {
            color: rgb(243, 243, 255);
        }

        .image {
            display: inline-block;
            position: relative;
            width: 400px;
            left:9em; 
        }

        .image__img {
            display: block;
            width: 100%;
            
        }

        .image__overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            color: #ffffff;
            font-family: 'Quicksand', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.25s;
        }
        
        .image__overlay--blur {
	backdrop-filter: blur(5px);
}

        .image__overlay>* {
            transform: translateY(20px);
            transition: transform 0.25s;
        }

        .image__overlay:hover {
            opacity: 1;
        }

        .image__overlay:hover>* {
            transform: translateY(0);
        }

        .image__title {
            font-size: 2em;
            font-weight: bold;
        }

        .image__description {
            font-size: 1.25em;
            margin-top: 0.25em;
        }
</style>
</head>

<body style="margin-top: -0px;margin-left: -0px;margin-right: 0px;margin-bottom: 0px;">
    <script src="//code.tidio.co/zsurtwbieuvgc4aj2t138ql6s6zg3ckr.js" async></script>
    <nav>
        <a class="links" href="index.php">HOME</a>
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
    <h3>
    <p style="padding: 2em;color: darkblue">Public Health is a State subject; hence, the responsibility of providing medical assistance to patients of all income group is of respective State/ UT Governments. However, National Health Mission (NHM) – a flagship programme of the Ministry with its two Sub-Missions, National Rural Health Mission (NRHM) and National Urban Health Mission (NUHM), supports States /UTs to strengthen their health care systems so as to provide universal access to equitable, affordable and quality health care services. <br><br>


        The schemes launched under NHM are available free of cost to all income groups visiting in Public Health Facilities at sub district and district level are given below <br><br>
        
        The following programmes/ schemes are run by government under National Health Mission:
        <br><br> 
        </h3>
    </p>

    <h1>National Health Schemes</h1>
    <hr style="height:3px;border-width:0;color:gray;background-color:gray; width:85%"> 
    <br><br>

    <div class="image" >
        <a href="https://nhm.gov.in/index4.php?lang=1&level=0&linkid=150&lid=171" >

            <img class="image__img" src="images/janani_shishu.png" height="250px" width="300px" alt="janani_shishu">
            <div class="image__overlay image__overlay--blur ">
                <div class="image__title">Janani Shishu Suraksha Karyakaram</div>
                <p class="image__description">
                    Entitles all pregnant women delivering in public health institutions to absolutely free and no expense delivery including Caesarean section.
                </p>
            </div>
        </a>
    </div>

    <div class="image">
        <a href="https://nhm.gov.in/index1.php?lang=1&level=2&sublinkid=824&lid=220">
            <img class="image__img" src="images/indradhanush.jpeg" height="250px" width="300px" alt="indradhanush">
            <div class="image__overlay image__overlay--blur ">
                <div class="image__title">Mission Indradhanush</div>
                <p class="image__description">
                    Expanding immunization coverage to all children across India
                </p>
            </div>
        </a>
    </div>

    <div class="image">
        <a href="https://nhm.gov.in/index4.php?lang=1&level=0&linkid=499&lid=773">
            <img class="image__img" src="images/rbsk-2020.webp" height="250px" width="300px" alt="rbsk">
            <div class="image__overlay image__overlay--blur ">
                <div class="image__title">Rashtriya Bal Swasthya Karyakram</div>
                <p class="image__description">
                    Screening of children from birth to 18 years of age for four Ds- Defects at birth, Diseases, Deficiencies and Development delays
                </p>
            </div>
        </a>
    </div>

    <div class="image"  >
        <a
            href="https://nhm-gov-in.translate.goog/index4.php?lang=1&level=0&linkid=152&lid=173&_x_tr_sl=en&_x_tr_tl=hi&_x_tr_hl=hi&_x_tr_pto=tc">

            <img class="image__img" src="images/kishore.jpeg" height="250px" width="300px" alt="kishore">
            <div class="image__overlay image__overlay--blur ">
                <div class="image__title">Rashtriya Kishor Swasthya Karyakram</div>
                <p class="image__description">
                    Promotion of adolescent health mission across India
                </p>
            </div>
        </a>
    </div>

    <div class="image">
        <a href="https://nhm.gov.in/index1.php?lang=1&level=3&sublinkid=1054&lid=230">

            <img class="image__img" src="images/National Iodine Deficiency Disease.png" height="250px" width="300px" alt="National Iodine Deficiency Disease">
            <div class="image__overlay image__overlay--blur ">
                <div class="image__title">National Iodine Deficiency Disorders Control Programme</div>
                <p class="image__description">
                    To prevent Iodine Deficiency Disorders like the incidence of Goitre: Physical & Mental disorders cretinism & deaf mutism etc. in the State
                </p>
            </div>
        </a>
    </div>
    
    <div class="image">
        <a href="https://nhm.gov.in/index1.php?lang=1&level=2&sublinkid=1043&lid=359">

            <img class="image__img" src="images/maxresdefault.jpg" height="250px" width="300px" alt="National Iodine Deficiency Disease">
            <div class="image__overlay image__overlay--blur ">
                <div class="image__title">National Mental Health Programme</div>
                <p class="image__description">
                    To encourage the application of mental health knowledge in general healthcare and in social development,community participation in the mental health service development and to stimulate efforts towards self-help in the community
                </p>
            </div>
        </a>
    </div>

    <h3><p style="padding: 2em;color: darkblue">and many more......</p></h3>
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