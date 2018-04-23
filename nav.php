<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0 auto;
    padding: 0;
    overflow: hidden;
    background-color: transparent;
}

li {
    float: left;
}

li a {
    display: block;
    color: greenyellow;
    text-align: center;
    padding: 14px 16px;
    text-decoration: underline overline dotted lightgreen;
}

li a:hover:not(.active) {
    background-color: #111;
}
#nav {
width:750px;
margin:0 auto;
}

#nav a {
width:185px; /* fixed width */
}

</style>
</head>
<body>

<ul id="nav" >
  <li><a href="index.php">Home</a></li>
  <li><a href="create.php">Create</a></li>
  <li><a href="list.php">List</a></li>
  <li><a href="logout.php">Log out</a></li>
</ul>

</body>
</html>