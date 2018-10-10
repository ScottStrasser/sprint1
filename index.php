<?php

require_once("Template.php");
require_once("DB.class.php");

$db = new DB();
//var_dump($db);
if (!$db->getConnStatus()) {
  print "An error has occurred with connection\n";
  exit;
}

/*Template.php used for CNMT 310 by Jack Allaire*/
/*Sets up an html home page using Template.php*/
$page = new Template("Home");
$page->setHeadSection(
"<style> 
    body {
        background-color: lightgray;
    }
    div {
        margin: auto;
    }
    div#title {
        background-color:darkred;
        width: 1200px;
		margin-top: -26px;
    }
    div#news {
        background-color: gray;
        width: 1200px;
        height: 600px;
        
    }
    h1 {
        color: lightgray;
        text-align: center;
    }
    h2 {
        color: darkred;
    }
    h2#headline {
        color: gray;
        text-align: center;
        font-style: italic;
    }
    nav#index {
        font-family: 'Century Schoolbook L';
        font-size: 1em;
        width: 1200px;
        color: darkgray;
        text-align: left;
        background-color:darkgray;
        margin: auto;
        margin-top: -20px;
    }
    ul {
        list-style-type: none;
        margin: 0;
           padding: 0;
        width: 1200px;
           background-color: white;
        overflow: hidden;
    }
    li {
        float: left;
    }	
    li a {
        display: block;
        color: darkred;
        padding: 16px;
        text-align: center;
           text-decoration: none;
        font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';
        width: 366px;
        border: 1px solid black;
    }
    li a:hover {
               background-color: darkgray;
               color: darkred;
            padding: 16px 16px;
            clear: left;
    }
</style>");

$page->setTopSection();
$page->setBottomSection();

print $page->getTopSection();
print "<div id='title'>
<h1>Book Finder</h1>
<h2 id='headline'>Book Database</h2>
</div>

<div id='table'>
	<table>
		<caption>Book List</caption>
		<thead>
			<tr>
				<th scope='col'>Book ID</th>
				<th scope-'col'>Time of Addition</th>
				<th scope-'col'>Name</th>
				<th scope-'col'>SSN</th>
				<th scope-'col'>Author</th>
				<th scope-'col'>Availability</th>
			</tr>
		</thead>";

	$query = "SELECT * FROM bookinfo";
	$result = $db->dbCall($query);
	
	foreach($result as $item)
	{
			print "<tr>";
			print "<td>{$item["id"]}</td>";
			print "<td>{$item["inserttime"]}</td>";
			print "<td>{$item["booktitle"]}</td>";
			print "<td>{$item["isbn"]}</td>";
			print "<td>{$item["author"]}</td>";
			print "<td>{$item["status"]}</td>";
			print "</tr>";
	}

		
	
?>