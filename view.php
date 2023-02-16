<!-- Header -->
<?php  include 'header.php'?>
<style><?php include 'css/style.css' ?></style>
<div class = "maincontainer">
  <div class = "mainbody">
<h1 class = "heading">Grocery Details</h1>
  <div>
    <table class = "list">
      <thead>
        <tr class = "tablerow">
              <th  class = "tablecol" scope="col">ID</th>
              <th  class = "tablecol" scope="col">Amount</th>
              <th  class = "tablecol" scope="col">Name</th>
              <th  class = "tablecol" scope="col">Type</th>
              <th  class = "tablecol" scope="col" style = "border-right: none;">Price</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              if (isset($_GET['grocery_id'])) {
                  $grocery_id = $_GET['grocery_id']; 
                  $query="SELECT * FROM grocerylist WHERE id = {$grocery_id} ";  
                  $view_grocerylist= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_grocerylist))
                  {
                    $id = $row['id'];                
                    $amount = $row['amount'];        
                    $name = $row['name'];         
                    $type = $row['type'];  
                    $price = $row['price'];     

                        echo "<tr class = 'inforow'>";
                        echo"<div class = 'tableinforow'>";
                        echo " <td class = 'id' >{$id}</td>";
                        echo " <td class = 'amount'> {$amount}</td>";
                        echo " <td class = 'name'> {$name}</td>";
                        echo " <td class = 'type'>{$type} </td>"; 
                        echo " <td style = 'border-right: none;' class = 'price'>{$price} </td>"; 
                        echo "</div>";
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
    <div>
    <a class = "backbutton" href="home.php"> Back </a>
    </div>
  </div>
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