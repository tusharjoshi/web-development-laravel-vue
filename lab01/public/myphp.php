<?php
echo "<h1>Response from PHP page.</h1>\n";
$method = $_SERVER['REQUEST_METHOD'];
echo "Method: $method<br>\n";
?>
Request Data<br>
<pre>
<?php
print_r($_REQUEST);
?>
</pre>
<form action="myphp.php" method="POST">
    <label>Name:</label>
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>
