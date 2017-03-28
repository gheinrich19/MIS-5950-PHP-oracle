<?php
//File login.php

?>
<html><head><style type = "text/css">
    table.center {

    margin-left:auto;
    margin-right:auto;

}

</style></head><body style = "background-color:burlywood;">
<div style="text-align: center;">
    <h1 style="color: indigo;">Sign On Page</h1>
    <form   method="post" action="verify.php">
        <table class="center">
            <tr><td>User:</td><td><input type="text" name="user" </td></tr>
            <tr><td>Password:</td><td><input type="password" name="password" </td></tr>
            <tr><td></td><td></td></tr>
            <tr><td></td><td><input type="submit" value="Log In" </td></tr>
            <tr><td></td></tr>
            </table></form></div>
    </body>
</html>

