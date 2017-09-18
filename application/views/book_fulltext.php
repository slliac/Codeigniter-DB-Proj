	

<?php

foreach ($query_fulltext->result() as $row) 
{ 
echo "<div id = " . "content" . ">"; 
      echo "<h2>" . $row->book_title . "</h2>";
      echo "<img src='/CodeIgniter/images/" . $row->cover_photo . "' alt=''/ >";
      echo  "<p>"
      			. $row->author
      			. "</p>";
      echo "<p>" . "Subject area: " . $row->	subject_area . "</p>";

	echo "<p>" . "ISBN: " . $row->ISBN . "</p>";
	echo "<p>" . "Edition: " . $row->edition_name . "</p>";
"</div>";

     }

?>
<br>