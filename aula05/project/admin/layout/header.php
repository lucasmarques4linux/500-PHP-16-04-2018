<?php require_once dirname(dirname(__DIR__)).'/include/config/dir-config.php'; ?>
<?php require_once dirname(dirname(__DIR__)).'/include/funcs/session-funcs.php'; ?>

<?php if (isLogged()): ?>
<p><a href="<?= BASEDIR.'admin/login/actions/logout.php' ?>">Logout</a></p>
<?php endif; ?>