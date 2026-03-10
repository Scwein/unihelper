<div class="container-fluid py-2">
    <div class="row">
        <div class="col-md">
            <form action="">
                <label for="quantity">Количество:</label>
                <input name="quantity" size="1" value="<?= old("quantity", 8) ?>" id="quantity">

                <label for="num1">Первое число:</label>
                <input name="num1" size="1" value="<?= old("num1", 1) ?>" id="num1">

                <label for="num2">Второе число:</label>
                <input name="num2" size="1" value="<?= old("num2", 2) ?>" id="num2">

                <button name="start">Начать</button>
            </form>

            <?php if(isset($_GET['start'])): ?>
                <p>Последовательность:
                    <?php array_dump($fibonachi) ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>