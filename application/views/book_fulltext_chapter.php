

<?php

foreach ($query_fulltext_chapter->result() as $row) 
{ 

	echo "<p>" . "Chapter  ". $row->chapter_no . "&nbsp: ". $row->chapter_title . "</p>";
echo "<br>";



     }

?>
