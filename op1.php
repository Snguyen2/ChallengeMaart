<?php
/**
 * Created by PhpStorm.
 * User: Sang Nguyen
 * Date: 26-3-2019
 * Time: 10:46
 */?>

<!DOCTYPE HTML>
<html>
    <head><title>Challenge</title></head>
<body style="
    background-color:
<?php
if(isset($_GET["submit"]))
{
    echo $_GET["text"];
}
?>
    ">
<style>
    input {
        padding: 0 5px 0 0;
    }
</style>
<pre>
    <form>
        <input type="text" name="text"/> <input type="submit" name="submit" value="verstuur"/>
    </form>
</pre>
</body>
</html>
