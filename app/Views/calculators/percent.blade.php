<div class="container-fluid py-2">
    <div class="row">
        <div class="col-md">
            <form action='#' method="get">
                <label>Число:</label>
                <input name='num' value="<?= old("num") ?>" size="1">
                <label>Процент:</label>
                <input name='percent' value="<?= old("percent") ?>" size="1">%
                <button class="btn btn-dark" name='equally'>Поссчитать</button>
            </form>
            <?= $percent ?? '' ?>
        </div>
    </div>
</div>