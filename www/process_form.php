<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
    <form action="process_form.php" method="post">
        <input name="username">
        <input name="password" type="password">
        <button>Send</button>
    </form>
</body>
</html>


