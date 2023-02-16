<?php include "header.php"?>
<style><?php include 'css/style.css' ?></style>
<div class = maincontainer>
    <div class = "mainbody">
        <h1 class = "heading">Inventory Grocery Management System</h1>
            <a class = "createbutton" href = "create.php">Create New Grocery Item</a> 

        <table class = "list">
                <tr class = "tablerow">
                    <th class = "tablecol">ID</th>
                    <th class = "tablecol">Amount</th>
                    <th class = "tablecol">Name</th>
                    <th class = "tablecol">Type</th>
                    <th class = "tablecol">Price</th>
                    <th class = "tablecol" style = "border-right: none;">Make Changes</th>
                </tr>
                <tr>

            <?php
            $query = "SELECT * FROM grocerylist";
            $view_grocerylist = mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($view_grocerylist)){
                $id = $row['id'];
                $amount = $row['amount'];
                $name = $row['name'];
                $type = $row['type'];
                $price = $row['price'];

                echo "<tr class = 'inforow'>";
                echo"<div class = 'tableinforow'>";
                echo "<td class = 'id' scope = 'row'> {$id}</td>";
                echo "<td class = 'amount'> {$amount}</td>";
                echo "<td class = 'name'> {$name}</td>";
                echo "<td class = 'type'> {$type}</td>";
                echo "<td class = 'price'> $$price</td>";

                echo "<td style = 'border-right: none;'> <a class = 'view' href = 'view.php?grocery_id={$id}'> <i></i> View</a>  <a class = 'del' href = 'delete.php?delete={$id}'> <i></i> Delete</a>  <a class = 'edit' href = 'update.php?grocery_id={$id}'> <i></i> Edit</a>  </td>";
                echo "</div>";
                echo "</tr>";
            }
            ?>
            </table>
            <a class = "backbutton"href = "index.php">Back</a>
            </div>

            <div>
    <div>
    <div class = "dashboard">
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
            <?php include "footer.php" ?>

            