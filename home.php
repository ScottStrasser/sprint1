<?php

require_once("Template.php");

$page = new Template("Home Page");
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

print "<h1>Home Page</h1>\n";

print "<div class='row container'>\n";

print "<div class='column left'>\n";
print "<h2>Main Article Heading</h2>\n";
print "<img src='placeholder.png' alt='Placeholder' height='100' width='500'>\n";
print "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
          et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
		  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
		  dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
		  officia deserunt mollit anim id est laborum</p>\n";
print "</div>\n";

print "<div class='column middle'>\n";
print "<h2>Side Article 1</h2>\n";
print "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
          et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
		  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
		  dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
		  officia deserunt mollit anim id est laborum</p>\n";
print "</div>\n";

print "<div class='column right'>\n";
print "<h2>Side Article 2</h2>\n";
print "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
          et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
		  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
		  dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
		  officia deserunt mollit anim id est laborum</p>\n";
print "</div>\n";

print "</div>\n";
print "</div>\n";
print $page->getBottomSection();

