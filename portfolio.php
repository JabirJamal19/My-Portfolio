<?php
session_start();
$msg = isset($_SESSION['msg']) ? $_SESSION['msg'] : '';
unset($_SESSION['msg']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Personal Portfolio website</title>
	<link rel="stylesheet" type="text/css" href="Portfolio styles.css">
  <script src="https://kit.fontawesome.com/4a8f961a59.js" crossorigin="anonymous"></script>
</head>
<body>
 <div id="header">
 	 <div class="container">
 	 	<nav>
 	 		<img src="jabir/logo.png" class="logo">
 	 		<ul id="side-menu">
 	 			<li> <a href="#header">Home</a></li>
 	 			<li> <a href="#about">About</a></li>
 	 			<li> <a href="#services">Services</a></li>
 	 			<li> <a href="#portfolio">Portfolio</a></li>
 	 			<li> <a href="#contact">Contact</a></li>
 	 		</ul>
 	 	<div class="header-text">
 	 		<p>Software Engineer</p>
 	 		<h1>Hi, I'm <span>Jabir Jamal</span> <br> from Pakistan</h1>
 	 	</div>
 	 </div>
 </div>
  <!=-------------------------------------About---------------------------------=!>
  <div id="about">
  	<div class="container">
  		<div class="row">
  			<div class="about-col-1">
  				<img src="jabir/user.png">
  			</div>
  			<div class="about-col-2">
  				<h1 class="sub-title">About Me</h1>
  				<p class="justified">Meet our versatile software engineer! Proficient in HTML, CSS, ES6, React.js, React Native, PHP, Node.js,
            WordPress, MySQL, MongoDB, and GitHub.Specializes in crafting visually stunning web interfaces and dynamic
            experiences for web and mobile platforms.Excels in server-side programming, custom WordPress development, and
            efficient database management.Experienced in Git for version control and collaboration.A valuable asset with
            diverse skills and a passion for staying ahead in tech.</p>

  				<div class="tab-titles">
  					<a href="#skills" class="tab-links  active-link" onclick="opentab('skills')">Skills</a>
  					<a href="#experience" class="tab-links"  onclick="opentab('experience')">Experience</a>
  					<a href="#education" class="tab-links" onclick="opentab('education')">Education</a>
  				</div>
  				<div class="tab-contents active-tabs" id="skills">
  					<ul>
  						<li><span>UI?UX</span><br>Designing web/App Interfaces</li>
  						<li><span>Web Development</span><br>Web  App Development</li>
  						<li><span>App Development</span><br>Building Andriod/IOS Apps</li>
  					</ul>
  				</div>

  				<div class="tab-contents " id="experience">
  					<ul>
  						<li><span>Xpert It solution</span><br>Designing web/App Interfaces</li>
  						<li><span>City University</span><br>Web  App Development</li>
  						<li><span>I'm Sciences</span><br>Building Andriod/IOS Apps</li>
  					</ul>
  				</div>

  				<div class="tab-contents " id="education">
  					<ul>
  						<li><span>fsc</span><br>Designing web/App Interfaces</li>
  						<li><span>Bsc </span><br>Web  App Development</li>
  						<li><span>Msc </span><br>Building Andriod/IOS Apps</li>
  					</ul>
  				</div>

  			</div>
  		</div>
  	</div>
  </div>

  <!=-------------------------Services------------------------------=!>
    <div id="services">
      <div class="container">
        <h1 class="sub-title">My services</h1>
        <div class="services-list">
          <div>
            <i class="fa-solid fa-code"></i>
            <h2>Web Design</h2>
            <p class="justified">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            <a href="#">Learn more</a>
          </div>

          <div>
            <i class="fa-solid fa-crop-simple"></i>
            <h2>UI/UX Design</h2>
            <p class="justified">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            <a href="#">Learn more</a>
          </div>

          <div>
            <i class="fa-brands fa-app-store"></i>
            <h2>App Design</h2>
            <p class="justified">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            <a href="#">Learn more</a>
          </div>

        </div>
      </div>
    </div>

    <!=-----------------------------Portfolio-------------------------------=!>
      <div id="portfolio">
      <div class="container">
        <h1 class="sub-title"> My Work</h1>
        <div class="work-list">
          <div class="work">
            <img src="jabir/work-1.png">
            <div class="layer">
              <h3>Social Media App</h3>
              <p class="justified"> The app connect yoou to the talented people around the world.
               Download it from Play store.</p>
               <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
          </div>

          <div class="work">
            <img src="jabir/work-2.png">
            <div class="layer">
              <h3>Music App</h3>
              <p class="justified"> The app connect yoou to the talented people around the world.
               Download it from Play store.</p>
               <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
          </div>

          <div class="work">
            <img src="jabir/work-3.png">
            <div class="layer">
              <h3>Sports App</h3>
              <p class="justified"> The app connect yoou to the talented people around the world.
               Download it from Play store.</p>
               <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
          </div>
        </div>
           <a href="#" class="btn">See More</a>
      </div>  
      </div>

<!=-----------------------------------------Contact-------------------------------------=!>
  <div id="contact">
    <div class="container">
      <div class="row">
        <div class="contact-left">
          <h1 class="sub-title">Contact Me</h1>
          <p><i class="fa-regular fa-paper-plane"></i> jabirjamal22@gmail.com</p>
          <p><i class="fa-solid fa-square-phone"></i>+92-320-0939121</p>
          <div class="Social-icon">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-twitter-square"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
          </div>
          <a href="jabir/my-cv.pdf"  download class="btn btn2">Download CV</a>
        </div>
        <div class="contact-right">
          <form name="submit-to-google-sheet" action="submit_form.php" method="post">
            <input type="text" name="Name" placeholder="Your Name" required>
            <input type="email" name="Email" placeholder="Your Email" required>
            <textarea name="Message" rows="6" placeholder="Your Messsage"></textarea>
            <button type="submit" class="btn btn2">Submit</button>
            <!-- Add this line where you want the message to appear -->
    <?php if ($msg): ?>
    <div id="msg"><?php echo htmlspecialchars($msg); ?></div>
<?php endif; ?>

          </form>
          <span id="msg"></span>
        </div>
      </div>
    </div>
    <div class="copy-right">
      <p>Copyright @ Jabir. Media with <i class="fa-solid fa-heart"></i> by J.J Bangash </p>
    </div>
  </div>
 <script type="text/javascript" src="Portfolio.js"></script> 

 
 <!----<script>
  const scriptURL = 'file:///D:/12922%20Portfolio%20website/Portfolio%20website/Portfolio%20website/Portfolio.html#'
  const form = document.forms['submit_form.php']
  const msg = document.getElementById("msg")

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
        msg.innerHTML = "Message sent successfully"
         settimeout(function() {
          msg.innerHTML = ""
         },5000)
         form.reset()
       })
      .catch(error => console.error('Error!', error.message))
  })
</script>----->
 
</body>
</html>