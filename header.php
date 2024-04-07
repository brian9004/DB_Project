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
    color: white; /* for the text*/
    padding: 10px;
    display: flex;
    align-items: center;
  }
  .header img {

    height: 40px; /* Your logo height */
  }

  .logo img{ /* this is just for logo */
    height: 50px;
    width: 60px; 
    border-radius: 50%;
    object-fit: cover;
    margin-right: 20px;
  }

  .search-container { /* container housing middle section with search, box, and filter) */
    display: flex;
    flex-grow: 1;
    justify-content: center;
    margin: 0 20px;

  }
  .search-container input[type="text"] { /* just for the search box itself */
    padding: 5px;
    border-radius: 20px;
    margin-right: 5px;
    min-width: 300px;

  }
  .search-container button { /* for the magnifying and filter button containers */
    cursor: pointer;
    background: transparent;
    border: none;
  }

  .search-container button img {  /* for the magnifying and filter buttons */
  background-color: transparent;

  }

  .header .menu { /* continaer that houses right side buttons */
    display: flex;
    
  }

  .header .menu button { /*menu buttons */
    background-color: #0055A4; 
    color: white;
    border: none;
    padding: 10px 20px;
    margin-left: 5px;
    cursor: pointer;
    border-radius: 12px;
  }

  .header .menu button:hover { /* hover effect for menu button*/
    background-color: #003974;
  }

  .header .menu .signup button { /*signup button only */
    background-color: #3DA9FC; 
    color: white;
    border: none;
    border-radius: 12px;
    padding: 10px 40px;
    margin-left: 5px;
    cursor: pointer;
  }

  .header .menu .signup button:hover { /* hover effect for signup button*/
  background-color: #2C81BA; 
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
    <button style=filter:invert(100%) type="submit"><img src="images/magnifying_glass.png" alt="Search"></button>
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