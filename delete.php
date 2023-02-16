<!-- Footer -->
<?php  include "header.php" ?>
<style><?php include 'css/style.css' ?></style>

<?php 
     if(isset($_GET['delete']))
     {
         $grocery_id= $_GET['delete'];

         // SQL query to delete data from user table where id = $groceryid
         $query = "DELETE FROM grocerylist WHERE id = {$grocery_id}"; 
         $delete_query= mysqli_query($conn, $query);
        //  header("Location: home.php");
     }
     


              ?>


  <!-- a BACK button to go to the home page -->
  <div class = "maincontainer">
  <div class = "mainbody">
    <p class = "delnotif">Item deleted successfully!</p>
    <a class = "backbutton" href="home.php"> Back </a>
    </div>
  <div class = "dashboard" style = "height: 150%">
        <div class = "dashcontainer">
            <div style = "border-top: 1px solid white;" class = "dashlink">
            <a href = "index.php">Home</a>
            </div>
            <div class = "dashlink">
            <a href = "create.php">Add to List</a>
            </div>
            <div class = "dashlink">
            <a href = "home.php">View Inventory</a>
            </div>
            <div class = "dashlink">
            <a href = "google.com">Contact</a>
            </div>
            <div class = "dashlink">
            <a href = "google.com">Help</a>
            </div>
            <div class = "dashlink">
            <a href = "google.com">Settings</a>
            </div>
            <div class = "dashlink">
            <a href = "google.com">Log Out</a>
            </div>
        </div>
    </div>
    </div>
  <!-- Footer -->
<?php include "footer.php" ?>