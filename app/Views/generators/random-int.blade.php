<div class="container-fluid py-2">
    <div class="row">
        <div class="col-md">
            <form action="" method="get">
                <label for="min">Минимальное число</label>
                <input name="min" value="<?= old("min", 1) ?>" size="1" id="min">

                <label for="max">Максимальное число</label>
                <input name="max" value="<?= old("max", 20) ?>" size="1" id="max">

                <button class="btn btn-dark" type="submit" name="genNum">Сгенерировать</button>
            </form>
            <?= $num ?? '' ?>
        </div>
    </div>
</div>