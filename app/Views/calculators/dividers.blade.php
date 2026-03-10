<div class="container-fluid py-2">
    <div class="row">
        <div class="col-md">
            <form action ='#' method="get">
                <label>Найти делители числа:</label>
                <input name='div' value="<?= old("div") ?>">
                <button class="btn btn-dark" name='divCalc'>Рассчитать</button>
            </form>
        </div>
    </div>

    <?php if(isset($divMas)): ?>
    <div class="row">
        <div class="col-md py-1">
            <?= 'Делители: ', array_dump($divMas[0])?>
        </div>
    </div>

    <div class="row py-1">
        <div class="col-md">
            <?= 'Сумма делителей: ', $divMas[1]?>
        </div>
    </div>

    <div class="row py-1">
        <div class="col-md">
            <?= 'Количество делителей: ', $divMas[2] ?>
        </div>
    </div>
    <?php endif; ?>
</div>