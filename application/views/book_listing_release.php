<h2 id = "heading"><?php echo $pageHeading; ?></h2><br>
<?php foreach ($query_listing->result() as $row) 
{
echo  "<p>"
 	. '<a href="' . "/CodeIgniter/index.php/news/fulltext/" 
      	. $row->ISBN
      	. '" />'
      	. $row->book_title . "&nbsp &nbsp &nbsp - "  
      	. " $row->edition_name  &nbsp   &nbsp -
		$row->release_date
</p></a>";echo "<br>";
}?>
