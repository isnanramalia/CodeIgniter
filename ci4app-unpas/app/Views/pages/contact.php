<?= $this->extend('layout/tempate'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>contact us</h1>
            <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li><?= $a['tipe']; ?></li>
                    <li><?= $a['alamat']; ?></li>
                </ul>
            <?php endforeach ?>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla temporibus ullam asperiores numquam, harum magnam fuga deleniti! Suscipit odio distinctio, adipisci sapiente molestiae, eveniet, minus maiores illum porro voluptate labore?</p>
        </div>
    </div>
</div>