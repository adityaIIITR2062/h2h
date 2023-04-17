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
    <title>Nation Health💝👨‍⚕️</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        h1 {
            color: red;
            text-align: center;
            font-size: xx-large;
        }

        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        .row::after {
            content: "";
            display: table;
            clear: both;

            button {
            background-color: rgb(154, 127, 132);
            font-size: 40px;
            padding: 1px;
            border-radius: 10px;
            position: absolute;

            top: 90%;
            left: 38%;

            font-weight: bold;


        }

        reg {
            background-color: rgb(154, 127, 132);
            font-size: 40px;
            padding: 1px;
            border-radius: 10px;
            position: absolute;

            top: 0%;
            left: 10%;
            font-weight: bold;

        }
    </style>
</head>

<body background="images/d.jpg" height="400" width="1200">
    <section class="slider-wrapper">
        <div class="slider-track">

            <div class="slide">

                <img src="images/" alt="">
            </div>
        </div>

    </section>
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

    

    <h1><b><u><big>NATION HEALTH</big></u></b></h1><br>

    <div class="row">
        <div class="column">
            <img src="images/im.png" height="200" width="400" img src="images/im.png">
        </div>
        <div class="column">
            <img src="images/covid.jpg" height="200" width="400" img src="images/im.png">
        </div>
        <div class="column">
            <img src="images/dose.jpg" height="200" width="400" img src="images/im.png">
        </div>

    </div>
    <div class="container"><br>


    </div>
    <script>
        alert("WELCOME!");
    </script>
    <h2>
        <div class="but" align="middle" font size="44"><a href="registration.html">Sign Up</a></div>
    </h2>
    <h2>
        <div class="but" align="middle" font size="44"><a href="login.html">Log In</a></div>
    </h2>


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