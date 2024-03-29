<!DOCTYPE html>
<html = lang"en">
<head>
  <script>// Wait for the document to load
    document.addEventListener("DOMContentLoaded", function() {
      // Get the slideshow container
      var slideshowContainer = document.getElementById("slideshow");
    
      // Get all the images inside the slideshow container
      var images = slideshowContainer.getElementsByTagName("img");
    
      // Set the initial image index to 0
      var currentImageIndex = 0;
    
      // Display the first image
      images[currentImageIndex].style.display = "block";
    
      // Function to show the next image
      function showNextImage() {
        // Hide the current image
        images[currentImageIndex].style.display = "none";
    
        // Increment the image index
        currentImageIndex++;
    
        // Wrap around to the first image if the index exceeds the number of images
        if (currentImageIndex >= images.length) {
          currentImageIndex = 0;
        }
    
        // Display the next image
        images[currentImageIndex].style.display = "block";
      }
    
      // Set an interval to automatically show the next image every 3 seconds
      setInterval(showNextImage, 3000);
    });

    // Wait for the document to load
document.addEventListener("DOMContentLoaded", function() {
  // Get the current date and time
  var now = new Date();

  // Get the current hour
  var hour = now.getHours();

  // Get the greeting based on the hour of the day
  var greeting;
  if (hour < 12) {
    greeting = "Good morning";
  } else if (hour < 18) {
    greeting = "Good afternoon";
  } else {
    greeting = "Good evening";
  }

  // Display the greeting in the HTML
  var greetingElement = document.getElementById("greeting");
  greetingElement.textContent = greeting;
});
    document.addEventListener("DOMContentLoaded", function() {
  var contactForm = document.getElementById("contactForm");
  contactForm.addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    // Get the form field values
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    // Perform validation
    if (name === "" || email === "" || message === "") {
      alert("Please fill in all the fields.");
      return;
    }

    // If all fields are valid, you can proceed with form submission or further processing
    // Here, you can send the form data to a server or display a success message, etc.
    alert("Form submitted successfully!");
    contactForm.reset(); // Reset the form fields
  });
});
    document.addEventListener("DOMContentLoaded", function() {
  // Smooth scrolling for navigation links
  var navigationLinks = document.querySelectorAll("nav ul li a");

  for (var i = 0; i < navigationLinks.length; i++) {
    navigationLinks[i].addEventListener("click", function(event) {
      event.preventDefault(); // Prevent default link behavior

      var target = document.querySelector(this.getAttribute("href"));
      if (target) {
        var targetOffsetTop = target.offsetTop;

        window.scrollTo({
          top: targetOffsetTop,
          behavior: "smooth"
        });
      }
    });
  }
});


    </script>
    <title> Maxwell Jambo</title>

    <style>
        h1{text-align:center}
        h2{text-align: center;}
        h1{font-family: sans-serif;}
        #slideshow {
  width: 100%;
  height: 300px;
  overflow: hidden;
}

#slideshow img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: none;
}
ul{
  list-style: none;
}
        

    </style>
<header>
	<nav>
  <ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="projects.html">Projects</a></li>
  <li><a href="skills.html">Skills</a></li>
  <li><a href="contact.html">Contact</a></li>
</ul>
</nav>
  <script>
    // Smooth scroll function
    function smoothScroll(event) {
      event.preventDefault();

      const target = event.target.getAttribute("href");

      // Scroll smoothly only when navigating to a different page
      if (window.location.pathname !== target) {
        window.location.href = target;
      }
    }

    // Attach smooth scroll event listener to navigation links
    const navigationLinks = document.querySelectorAll("nav a");
    navigationLinks.forEach(link => {
      link.addEventListener("click", smoothScroll);
    });
  </script>

  <head>
  <title>Dynamic Greeting</title>
  <script>
    // Get the current time
    var currentTime = new Date();
    var currentHour = currentTime.getHours();

    // Define the greeting based on the time of the day
    var greeting;
    if (currentHour < 12) {
      greeting = "Good morning";
    } else if (currentHour < 18) {
      greeting = "Good afternoon";
    } else {
      greeting = "Good evening";
    }

    // Display the greeting
    window.onload = function() {
      document.getElementById("greeting").innerHTML = greeting;
    };
  </script>
