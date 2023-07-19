<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects</title>
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

.filters {
  text-align: center;
  margin-bottom: 20px;
}

label {
  margin-right: 10px;
}

#projectsContainer {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.project {
  width: 300px;
  padding: 20px;
  margin: 10px;
  background-color: #f9f9f9;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.project img {
  width: 100%;
  max-height: 200px;
  object-fit: cover;
  margin-bottom: 10px;
}

.project h2 {
  margin: 10px 0;
}

.project p {
  margin-bottom: 10px;
}

.project a {
  display: block;
  margin-top: 10px;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.6);
}

.modal-content {
  background-color: #fefefe;
  margin: 20% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;
  max-width: 800px;
  text-align: center;
  position: relative;
}

.close {
  position: absolute;
  top: 10px;
  right: 20px;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.progress-bar {
  background-color: #ddd;
  height: 10px;
  margin-top: 10px;
}

header {
  background-color: #f1f1f1;
  padding: 20px;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline;
}

nav ul li a {
  display: inline-block;
  padding: 10px;
  text-decoration: none;
  color: #333;
  font-weight: bold;
}

nav ul li a:hover {
  background-color: #333;
  color: #fff;
}

nav ul li:not(:last-child) {
  margin-right: 20px;
}
/* Add more custom styles as needed */

  </style>
  <script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
  var categorySelect = document.getElementById("category");
  var technologySelect = document.getElementById("technology");
  var searchInput = document.getElementById("search");
  var projectDetailsModal = document.getElementById("projectDetailsModal");
  var closeBtn = projectDetailsModal.getElementsByClassName("close")[0];
  var projects = document.getElementsByClassName("project");

  // Event listener for category filter
  categorySelect.addEventListener("change", function() {
    filterProjects();
  });

  // Event listener for technology filter
  technologySelect.addEventListener("change", function() {
    filterProjects();
  });

  // Event listener for search
  searchInput.addEventListener("keyup", function() {
    filterProjects();
  });

  // Event listener for project details modal
  for (var i = 0; i < projects.length; i++) {
    projects[i].addEventListener("click", function() {
      projectDetailsModal.style.display = "block";
    });
  }

  // Event listener for close button in modal
  closeBtn.addEventListener("click", function() {
    projectDetailsModal.style.display = "none";
  });

  // Function to filter projects based on category, technology, and search input
  function filterProjects() {
    var selectedCategory = categorySelect.value;
    var selectedTechnology = technologySelect.value;
    var searchTerm = searchInput.value.toLowerCase();

    for (var i = 0; i < projects.length; i++) {
      var project = projects[i];
      var category = project.getAttribute("data-category");
      var technology = project.getAttribute("data-technology");
      var title = project.getElementsByTagName("h2")[0].textContent.toLowerCase();

      if (
        (selectedCategory === "all" || category === selectedCategory) &&
        (selectedTechnology === "all" || technology === selectedTechnology) &&
        (title.includes(searchTerm))
      ) {
        project.style.display = "block";
      } else {
        project.style.display = "none";
      }
    }
  }
});

  </script>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="skills.html">Skills</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="contact.html">contact</a></li>
      </ul>
    </nav>

    <h1>My Projects</h1>
    <div class="filters">
      <label for="category">Filter by Category:</label>
      <select id="category">
        <option value="all">All</option>
        <option value="web">Web</option>
        <option value="mobile">Mobile</option>
        <option value="desktop">Desktop</option>
      </select>
      <br>
      <br>
    </div>
    <input type="text" id="search" placeholder="Search projects">
  </header>
  <div id="projectDetailsModal" class="modal">
  <?php

  //server details
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  //connect server
  $conn = mysqli_connect($servername, $username, $password) or die("connection failed");
  
  //connect database
  $db_conn = mysqli_select_db($conn, "myportfolio") or die("failed to connect to server");
  
  //Querying database
  $query = "SELECT * FROM `projects`";
  $rs = mysqli_query($conn, $query);
  
  //retrive project details and display data
  while ($project = mysqli_fetch_assoc($rs)) {
      $id=$project['id'];
      $img = $project['imgsrc'];
      $description = $project['description'];
      $title = $project['title'];
  
      echo '
      <div class="project" data-category="web" data-technology="html">
        <img src="'.$img.'" alt="Project 1">
        <h2>'.$title.'</h2>
        <p>'.$description.'</p><a href="https://www.instagram.com/pagespictures_mw/"> click here</a></p>
        <div class="progress-bar" style="width: 70%;"></div>
      </div>
      <br>';
  }
  //close connection
  mysqli_close($conn);
  ?>
 



  </main>    
  </div>
</body>

</html>
