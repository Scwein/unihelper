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
                    <div class="d-flex justify-content-center title-card">
                        Случайная цитата
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-center title-card">
                        <?= $quote ?>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-center title-card">
                        <?= "- $author" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>