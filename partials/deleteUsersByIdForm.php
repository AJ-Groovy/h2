<form method="post" name="delete_user" action="/controllers/deleteUsersById.php">
    <h1>Delete User</h1>
    <select multiple name="user_id[]">
    <?php foreach($users as $user): ?>
        <option value="<?php echo $user ?>"><?php echo $user ?></option>
    <?php endforeach; ?>
    </select>
    <button>Delete User</button>
</form>