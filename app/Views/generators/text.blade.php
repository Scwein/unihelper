<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 mt-2">
            <pre>
Всего символов: <?= $symbols ?? '' ?>

Всего слов: <?= $words ?? '' ?>

Всего предложений: <?= $sentences ?? '' ?>
            </pre>
            <form action="/generators/text" method="POST">
                <label for="Textarea" class="form-label"><h3>Введите текст</h1></label>
                <textarea name="text" class="form-control" id="Textarea" rows="10"><?= old('text', flag:'POST') ?></textarea>
                <button class="btn btn-dark mt-2">Посчитать</button>
            </form>
        </div>
    </div>
</div>