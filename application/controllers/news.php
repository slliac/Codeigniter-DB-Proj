<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News extends CI_Controller {
	public function index()
	{
		$data["pageTitle"] = "Welcome";
		$data["pageHeading1"] = "Best 5 selling books";
		$data["pageHeading2"] = "Latest 5 selling books";			
		$this->load->database();
		$sql_string = 'SELECT * FROM subject ORDER BY sort';
		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
		$sql_query = $this->db->query($sql_string);
		$data["query_categories"] = $sql_query;		
		
		$sql_string = 'SELECT * FROM book ORDER BY sales_volume DESC LIMIT 5';
		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
		$sql_query = $this->db->query($sql_string);	
		$data["query_selling"] = $sql_query;

		$sql_string = 'SELECT * FROM book JOIN edition ON book.ISBN = edition.ISBN ORDER BY edition.release_date DESC LIMIT 5';
		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
		$sql_query = $this->db->query($sql_string);	
		$data["query_latest"] = $sql_query;
		

		$this->load->view('header', $data);
		$this->load->view('navigation', $data);
		$this->load->view('selling', $data);
		$this->load->view('latest', $data);
		$this->load->view('footer', $data);		
	}
	public function categories()
	{
		$data["pageTitle"] = "News Category";
		$data["pageHeading"] = "Please select a book category";
		
		$this->load->database();
		$sql_query = $this->db->query('SELECT * FROM subject ORDER BY sort');
		
		$data["query_categories"] = $sql_query;
		$this->load->view('categories', $data);
	}
	public function listing()
	{
		$data["pageTitle"] = "News Listing";
		$data["pageHeading"] = "Please select a book below";
		$this->load->database();	
		
		$sql_string = 'SELECT * FROM subject ORDER BY sort';
		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
		$sql_query = $this->db->query($sql_string);
		$data["query_categories"] = $sql_query;			
		$sql_string = "SELECT * FROM book" . " WHERE 				subject_id='" . $this->uri->segment(3) . "' ";

		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
		$sql_query = $this->db->query($sql_string);		
		$data["query_listing"] = $sql_query;
				
		$this->load->view('header', $data);
		$this->load->view('navigation', $data);
		$this->load->view('book_listing', $data);
		$this->load->view('footer', $data);		
	}

	public function fulltext()
	{
		$data["pageTitle"] = "Viewing News";
		$this->load->database();
		
		$sql_string = 'SELECT * FROM subject ORDER BY sort';
		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
		$sql_query = $this->db->query($sql_string);
		$data["query_categories"] = $sql_query;			


$sql_string = "SELECT * "

				 . " FROM subject, book"
				 . " JOIN edition "
				. "ON edition.ISBN = book.ISBN"
				 . " WHERE book.subject_id = 							subject.sort"
				 . " AND book.ISBN='"
				 . $this->uri->segment(3)
				 . "'"

;
		$sql_query = $this->db->query($sql_string);
		$data["query_fulltext"] = $sql_query;
$sql_string = "SELECT chapter_title, chapter_no from chapter join book ON book.ISBN = chapter.ISBN
WHERE chapter.ISBN='"
				 . $this->uri->segment(3)
				 . "'";
		$sql_query = $this->db->query($sql_string);
		$data["query_fulltext_chapter"] = $sql_query;



		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;


		$this->load->view('header', $data);
		$this->load->view('navigation', $data);
		$this->load->view('book_fulltext', $data);
		$this->load->view('book_fulltext_chapter', $data);
		$this->load->view('footer', $data);
		
	}
function search()
	{
		$data["pageTitle"] = "News Listing";
		$data["pageHeading"] = "Please select a book below";

		$this->load->database();	
		$select = "WOW";
		$sql_string = 'SELECT * FROM subject order by sort';
		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
		$sql_query = $this->db->query($sql_string);
		$data["query_categories"] = $sql_query;			
if (isset ($select)&&$select!=""){
                $select=$_POST ['sel'];
            }	
	
if($select == "book_title"){
$sql_string = "SELECT * FROM book JOIN edition ON book.ISBN = edition.ISBN"
									 ." WHERE   $select LIKE '%"
									. $_POST['keyword']
									. "%' " 


;}
else if($select == "author"){
$sql_string = "SELECT * FROM book JOIN edition ON book.ISBN = edition.ISBN"
									 ." WHERE   $select LIKE '%"
									. $_POST['keyword']
									. "%' " 


;}

else if($select == "publisher"){
$sql_string = "SELECT * FROM book JOIN edition ON book.ISBN = edition.ISBN"
									 ." WHERE   $select LIKE '%"
									. $_POST['keyword']
									. "%' " 


;}
else if($select == "subject_area"){
$sql_string = "SELECT * FROM subject JOIN book ON book.subject_id = subject.subject_id"
									 ." WHERE    $select LIKE '%"
									. $_POST['keyword']
									. "%' " 



;}
else if($select == "sales_volume"){
$sql_string = "SELECT * FROM book"
									 ." WHERE    $select LIKE '%"
									. $_POST['keyword']
									. "%' " 



;}

else if($select == "chapter_title"){
$sql_string = "SELECT DISTINCT chapter_title, chapter.ISBN, book.book_title FROM chapter JOIN book ON book.ISBN = chapter.ISBN"
									 ." WHERE    $select LIKE '%"
									. $_POST['keyword']
									. "%' " . "GROUP BY  chapter_title"



;}

else if($select == "release_date" &&strlen($_POST['keyword'])== 4 || $select == "release_date" && $_POST['keyword'] == "")
{
$sql_string = "SELECT * FROM book JOIN edition ON book.ISBN = edition.ISBN"
									 ." WHERE    $select LIKE '"
									. $_POST['keyword']
									. "%' " 


;}
else $sql_string = 'SELECT * from book where book_title = ""';
		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;

		$sql_query = $this->db->query($sql_string);		
		$data["query_listing"] = $sql_query;
		
		$this->load->view('header', $data);
		$this->load->view('navigation', $data);
		if($select == "chapter_title")
		$this->load->view('book_listing_chapter', $data);
		else if($select == "author")
		$this->load->view('book_listing_author', $data);
		else if($select == "release_date")
		$this->load->view('book_listing_release', $data);
		else if($select == "subject_area")
		$this->load->view('book_listing_subject', $data);
		else if($select == "publisher")
		$this->load->view('book_listing_publisher', $data);
		else if($select == "sales_volume")
		$this->load->view('book_listing_sales', $data);
		else
		$this->load->view('book_listing', $data);
		$this->load->view('footer', $data);
		
	}	

}
?>
