<?php

require_once("Template.php");

$page = new Template("About Page");
$page->setHeadSection("<link rel='stylesheet' href='style.css'>");
$page->setTopSection();
$page->setBottomSection();

print $page->getTopSection();
print "<div class='content'>\n";

print "<div class='navigation'>\n";
print "<ul>\n";
print "<li><a href='home.php'>Home</a></li>\n";
print "<li><a href='contact.php'>Contact Us</a></li>\n";
print "<li><a href='about.php'>About Us</a></li>\n";
print "<li><a href='search.php'>Search</a></li>\n";
print "</ul>\n";
print "</div>\n";

print "<div class='thankyou'>\n";
print "<h2>Thank you for contacting us, we will message you shortly</h2>\n";
print "</div>\n";

print "</div>\n";
print $page->getBottomSection();

