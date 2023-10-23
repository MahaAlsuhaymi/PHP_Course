<from action="form.php" method="GET">
    First Name: <input type="text" name="fname">
    <br>
    Last Name: <input type="text" name="lname">
    <br>
    <input type="submit" >
</form>

<?php 

echo $_REQUEST["fname"];
echo $_REQUEST["lname"];

?>