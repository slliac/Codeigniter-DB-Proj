<div class="wrap af1">
	<ul class="slidebox">
		<li><a href="#"><img src="/CodeIgniter/images/pic1.png" /></a></li>
		<li><a href="#"><img src="/CodeIgniter/images/pic2.png" /></a></li>
		<li><a href="#"><img src="/CodeIgniter/images/pic3.png" /></a></li>
		<li><a href="#"><img src="/CodeIgniter/images/pic4.png" /></a></li>
	</ul>
</div>

<div id = "sales"><h2><?php echo $pageHeading1; ?></h2>
<img src="/CodeIgniter/images/sell.jpg" height="250" width="200">
<?php
$count = 1;
foreach ($query_selling->result() as $row) 
{
      echo  "<p>" . $count . " . " 
      			. '<a href="' . "/CodeIgniter/index.php/news/fulltext/" 
      			. $row->ISBN
      			. '" />'
      			. $row->book_title 
      			. "</p></a><br>";
$count++;
}?>

</div>
<br><br>