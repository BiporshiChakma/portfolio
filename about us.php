<!DOCTYPE html>
<html>
  <head>
    <style>
        	main {
			max-width: 800px;
			margin: 20px auto;
			padding: 0 20px;
		}
		article {
			background-color: #f7f7f7;
			border: 1px solid #ccc;
			box-shadow: 0 0 5px #ccc;
			padding: 20px;
		}
		h2 {
			font-size: 30px;
			margin: 0;
		}
		p {
			font-size: 16px;
			line-height: 1.5;
            text-align: justify;
		}
		img {
			max-width: 100%;
			height: auto;
			display: block;
			margin: 20px auto;
		}
    input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hello Coders </></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- header -->
    <header>
      <nav class = "navbar">
        <div class = "container">
          <a href = "index.php" class = "navbar-brand">Hello Coders@</a>
          <div class = "navbar-nav">
            <a href = "index.php">Home</a>
            <a href = "#design">Course</a>
            <a href = "#blog">Blog</a>
            <a href = "#about">About</a>
          </div>
        </div>
      </nav>
      <main>
		<article>
    <h2 style="padding-left:300px">About Us</h2>
      <img src="images/images.jpg" alt="Placeholder Image" style=" width: 350px;height: 320px; display: block;">
			<p>Web development refers to the process of designing, building, and maintaining websites and web applications. It involves a variety of tasks, including web design, programming, and database management.

Web development can be divided into two main categories: front-end development and back-end development. Front-end development involves creating the visual elements of a website or application, such as layout, design, and user interface. This is done using languages such as HTML, CSS, and JavaScript. Back-end development, on the other hand, involves creating the behind-the-scenes functionality of a website or application, such as server-side programming, database management, and APIs. This is typically done using languages such as PHP, Python, and Ruby.

There are a variety of tools and frameworks available for web developers to use, such as WordPress, Drupal, and Joomla for content management, and React, Angular, and Vue.js for front-end development. In addition, web developers must also ensure that their websites and applications are responsive and accessible, meaning that they can be viewed and used on a variety of devices and by people with disabilities.

Web development is an important field as more and more businesses and individuals are relying on websites and web applications for their online presence and operations. With the increasing demand for web developers, it is a field that offers opportunities for growth and career advancement.</p>
<h2 style="padding: 15px; padding-left:300px">Contact Us</h2> 
<form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Bangladesh</option>
      <option value="canada">India</option>
      <option value="usa">Others</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>           	
</article>
	</main>
     <!-- footer -->
     <footer>
      <div class = "social-links">
        <a href = "#"><i class = "fab fa-facebook-f"></i></a>
        <a href = "#"><i class = "fab fa-twitter"></i></a>
        <a href = "#"><i class = "fab fa-instagram"></i></a>
        <a href = "#"><i class = "fab fa-pinterest"></i></a>
      </div>
      <p style="padding-left: 550px; font-style:italic;">Copyright By Hello Coders@ team</p>
    </footer>
    <!-- end of footer -->
    