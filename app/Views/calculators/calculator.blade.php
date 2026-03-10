<div class="container-fluid py-2">
    <div class="row">
        <div class="col-md">
            <div>
                <form action="#" method="GET">
                    <input name="summand1" size="6">
                    <input name="operation" size="1" >
                    <input name="summand2" size="6">
                    <button class="btn btn-dark" name="equally">=</button>
                </from>
                <?= $res ?? ''  ?>
            </div>
        </div>
    </div>

    <div class="row">
        <?php if(isset($_GET['show'])): ?>
            <div class="col-md">
                <?php foreach($calculations as $calculation): ?>
                    <?= $calculation['num1'], ' ', $calculation['operation'], ' ', $calculation['num2'] . ' = ', $calculation['result'] . '<br>'; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="row py-1">
        <div>
            <div class="col-md">
                <button class="btn btn-dark" name='show'>Показать последние вычисления</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div>
            <div class="col-md">
                <button class="btn btn-dark" name='close'>Закрыть последние вычисления</button>
            </div>
        </div>
    </div>
</div>