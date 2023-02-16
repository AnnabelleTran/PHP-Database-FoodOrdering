<!-- Footer -->
<?php include "header.php"?>
<style><?php include 'css/style.css' ?></style>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['grocery_id']))
    {
      $groceryid = $_GET['grocery_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM grocerylist WHERE id = $groceryid ";
      $view_grocerylist= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_grocerylist))
        {
          $id = $row['id'];
          $amount = $row['amount'];
          $name = $row['name'];
          $type = $row['type'];
          $price = $row['price'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $amount = $_POST['amount'];
      $name = $_POST['name'];
      $type = $_POST['type'];
      $price = $_POST['price'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE grocerylist SET amount = '{$amount}' , name = '{$name}' , type= '{$type}', price = '{$price}' WHERE id = $groceryid";
      $update_grocery = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Grocery Item Updated Successfully!')</script>";
    }             
?>
<div class = "maincontainer">
  <div class = "mainbody">
  <h1 class = "heading" >Update grocery Details</h1>
    <form class = "infoform" action="" method="post">
      <div class = "formq">
        <label class = "qlabel" for="amount" >First Name</label>
        <input class = "qinput" type="text" name="amount" value="<?php echo $amount  ?>">
      </div>

      <div class = "formq">
        <label class = "qlabel" for="name" >Last Name</label>
        <input class = "qinput" type="text" name="name" value="<?php echo $name  ?>">
      </div>
        
    
      <div class = "formq">
        <label class = "qlabel" for="type" >Type</label>
        <input class = "qinput" type="type" name="type" value="<?php echo $type  ?>">
      </div>  
      
      <div class = "formq">
        <label class = "qlabel" for="price" >Price</label>
        <input class = "qinput" type="text" name="price" value="<?php echo $price  ?>">
      </div>  

      <div>
                    <input class = "submitbutton" type = "submit" name = "create" value = "Submit">
                </div>
            </form>
            <div style = "text-align: center;">
            <a  style = "margin-left: 0;" class = "backbutton" href = "home.php"> Back </a>
        </div>
        </div>
        <div style = "height: 120%;" class = "dashboard">
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
</div>


      

<!-- Footer -->
<?php include "footer.php" ?>