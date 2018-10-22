<?php

require_once("Template.php");
require_once("DB.class.php");
//require_once("bookSearch.php");

$output = "";
$goAhead = false;

if(isset($_POST['search_input']))
{
	$sanInput = filter_var($_POST['search_input'],FILTER_SANITIZE_STRING);

	$valInput = filter_var($sanInput,FILTER_FLAG_STRIP_HIGH);

	if($valInput)
	{
		$output = "Error: Invalid Input";
	}
	else 
	{
		$output = "Here's what we have for: {$sanInput}";
		$goAhead = true;
	}
}
else 
{
	$output = "Error: Nothing was entered";
}


$db = new DB();

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
	background-color: #0045e3;
}
.content{
	display: block;
	margin: auto;
	width: 60%;
	font-family: Arial;
	background-color: white;
	border: none;
}

h1 {
	color: #0045e3;
	font-weight: bold;
	text-align: center;
}

h2{
	text-align: center;
}

img{
	display: block;
	width: 60%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

legend{
	font-size: 22px;
}

input[type=submit]{
	width: 40%;
	border-radius: 4px;
	padding: 14px 20px;
	margin: 8px 0; 
	cursor: pointer;
	font-size: 18px;
	background-color: black;
	color: white;
	font-weight: bold;
	border: none;
	text-transform: uppercase;
}
input[type=submit]:hover {
	background-color: #fffd00;
	color: black;
}

textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
fieldset {
	border: none;
}
.button{
	text-align: center;
}


.navigation{
	display: block;
    border: 1px solid #ccc;
    border-width: 1px 0;
    list-style: none;
    padding: 0;
	text-align: left;
}
.navigation li{
    display: inline-block;
	border-radius: 7px;
	background-color: black;
	padding: 0 2px;
	margin: 0 5px;
}
.navigation li:hover {
	background-color: #fffd00;
}

.navigation a{
	color: white;
    display: inline-block;
    padding:10px;
	text-decoration: none;
	font-size: 20px;  
}

.navigation a:hover {
	color: black;
	background-color: #black;
}

.column {
	float: left;
	padding: 10px;
}

.right{
	width: 20%;
}

.middle{
	width: 20%;
}

.left{
	width: 50%;
	border-right: 1px solid #ccc;
}

.row:after{
	content: '';
	display: table;
	clear: both;
}

section{
	border: 1px solid #ccc;
	border-radius: 2px;
	padding: 20px;
}
.thankyou{
	border-style: solid;
	border: 8px solid #ccc;
	padding: 20px;
	text-align: center;
	margin: 50px;
}
</style>");

$page->setTopSection();
$page->setBottomSection();

print $page->getTopSection();
print "<div id='title'>
<h1>Book Finder</h1>
<h2 id='headline'>Book Database</h2>
</div>

<div id='search'>
	<p>{$output}\n</p>";

if($goAhead == true)
{
	print "<div id='table'>
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

	$query = "SELECT * FROM bookinfo WHERE isbn = {$sanInput}, 
											OR booktitle = {$sanInput}, 
											OR author = {$sanInput}";
	$result = $db->dbCall($query);
	
	if(!empty($result))
	{
		foreach($result as $item)
		{
				print "<tr>";
				print "<td>{$item["id"]}</td>";
				print "<td>{$item["inserttime"]}</td>";
				print "<td>{$item["booktitle"]}</td>";
				print "<td>{$item["isbn"]}</td>";
				print "<td>{$item["author"]}</td>";
				print "<td>{$item["status"]}</td>";
				print "</tr></div>";
		}
	}
	
}
	
	
?>