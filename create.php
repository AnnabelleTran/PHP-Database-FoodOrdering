<!-- Header -->
<?php include "header.php" ?>
<style><?php include 'css/style.css' ?></style>

<?php
    if(isset($_POST['create']))
    {
        $amount = $_POST['amount'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $price = $_POST['price'];

        $query = "INSERT INTO grocerylist(amount,name,type,price) VALUES('{$amount}','{$name}','{$type}', '{$price}')";
        $add_grocery = mysqli_query($conn,$query);

        if(!$add_grocery){
            echo "something went wrong ". mysql_error($conn);
        }

        else{ echo "<script type = 'text/javascript'>alert('Grocery Item added successfully!')</script>";
        }
    }
    ?>

    <div class = "maincontainer">
        <div class = "mainbody">
        <h1 class = "heading">Add Grocery Details </h1>
            <form class = "infoform" action = "" method = "post">
                <div class = "formq">
                    <label class = "qlabel" for = "amount">Amount</label>
                    <input class = "qinput" type = "text" name = "amount">
                </div>
                <div class = "formq">
                    <label class = "qlabel"  for = "name">Name</label>
                    <input class = "qinput" type = "text" name = "name">
                </div>
                <div class = "formq">
                    <label class = "qlabel"  for = "type">Type</label>
                    <input class = "qinput" type = "type" name = "type">
                </div>
                <div class = "formq">
                    <label class = "qlabel"  for = "price">Price</label>
                    <input class = "qinput" type = "text" name = "price">
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


        <?php include "footer.php" ?>