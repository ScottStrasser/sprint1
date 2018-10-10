<?php

/**
*
* Template class
* 
* Used to create multiple unique HTML pages.
*
* Always call "set" methods before calling any "get" methods,
* as in the example here:
*
* Usage:
*   $page = new Template("My Page");
*   $page->setHeadSection("<script src='hello.js'></script>");
*   $page->setTopSection();
*   $page->setBottomSection();
*
*   print $page->getTopSection();
*   print "<h1>Some page-specific HTML goes here</h1>\n";
*   print $page->getBottomSection();
*
* @author Steve Suehring <steve.suehring@uwsp.edu>
*/

class Template {

	private $_top;
	private $_bottom;
  private $_title;
  private $_headSection = "";

function __construct($title = "Default") {
	$this->_title = $title;
}

/**
* function setHeadSection($include)
*
* Used to add things to the <head> section of an HTML doc.
* For example, it is typical to add CSS <link> tags
* and <script> tags in the <head> section.
*
* This must be called __before__ setTopSection and
* will typically be called once for each <link> or <script>
* that will appear in the <head> section.
*
*
* @param string $include  The element to include
*/

function setHeadSection($include) {
  $this->_headSection .= $include . "\n";
} //end function setHeadSection

function setTopSection() {
	$returnVal = "";
	$returnVal .= "<!doctype html>\n";
	$returnVal .= "<html lang=\"en\">\n";
	$returnVal .= "<head><title>";
	$returnVal .= $this->_title;
	$returnVal .= "</title>\n";
  $returnVal .= $this->_headSection;
	$returnVal .= "</head>\n";
	$returnVal .= "<body>\n";

	$this->_top = $returnVal;

} //end function setTopSection

function setBottomSection() {
	$returnVal = "";
	$returnVal .= "</body>\n";
	$returnVal .= "</html>\n";

	$this->_bottom = $returnVal;

} //end function setBottomSection

function getTopSection() {
	return $this->_top;
}

function getBottomSection() {
	return $this->_bottom;
}

} // end class

?>
