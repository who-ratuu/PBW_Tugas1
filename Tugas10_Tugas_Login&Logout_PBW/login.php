<!DOCTYPE html>
<html>
<head>
    <title>Login Klinik Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>Login Klinik Hewan</h2>

<?php if (isset($_GET['message'])): ?>
<div class="alert alert-info">
    <?= htmlspecialchars($_GET['message']) ?>
</div>
<?php endif; ?>

<form method="post" action="proses_login.php">

    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control">
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>

    <button class="btn btn-primary">Login</button>

</form>

</body>
</html>