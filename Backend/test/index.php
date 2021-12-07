
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>
</head>
<body>

<h2>Class of 2021</h2>
<p>Navbar</p>

<?php
$nav = [                    // een array met daarin de nav items
  'Home' =>'#',
  'Skills' =>'#',
  'Opdrachten' =>'#',
  'Contact' =>'#',
  'About' =>'#',
  'Admin' =>'#',
];

echo '<div id="navbar">' . createList($nav, 'navbar'). '</div>';

function createList($nav){
  $html = "<div class='flex flex-row justify-center'>";
  foreach ($nav as $key => $value) {
      if($key === "Opdrachten") {
        $html .= "<span class='mx-4'> <div> as $key <div><a href='#'>Link 1</a><a href='#'>Link 2</a><a href='#'>Link 3</a><div></div>" . "<a href> $value  </a> </span>";
      }
      $html .= "<span class='mx-4'> <div> as $key </div>" . "<a href> $value  </a> </span>";
  }
  $html .= "</div>";
  echo $html;
}


?>



<header>
  <h2>Cities</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">London</a></li>
      <li><a href="#">Paris</a></li>
      <li><a href="#">Tokyo</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>London</h1>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>