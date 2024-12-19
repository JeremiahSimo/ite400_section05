<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: blue;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: pink;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<h2>CSS Layout Float</h2>
<p>In this example, we have created a header, two columns/boxes and a footer. On smaller screens, the columns will stack on top of each other.</p>
<p>Resize the browser window to see the responsive effect (you will learn more about this in our next chapter - HTML Responsive.)</p>

<header>
  <h2>Cities</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="index.php?page=london" class="<?php echo ($_GET['page'] ?? '') === 'london' ? 'active': '';?>">London</a></li>
      <li><a href="index.php?page=paris" class="<?php echo ($_GET['page'] ?? '') === 'paris' ? 'active': '';?>">Paris</a></li>
      <li><a href="index.php?page=tokyo" class="<?php echo ($_GET['page'] ?? '') === 'tokyo' ? 'active': '';?>">Tokyo</a></li>
      <li><a href="index.php?page=profile" class="<?php echo ($_GET['page'] ?? '') === 'profile' ? 'active': '';?>">Profile</a></li>

    </ul>
  </nav>
  
  <article>
   <?php
        if (isset($_GET['page'])){
                $page =$_GET['page'];
                Switch ($page){
                    case 'london':
                        include 'london.php';
                        break;
                        case 'paris':
                            include 'paris.php';
                            break;
                            case 'tokyo':
                                include 'tokyo.php';
                                break;
                                case 'profile':
                                  include 'my_profile.php';
                                  break; 
                                 
                }

        }
   ?>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>