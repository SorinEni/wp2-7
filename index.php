<html>
  <head>
    <title> Book database </title>
  </head>
  <body>
 <?php
$author[0] = "J. K. Rowling";
$author[1] = "Dmitrij Gluchovskij";
$author[2] = "Adolf Hitler";
$author[3] = "George R. R. Martin";


$pages[0] = "694";
$pages[1] = "720";
$pages[2] = "288";
$pages[3] = "544";


$dateofpub[0] = "1997";
$dateofpub[1] = "1996";
$dateofpub[2] = "2005";
$dateofpub[3] = "1925";

 
$continuation[0] = "Harry Potter and the Chamber of Secrets";
$continuation[1] = "Zweites Buch";
$continuation[2] = "Metro 2034";
$continuation[3] = "A Clash of Kings";


$genre[0] = "Fantasy";
$genre[1] = "Autobiography";
$genre[2] = "Science fiction";
$genre[3] = "Post-apocalyptic science fiction";


$name[0] = "Metro 2033";
$name[1] = "Mein Kampf";
$name[2] = "A Game of Thrones";
$name[3] = "Harry Potter and the Philosopher's Stone";


$book[0]['Name'] = $name[2];
$book[0]['Author'] = $author[3];
$book[0]['Date of publication'] = $dateofpub[1];
$book[0]['Genre']  = $genre[0];
$book[0]['Number of pages'] = $pages[0];
$book[0]['Continuation'] = $continuation[3];

$book[1]['Name'] = $name[1];
$book[1]['Author'] = $author[2];
$book[1]['Date of publication'] = $dateofpub[3];
$book[1]['Genre']  = $genre[1];
$book[1]['Number of pages'] = $pages[1];
$book[1]['Continuation'] = $continuation[1];

$book[2]['Name'] = $name[0];
$book[2]['Author'] = $author[1];
$book[2]['Date of publication'] = $dateofpub[2];
$book[2]['Genre']  = $genre[3];
$book[2]['Number of pages'] = $pages[3];
$book[2]['Continuation'] = $continuation[2];

$book[3]['Name'] = $name[3];
$book[3]['Author'] = $author[0];
$book[3]['Date of publication'] = $dateofpub[0];
$book[3]['Genre']  = $genre[0];
$book[3]['Number of pages'] = $pages[2];
$book[3]['Continuation'] = $continuation[0];

?>

<h1> Výsledek božího díla </h1>

<?php
foreach($book[0] as $values => $value) {
  echo $values . ": " . $value;
  echo "<br>";
}
?>

  </body>
</html>