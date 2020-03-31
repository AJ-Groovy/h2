<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>

<?php
if ($users_table_exists) {
    require_once('partials/placeholder.php');
    require_once('partials/createUserForm.php');
    $users = get_users($pdo);
    require_once('partials/getUserByIdForm.php');
    require_once('partials/deleteUsersByIdForm.php');

} else {
    require_once('partials/form.php');
}


?>
</body>

</html>