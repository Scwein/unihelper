<div class="container-fluid py-2">
    <div class="row">
        <div class="col-md">
            <form action="" method="get">
                <label for="word">Генератор случайных слов:</label>
                <input name="word" id="word">
                <button class="btn btn-dark" name="genWord">Вставить</button>
            </form>
            <?php if(isset($_GET['genWord'])): ?>
                <h4>Список слов:</h4>
                <?php foreach($words as $word): ?>
                    <ul>
                        <li>
                            <?= $word['word'] . '<br>' ?>
                        </li>
                    </ul>
                <?php endforeach; ?>
                <form action="">
                    <button class="btn btn-dark" name="genWord2">Выбрать случайное слово</button>
                </form>
            <?php endif; ?>
            
            <?php if (isset($_GET['genWord2'])): ?>
                <?= $word . ' - Ваше случайное слово' ?>
            <?php endif; ?>
        </div>
    </div>
</div>