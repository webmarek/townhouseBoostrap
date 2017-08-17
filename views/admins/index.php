<?php

if (!isset($_SESSION['is_logged_in_admin'])) {
    header('location: ' . ROOT_PATH);
    exit();
}

//var_dump($viewmodel);
?>

<div id="container">
    <div class="row">
        <div class="col">
            <a href="<?php echo ROOT_URL; ?>admins/addMonthAll" class="btn btn-secondary">Dodaj miesięczne
                zużycie</a>
        </div>
        <div class="col">
            <a href="<?php echo ROOT_URL; ?>admins/editParticular" class="btn btn-secondary">Edytuj lub popraw
                poszczególne</a>
        </div>
    </div>
</div>