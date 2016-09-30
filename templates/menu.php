<div class="col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <?php
        $modules = scandir('modules');
        $current = (isset($_GET['module'])) ? $_GET['module'] : "posts";
        foreach ($modules as $module): ?>
            <?php if ($module != "." && $module != ".."): ?>
                <?php $class = ($module == $current) ? "active" : ""; ?>
                <li role="presentation" class="<?= $class ?>"><a href="/?module=<?= $module ?>&action=read"><?= ucfirst($module) ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>

    </ul>

    <a class="btn btn-danger" href="index.php?logout=1">Logout</a>
</div>
<div class="col-md-9">