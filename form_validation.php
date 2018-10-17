<?php

require_once("Template.php");

$page = new Template("Form Validation");
$page->setHeadSection("<link rel='stylesheet' href='style.css'>");
$page->setTopSection();
$page->setBottomSection();

print $page->getTopSection();

print "<form id='submit' name='number' action='display.php' method='POST'>\n";
print "<fieldset class='info'>\n";
print "<label>Please Enter a Number</label><input type='text' name='number'>\n";
print "<label>Please Enter an Email Address</label><input type='text' name='email'>\n";
print "<label>Please Enter a URL</label><input type='text' name='url'>\n";
print "<input type='submit' class='submit'>\n";
print "</fieldset>\n";
print "</form>\n";


print $page->getBottomSection();

?>