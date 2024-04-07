<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Library Catalog</title>
<style>
  /* Inline CSS for simplicity - consider using an external stylesheet in production */
  .header {
    background-color: #094067;
    color: white;
    padding: 10px;
    display: flex;
    align-items: center;
  }
  .header img {
    background-color: #094067;
    height: 40px; /* Your logo height */
  }
  .search-container {
    display: flex;
    flex-grow: 1;
    justify-content: center;
    margin: 0 20px;
  }
  .search-container input[type="text"] {
    padding: 5px;
    border-radius: 20px;
    margin-right: 5px;
    min-width: 250px;
  }
  .search-container button {
    cursor: pointer;
  }
  .header .menu {
    display: flex;
  }
  .header .menu button {
    background-color: #0055A4; 
    color: white;
    border: none;
    padding: 10px 20px;
    margin-left: 5px;
    cursor: pointer;
  }
  .header .menu .signup button {
    background-color: #3DA9FC; 
    color: white;
    border: none;
    border-radius: 12px;
    padding: 10px 40px;
    margin-left: 5px;
    cursor: pointer;
  }
</style>
</head>
<body>

<div class="header">
  <div class="logo">
    <img src="images/logo-db.jpg" alt="Library Logo">
  </div>
  <span>CATALOG</span>
  <div class="search-container">
    <input type="text" placeholder="Search...">
    <button type="submit"><img src="images/magnifying_glass.png" alt="Search"></button>
    <button onclick="toggleFilterView()"><img src="images/filter.png" alt="Search"></button> 
  </div>
  <div class="menu">
    <button onclick="window.location.href='home.php'">Home</button>
    <button onclick="window.location.href='books.php'">Books</button>
    <button onclick="window.location.href='login.php'">Login</button>
    <div class="signup">
      <button onclick="window.location.href='signup.php'">Sign Up</button>
    </div>
  </div>
</div>

<!-- Add your JavaScript here for toggleFilterView and other interactions -->

<script>
function toggleFilterView() {
  // Implement the logic to toggle the filter view on the page
}
</script>

</body>
</html>    