</head>
  <div id="slideshow">
    <img src="cover2.png" alt="Project 1">
    <img src="cover1.png" alt="Project 2">
    <img src="cover3.png" alt="Project 3">
  </div>
</header>
</head>

<body>
    <h1>MAXWELL JAMBO</h1>
    <center><img src="Profile3.png" width="560" height="300"></center>
    <h2>ABOUT ME</h2>
    <p1>I am a photographer and a student at Mzuzu University, studying diploma in ICT. Born and raised in Blantyre, right now I am Currently based in mzuzu,  As a Photographer I am the founder of Pages Pictures Malawi, its a registered Photography company which is based in Mzuzu, Northetn part of Malawi. I do Photography, Videography, Graphic Designing etc. which includes but not limited to the following events, Weddings, Corporate events, Individual Pictures</p1>
    <h2>PROJECTS</h2>
    <h3>Weddings</h3>

<img src="wedding1.jpg" width="200" height="200" >
<img src="wedding8.jpg" width="200" height="200" >
<img src="wedding4.jpg" width="200" height="200" >
<img src="wedding7.jpg" width="200" height="200" >
<br>
<p>Over the years I have managed to cover weddings of different people , I have captured both video and still picture moments . <br>
    For more wedding samples<a href="https://www.instagram.com/pagespictures_mw/"> click here</a></p>
<h3>Studio</h3>
<img src="studio6.jpg" width="200" height="200" >
<img src="studio1.jpg" width="180" height="200" >
<img src="stud14.jpg" width="200" height="220" >
<img src="stud13.jpg" width="180" height="200" >
<br>
<p>Since the start of my Photography career , I managed to set up a photography studio which is located in Old Katoto, next to Bailando Lounge</p>
<p>For more samples <a href="https://web.facebook.com/pagespicturesmw/">click here</a></p>
<h3>Corporate Events</h3>
<img src="corp1.jpg" width="180" height="200" >
<img src="corp2.jpg" width="180" height="200" >
<img src="corp3.jpg" width="180" height="200" >
<img src="corp4.jpg" width="180" height="200" >
<br>
<p>I have worked with different organizations, e.g Saint John Of God Hospitaller Services Malawi, Itel , Top City Entertainment, Dumuwa Beach Resort etc. For more info  <a href="https://www.instagram.com/pagespictures_mw/"> click here</a></p>
<br>
<br>
<h2>SKILLS</h2>
<li>Adobe Photoshop, Adobe After Effects, Adobe Premiere</li>
<li>Camera handling and Operation</li>
<li>Web Design</li>
<li>Programming with , C and JAVA</li>
<form action= "" method="post"name="myForm"
 onsubmit="return validateForm()">   
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
  
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>
  
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" required></textarea><br>
  
    <button type="submit" name="submit">Submit</button>
  </form>
<?php
$servername="localhost";
$username="root";
$password= "";
$conn=mysqli_connect($servername,$username,$password) or die("failed to connect");

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

			//selecting a database
$selectdb=mysqli_select_db($conn,"project2");
$query = "INSERT INTO home(name,email,message)values('$name','$email','$message')";
$result = mysqli_query($conn,$query);
			echo"request submitted";
		}
        else{
			echo "request not submitted";
		}
	?>

<footer>
    
    <p>E-mail   : maxjambomw@gmail.com</p>
    <p>Phone    : +265 (0) 995083198</p>
    <li><a href="https://web.facebook.com/pagespicturesmw/">Facebook</a></li>
    <li><a href="https://www.instagram.com/pagespictures_mw/">Instagram</a></li>
    <li><a href="https://www.linkedin.com/in/maxwell-jambo-973335123/">Linked In</a></li>
    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

  
    </nav>

  </footer>

  

</body>

</html>