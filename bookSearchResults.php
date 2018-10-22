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
$page->setHeadSection("<link rel='stylesheet' href='style.css'>");

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

	$query = "SELECT * FROM bookinfo WHERE isbn = '{$sanInput}' 
											OR booktitle = '{$sanInput}'
											OR author = '{$sanInput}'
											ORDER BY booktitle;";
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