<?php
	if (isset($_POST["submit"])) {
		$email = $_POST['email'];
		$message = $_POST['message'];

		$from = 'gVLQ Contact Form';
		$to = 'vlaicu.gabriel11@yahoo.com';
		$subject = 'Message from gVLQ Demo ';

		$body ="From:  E-Mail: $email\n Message:\n $message";

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
// If there are no errors, send the email
if (!$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gVLQ || Portfolio</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app2.css">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre" rel="stylesheet">
  </head>
  <body>

	<div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<!----------------------------------------------------------------------------------->
		<!-- Aside Bar ------------------------------------->
		<!----------------------------------------------------------------------------------->
		<div class="off-canvas position-left reveal-for-large aside-bar" id="my-info" data-off-canvas data-position="left">
          <div class="row column">
            <br>
            <img src="img/logo.png" alt="Logo">
            <hr/>
            <div class="side-menu">
                <ul class="vertical menu" data-magellan>
                  <li><a href="#mag1"><button class="hollow button secondary"><i class="fa fa-user" aria-hidden="true"></i>About</button></a></li>
                  <li><a href="#mag2"><button class="hollow button secondary"><i class="fa fa-briefcase" aria-hidden="true"></i>Portfolio</button></a></li>
                  <li><a href="#mag3"><button class="hollow button secondary"><i class="fa fa-university" aria-hidden="true"></i>Resume</button></a></li>
                  <li><a href="#mag4"><button class="hollow button secondary"><i class="fa fa-envelope" aria-hidden="true"></i>Contact</button></a></li>
                </ul>
              </div>
			  <hr/>
			  <p class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i> Gabriel Vlaicu 2016-2017</p>
			  <div id="icons">
                  <ul class="menu">
                    <a href="https://www.facebook.com/gabriel.vlaicu" target="blank"><li><i class="facebook fa fa-facebook-square fa-2x" aria-hidden="true"></i></li></a>
          					<a href="https://ro.linkedin.com/in/gabriel-vlaicu-921364106" target="blank"><li><i class="linkedin fa fa-linkedin-square fa-2x" aria-hidden="true"></i></li></a>
                    <a href="https://github.com/gVLQ" target="blank"><li><i class="github fa fa-github fa-2x" aria-hidden="true"></i></li></a>
                  </ul>
               </div>
          </div>
        </div>
		<!----------------------------------------------------------------------------------->
		<!-- Main Content ---------------------------------->
		<!----------------------------------------------------------------------------------->
		<div class="off-canvas-content" data-off-canvas-content>
			<!-- Small Menu ------------------------------->
			<div class="title-bar hide-for-large">
				<div class="title-bar-left">
				  <button class="menu-icon" type="button" data-open="my-info"></button>
				  <span class="title-bar-title">Menu</span>
				</div>
			</div>
			<div id="sec2">
			<!-- About Page ------------------------------->
			<div class="parallax-page parallax-1">
				<section class="shadow-box about-page" id="mag1" data-magellan-target="mag1">
				<div class="row small-up-12 medium-up-12 large-up-12">
                <h2>About</h2>
                <hr/>
                <h4><span class="color-span">Hello</span>,<br/> my name is <span class="color-span">Gabriel</span>, thank you for visiting my website!</h4>
                <p>I'm a Frontend Developer, currently based in Bucharest, Romania. I'm an ambitious problem solver with a passion for online businesses, and who
                would like to join a team of like-minded developers.
                I am thorough and precise in everything I do, and have a keen interest in
                technology, mobile applications and user experience. As someone who takes
                responsibility for his own personal development, I am continually evaluating
                and upgrading my skills so that I stay at the cutting edge of web
                development. Here is some of the cool stuff I use when I'm building my apps:</p>
				</div>
                <hr/>
				<div class="row small-up-2 medium-up-3 large-up-4">
					<div class="column webtech">
					  <img class="thumbnail" src="img/webTech/html.png" alt="HTML5">
					</div>


					<div class="column webtech">
					  <img class="thumbnail" src="img/webTech/css3.png" alt="css3">
					</div>


					<div class="column webtech">
					  <img class="thumbnail" src="img/webTech/jsjquery.png" alt="Javascript">
					</div>

					<div class="column webtech">
					  <img class="thumbnail" src="img/webTech/bootstrap.png" alt="bootstrap">
					</div>

					<div class="column webtech">
					  <img class="thumbnail" src="img/webTech/foundation.png" alt="foundation">
					</div>

					<div class="column webtech">
					  <img class="thumbnail" src="img/webTech/angular.png" alt="angular">
					</div>

					<div class="column webtech">
					  <img class="thumbnail" src="img/webTech/react.png" alt="react">
					</div>

					<div class="column webtech">
					  <img class="thumbnail" src="img/webTech/node.png" alt="node">
					</div>
				</div>
              </section>
			</div>
			<!-- Porfolio Page ------------------------------->
			<div class="parallax-page parallax-2">
				<section class="shadow-box content-box about-page" id="mag2" data-magellan-target="mag2">
				<div class="row small-up-12 medium-up-12 large-up-12">
                <h2>Portfolio</h2>
				</div>
                <hr/>
        <div class="row">

					<div class="medium-4 columns">
						<div class="card">
						  <div class="image">
							<img src="img/webTech/react2.png" alt="react">
						  </div>
						  <div class="content">
							<span class="title">React.js - Weather App</span>
							<p>A simple app that uses the API from openweathermap.org to show you the temperature in any city or location that you type in. <br/>
							The design is built using Foundation.</p>
						  </div>
						  <div class="action">
							<a href='http://arcane-garden-31873.herokuapp.com/#/?_k=p761ck' target="blank">Go to App</a>
						  </div>
						</div>
					</div>

					<div class="medium-4 columns">
						<div class="card">
						  <div class="image">
							<img src="img/webTech/react2.png" alt="react">
						  </div>
						  <div class="content">
							<span class="title">React.js - Timer App</span>
							<p>Another simple app built using React. It has two components: a timer and a counddown. <br/>
							The design is built using Foundation.</p>
						  </div>
						  <div class="action">
							<a href="http://aqueous-ravine-54034.herokuapp.com/#/?_k=chb9q6" target="blank">Go to App</a>
						  </div>
						</div>
					</div>

					<div class="medium-4 columns">
						<div class="card">
						  <div class="image">
							<img src="img/webTech/react2.png" alt="react">
						  </div>
						  <div class="content">
						  	<span class="title">React.js - ToDo App</span>
							<p>This is a Todo App built using React.js. You can enter your daily tasks and check them off when they're done, then add new ones. <br/>
							The design is built using Foundation.</p>
						  </div>
						  <div class="action">
							<a href="http://stark-badlands-36378.herokuapp.com/" target="blank">Go to App</a>
						  </div>
						</div>
					</div>

					<div class="medium-4 columns">
						<div class="card">
						  <div class="image">
							<img src="img/webTech/bootstrap2.png" alt="react">
							<span class="title"></span>
						  </div>
						  <div class="content">
							<span class="title">Bootstrap - ComingSoon Page</span>
							<p>A simple, responsive Coming Soon page built using the Twitter's Bootstrap CSS framework.</p>
						  </div>
						  <div class="action">
							<a href="https://powerful-brook-33448.herokuapp.com/" target="blank">Go to App</a>
						  </div>
						</div>
					</div>

              </section>
			</div>
			<!-- Resume Page ------------------------------->
			<div class="parallax-page">
				<section class="shadow-box content-box about-page" id="mag3" target="blank" data-magellan-target="mag3">
          <div class="row small-up-12 medium-up-12 large-up-12">
						<h2>Resume</h2>
						<hr/>
						<h4>Sorry, this page is still in development..</h4>
            <p>Please visit my <a href="https://ro.linkedin.com/in/gabriel-vlaicu-921364106" target="blank">Linked</a> profile for more details <i class="fa fa-smile-o" aria-hidden="true"></i></p>
					</div>
				</section>
			</div>
			<!-- Contact Page ------------------------------->
			<div class="parallax-page">
				<section class="shadow-box content-box about-page contact-page" id="mag4" data-magellan-target="mag4">
					<div class="row small-up-12 medium-up-12 large-up-12">
						<h2>Contact</h2>
						<hr/>
            <footer class="footer">
              <div class="row">
                <div class="small-12 medium-6 medium-push-6 columns">
                  <p class="logo show-for-small-only"><i class="fi-target"></i><b>gVlq</b> | Portfolio Website</p>
                  <form class="footer-form">
                    <div class="row">
                      <div class="medium-9 medium-push-3 columns">
                        <label>
                          <label for="email" class="contact">Contact Me</label>
                          <input type="email" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>" />
													<?php echo "<p class='text-danger'>$errEmail</p>";?>
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="medium-9 medium-push-3 columns">
                        <label>
                          <textarea rows="5" id="message" placeholder="Message"name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
													<?php echo "<p class='text-danger'>$errMessage</p>";?>
                        </label>
                      </div>
                      <div class="row">
                        <div class="medium-9 medium-push-3 columns">
                          <button class="submit" type="submit" value="Send">Send</button>
                        </div>
												<?php echo $result; ?>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="small-12 medium-6 medium-pull-6 columns">
                  <p class="logo hide-for-small-only"><i class="fi-target"></i><b>gVlq</b> | Portfolio Website</p>
                  <p class="contact-info"><i class="fa fa-envelope-open" aria-hidden="true"></i> vlaicu.gabriel11@yahoo.com</p>
                  <p class="contact-info"><i class="fa fa-mobile" aria-hidden="true"></i> +40728309553</p>
                </div>
              </div>
            </footer>
					</div>
				</section>
			</div>
		</div>
		<!----------------------------------------------------------------------------------->
		</div>
	  </div>
	 </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
