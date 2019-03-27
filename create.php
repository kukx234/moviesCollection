<?php
    require_once 'db.php';
    require_once 'layouts/layoutTopBody.php';
    require_once 'Classes/Year.php';

    $year = new Year;
?>

<div class="form-group">
    <form action="" method="POST">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control">

        <label for="genre">Žanr</label>
        <input type="text" name="genre" id="genre" class="form-control">

        <label for="year">Godina</label>
        <select name="year" id="year" class="form-control">
            <?php
                $year->yearGenerator();
            ?>
        </select>

        <label for="length">Trajanje</label>
        <input type="number" name="length" id="length" class="form-control">

        <button type="submit" class="btn btn-primary mt-4">Spremi</button>
    </form>
</div>

<?php
    require_once 'show.php';
    require_once 'layouts/layoutBottomBody.php';
?>