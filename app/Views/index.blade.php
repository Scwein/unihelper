<div class="container-fluid">
    <div class="row">
        <div class="col-md">
            <h1 class="text-center mt-2" style="font-size: 50px;">Главная страница</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10">

        </div>
        <div class="col-md-2">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <div class="d-flex justify-content-center title-card" id="quote_title">
                        Случайная цитата
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-center title-card" id="quote">
                        <?= $quote ?>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-center title-card" id="author">
                        <?= "- $author" ?>
                    </div>
                </div>
            </div>
            <div class="coppy-btn text-center">
                <button class="btn" onclick="copyQuote()">Копировать цитату</button>
            </div>
        </div>
    </div>
</div>