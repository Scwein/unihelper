<div class="container-fluid py-2">
    <div class="col-md">
        <form action ="#" method="get">
                <label>Процент выпадение предмета:</label>
                <input name='num1' size="10" value="<?= old("num1") ?>">
                <label>Количество попыток:</label>
                <input name='num2' size="10" value="<?= old("num2") ?>">
                <button class="btn btn-dark" name='equally'>=</button>
        </form>
        <?= isset($chance) ? $chance . '%' : '' ?>
    </div>
</div>