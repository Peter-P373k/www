<?php
//echo $_SERVER['PHP_SELF'];
?>
<?php
if (!empty($_POST['data'])) {
    echo 'Form has been submitted';
    // code to process data from form
}
?>
<html>
<body>
    <form method="POST" action="<?php echo htmlspecialchars ( $_SERVER['PHP_SELF']); ?>">
        <input type="text" name="data" type="text" placeholder="Type in a string here" />
        <button type="submit">submit</button>
    </form>
</body>
</html>
