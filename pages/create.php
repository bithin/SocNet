<h3>Create account</h3>
<form action='<?php echo $_SERVER['SCRIPT_NAME']; ?>?p=new_account.php' method='post'>
    <input type="hidden" name="create_account"/>
    <table>
        <tr><td>Username:</td><td><input type="text" name="username"/></td></tr>
        <tr><td>Password:</td><td><input type="password" name="password"/></td></tr>
        <tr><td>Gender:</td><td><select name="gender"><option value="0">Male</option><option value="1">Female</option></select></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="Create"/></td></tr>
    </table>
</form>
