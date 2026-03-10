<div class="container-fluid py-2">
    <div class="row">
        <div class="col-md-2">
            <form action="" method="get">
                <label for="num1">Количество цифр y первого числа:</label>
                <input class="form-control" id="num1" name="num1" value="<?= old("num1", 1) ?>">
                <label>Операция:</label>
                <select class="form-select" name="operation">
                    <option value="+">+</option>
                    <option value="-" >-</option>
                    <option value="*" >*</option>
                </select>
                <label for="num2">Количество цифр y второго числа:</label>
                <input id="num2" class="form-control" name="num2" value="<?= old("num2", 1) ?>">
                <button class="btn btn-dark mt-2" name="start">Начать</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <?php if(isset($_GET['start'])): ?>
                <?php
                    if ($_SESSION['operation'] == '+') {
                        echo 'Сложить: <br>';
                        print_num($num1, $num2);
                    }

                    if ($_SESSION['operation'] == '-') {
                        echo 'Вычесть: <br>';
                        print_num($num1, $num2);
                    }

                    if ($_SESSION['operation'] == '*') {
                        echo 'Умножить: <br>';
                        print_num($num1, $num2);
                    }
                ?>
                <form action="" method="get">
                    <input class="form-control mt-1" name="ans">
                </form>
            <?php endif; ?>
            <?php if(isset($fail_msg)): ?>
                <?= "Твой ответ  - {$_GET['ans']}, a должен быть - {$_SESSION['res']}! Подряд правильных ответов - {$_SESSION['cnt']}" ?>
            <?php endif; ?>
        </div>
    </div>
</div>
