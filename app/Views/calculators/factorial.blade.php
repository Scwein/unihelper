<div class="container-fluid py-2">
    <div class="row">
        <div class="col-md">
            <form action ='#' method="get">
                <label>Факториал числа:</label>
                <input name = 'fact' value="<?= old("fact") ?>">
                <button class="btn btn-dark" name='equally'>Рассчитать</button>
            </form>
            <?= $factorial ?? '' ?>
        </div>
    </div>
</div>