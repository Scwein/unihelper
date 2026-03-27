<div class="container-fluid py-2">
    <div class="row">
        <div class="col-md">
            <form action = '' method="get">
                <label for="row">Введите ряд</label>
                <input id="row" name='row'>
                <button class="btn btn-dark" name='statistic'>=</button>
            </form>
        </div>
    </div>
    <?php if(isset($_GET['statistic'])): ?>
        <div class="row">
            <div class="col-md">Ряд (отсортированный): <?= array_dump($arrSort) ?></div>
        </div>

        <div class="row"> 
            <div class="col-md">Минимальное значение (min): <?= min($arr) ?></div>
        </div>

        <div class="row"> 
            <div class="col-md">Максимальное значение (max): <?= max($arr) ?></div>
        </div>

        <div class="row"> 
            <div class="col-md">Стандартное отклонение ряда (S): <?= standard_deviation($arr) ?></div>
        </div>

        <div class="row">
            <div class="col-md">Дисперсия ряда (D): <?= variance($arr) ?></div>
        </div>

        <div class="row">
            <div class="col-md">Среднее значение ряда (x̄): <?= avg_value($arr) ?></div>
        </div>

        <div class="row">
            <div class="col-md">Медиана ряда (M): <?= mediana($arr) ?></div>
        </div>
    <?php endif; ?>
</div>