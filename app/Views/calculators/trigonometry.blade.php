<div class="container-fluid py-2">
    <div class="row">
        <div class="col-md-8">
            <div class="float-start" style="width: 50px;">
                <img src="/assets/imgs/tri1.png" alt="">

                <img src="/assets/imgs/tri2.jpg" alt="">

                <img src="/assets/imgs/tri3.png" alt="">
            </div>

            <div class="sin me-1">
                <form action="" method="POST">
                    <label for="sin">sin</label>
                    (<input id="sin" name="sin" type="text" value="<?= old("sin", '', 'POST') ?>" size="1">)
                    <button class="btn btn-dark">=</button>
                    <?= $sin ?? '' ?>
                </form>
            </div>

            <div class="cos mt-1">
                <form action="" method="POST">
                    <label for="cos">cos</label>
                    (<input id="cos" name="cos" type="text" value="<?= old("cos", '', 'POST') ?>" size="1">)
                    <button class="btn btn-dark">=</button>
                    <?= $cos ?? '' ?>
                </form>
            </div>

            <div class="tg me-2 mt-1">
                <form action="" method="POST">
                    <label for="tg">tg</label>
                    (<input id="tg" name="tg" type="text" value="<?= old("tg", '', 'POST') ?>" size="1">)
                    <button class="btn btn-dark">=</button>
                    <?= $tg ?? '' ?>
                </form>
            </div>

            <div class="ctg mt-1">
                <form action="" method="POST">
                    <label for="ctg">ctg</label>
                    (<input id="ctg" name="ctg" type="text" value="<?= old("ctg", '', 'POST') ?>" size="1">)
                    <button class="btn btn-dark">=</button>
                    <?= $ctg ?? '' ?>
                </form>
            </div>
        </div>
    </div>
</div>