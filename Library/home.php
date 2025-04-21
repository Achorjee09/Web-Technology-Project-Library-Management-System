<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<body>
  <head>
    <title>Book Borrowing System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AIUB LIBRARY</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">HOME</a></li>
      <li><a href="Signout.php">LOGOUT</a></li>
      <li><a href="#">TOKEN VALIDATION</a></li>
      <li><a href="#">BOOK SEARCH</a></li>
      <li><a href="#">BOOK LOAN</a></li>
      <li><a href="#">SEND REMINDER</a></li>
      
    </ul>
  </div>
</nav>

  <center><img src="aiub-logo.svg" width="150" height="200" alt="aiub-logo";></center>
  <h1 style="text-align:center;">AIUB Library</h1>


  <div class="library">
      <div class="book-item">
          <img src="book1.jpg" alt="Coshmojahi">
          <div class="book-title">Coshmojahi</div>
          <div class="book-status">Status: Available</div>
      </div>
      <div class="book-item">
          <img src="book2.jpg" alt="Control">
          <div class="book-title">Control</div>
          <div class="book-status">Status: Available</div>
      </div>
      <div class="book-item">
          <img src="book3.jpg" alt="Malis">
          <div class="book-title">Malis</div>
          <div class="book-status">Status: Available</div>
      </div>

      <div class="book-item">
          <img src="book4.jpg" alt="Sokher Korat">
          <div class="book-title">Sokher Korat</div>
          <div class="book-status">Status: Available</div>
      </div>
      <div class="book-item">
          <img src="book5.jpg" alt="Othoba Hoyni Ghum Bohukal">
          <div class="book-title">Othoba Hoyni Ghum Bohukal</div>
          <div class="book-status">Status: Available</div>
      </div>
      <div class="book-item">
          <img src="book6.jpg" alt="Amay Deko Na Ferano Jabe Na">
          <div class="book-title">Amay Deko Na Ferano Jabe Na</div>
          <div class="book-status">Status: Available</div>
      </div>
  </div>

  <h2>Select the book you want to borrow</h2>
      <form action="process.php" method = "post" >
          <label for="Book">Choose a Book:</label>
          <select id="Book" name="Book">
              <option value="Coshmojahi">Coshmojahi</option>
              <option value="Control">Control</option>
              <option value="Malis">Malis</option>
              <option value="Sokher Korat">Sokher Korat</option>
              <option value="Othoba Hoyni Ghum Bohukal">Othoba Hoyni Ghum Bohukal</option>
              <option value="Amay Deko Na Ferano Jabe Na">Amay Deko Na Ferano Jabe Na</option>
          </select>
          
          Name:<input type="text" name="sname">
          ID:<input type="text" name="sid">
          Email:<input type="text" name="email">
          Borrow Date:<input type="date" name="bdate">
          Expire Date:<input type="date" name="edate">
          <input type="submit" value = "Submit" name="submit">
      </form>

</body>
</html> 