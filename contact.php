<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="styles.css">
  <style type="text/css">
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #f2f2f2;
  padding: 20px;
}

h1 {
  text-align: center;
}

nav ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
  display: flex;
  justify-content: center;
}

nav ul li {
  margin-right: 20px;
}

nav ul li a {
  text-decoration: none;
  color: #333;
}

main {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

section {
  margin-bottom: 40px;
}

h2 {
  margin-bottom: 10px;
}

form label {
  display: block;
  margin-bottom: 5px;
}

form input[type="text"],
form input[type="email"],
form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
}

form input[type="submit"] {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
}

form input[type="submit"]:hover {
  background-color: #555;
}

iframe {
  width: 100%;
  height: 400px;
}

  </style>
  <script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
  var contactForm = document.getElementById("contactForm");

  contactForm.addEventListener("submit", function(e) {
    e.preventDefault(); // Prevent form submission

    if (validateForm()) {
      // Perform AJAX form submission or other required actions
      alert("Form submitted successfully!");
      contactForm.reset(); // Reset the form
    }
  });

  function validateForm() {
    var nameInput = document.getElementById("name");
    var emailInput = document.getElementById("email");
    var messageInput = document.getElementById("message");

    if (nameInput.value === "") {
      alert("Please enter your name.");
      return false;
    }

    if (emailInput.value === "") {
      alert("Please enter your email.");
      return false;
    }

    if (messageInput.value === "") {
      alert("Please enter a message.");
      return false;
    }

    return true; // Form is valid
  }
});

  </script>
</head>

<body>
  <header>
    <h1>Contact Me</h1>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="skills.html">Skills</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="contact.html">contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <h2>Contact Information</h2>
      <p>Email: maxjambomw@gmail.com</p>
      <p>Phone: +265 (0) 995083198</p>
      <p>Location: Mzuzu, Malawi</p>
    </section>

    <section>
      <h2>Send a Message</h2>
      <form id="contactForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Submit">
      </form>
    </section>

    <section>
      <h2>Location</h2>
      <p>Katoto, Mzuzu, Malawi.</p>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2358192.201437496!2d34.90655144527795!3d-11.899371848659044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19646e3315d35053%3A0xfef3c7fd969af2d0!2sNorthern%20Region%2C%20Malawi!5e0!3m2!1sen!2sus!4v1622266374847!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
  </main>

  <script src="script.js"></script>
</body>

</html>
