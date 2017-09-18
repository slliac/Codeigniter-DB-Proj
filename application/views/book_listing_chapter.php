<h2 id = "heading"><?php echo $pageHeading; ?></h2><br>
<?php foreach ($query_listing->result() as $row) 
{
echo  "<p>"
 	. '<a href="' . "/CodeIgniter/index.php/news/fulltext/" 
      	. $row->ISBN
      	. '" />'
      	. $row->book_title . "&nbsp &nbsp &nbsp - "  
      	. "  $row->chapter_title
</p></a>";echo "<br>";
}?>
