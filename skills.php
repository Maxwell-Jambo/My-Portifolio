<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skills</title>
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
body{
  background-color: gray;
}

h1 {
  text-align: center;
}

main {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding: 20px;
}

.skill {
  width: 300px;
  padding: 20px;
  margin: 10px;
  background-color: #f2f2f2;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.skill h2 {
  margin-bottom: 10px;
}

.skill ul {
  list-style-type: none;
  padding: 0;
}

.tool {
  position: relative;
  margin-bottom: 5px;
  cursor: pointer;
}

.progress-bar {
  background-color: gray;
  height: 10px;
  margin-top: 10px;
}
ol{
  list-style: none;
}

/* Add more custom styles as needed */

  </style>
  <script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
  var tools = document.getElementsByClassName("tool");

  // Event listener for tooltips
  for (var i = 0; i < tools.length; i++) {
    var tool = tools[i];
    var tooltipText = tool.getAttribute("data-tooltip");
    createTooltip(tool, tooltipText);
  }

  // Function to create tooltips
  function createTooltip(element, text) {
    var tooltip = document.createElement("span");
    tooltip.classList.add("tooltip");
    tooltip.textContent = text;
    element.appendChild(tooltip);

    element.addEventListener("mouseover", function() {
      tooltip.style.visibility = "visible";
    });

    element.addEventListener("mouseout", function() {
      tooltip.style.visibility = "hidden";
    });
  }
});

  </script>
</head>

<body>
  <header>
    <nav>
       <ol>
        <li><a href="index.html">Home</a></li>
        <li><a href="skills.html">Skills</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="contact.html">contact</a></li>
      </ol>
    <h1>My Skills</h1>
      
    </nav>
  </header>

  <main>
    <div class="skill">
      <h2>Web Development</h2>
      <ul>
        <li class="tool" data-tooltip=" HTML, CSS, JavaScript">Front-end Development</li>
        <li class="tool" data-tooltip=" Node.js, Express.js">Back-end Development</li>
        <li class="tool" data-tooltip=" React, Angular, Vue">JavaScript Frameworks</li>
        <!-- Add more tools as needed -->
      </ul>
      <div class="progress-bar" style="width: 90%;"></div>
    </div>

    <div class="skill">
      <h2>Graphic Design</h2>
      <ul>
        <li class="tool" data-tooltip=" Adobe Photoshop">Photo Editing</li>
        <li class="tool" data-tooltip=" Adobe Illustrator">Vector Graphics</li>
        <li class="tool" data-tooltip=" Adobe InDesign">Print Design</li>
        <!-- Add more tools as needed -->
      </ul>
      <div class="progress-bar" style="width: 80%;"></div>
    </div>

     <div class="skill">
      <h2>Programming</h2>
      <ul>
        <li class="tool" data-tooltip=" compiled programming language with first-class functions.">Javascript</li>
        <li class="tool" data-tooltip=" high-level, class-based, object-oriented programming language">Java</li>
        <li class="tool" data-tooltip=" general-purpose computer programming language.">C programming</li>
        <!-- Add more tools as needed -->
      </ul>
      <div class="progress-bar" style="width: 80%;"></div>
    </div>

    <div class ="skill">
     <h2>Camera expertise</h2>
      <ul>
        <li class="tool" data-tooltip=" taking classic videos">video shooting</li>
        <li class="tool" data-tooltip=" taking pictures at the best angle">photographin</li>
        <!-- Add more tools as needed -->
      </ul>
      <div class="progress-bar" style="width: 80%;"></div>
    </div>



    <!-- Add more skill sections as needed -->
  </main>

  <script src="script.js"></script>
</body>

</html>
