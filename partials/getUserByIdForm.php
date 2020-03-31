<form method="post" name="get_user" action="/controllers/getUserById.php">
    <h1>Get User Data</h1>
    <select name="user_id">
    <?php foreach($users as $user): ?>
        <option value="<?php echo $user ?>"><?php echo $user ?></option>
    <?php endforeach; ?>
    </select>
    <button>Get User</button>
</form>