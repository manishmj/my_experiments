<?php
include_once('simple_html_dom.php');
$html = new simple_html_dom();
$target_url = "http://localhost/my-first-crawler/example1.php";
$html->load_file($target_url);
foreach($html->find('a') as $link)
{
echo $link->href."<br />";
}
?>