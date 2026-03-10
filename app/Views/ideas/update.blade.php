<div class="container-fluid py-2">
    <div class="row">
        <div class="col-md text-center">
            <h3 class="text-center"><strong><?= $title_idea ?></strong></h3>

            <form action="/ideas" method=GET>
                
            <input class="form-control text-center" id="text_idea" value="<?= $text_idea ?>" name='text_idea' type='text' size=60>
            
            <input type='hidden' value="<?= $id ?>" name='id'>

            <div class="text-center">
                <button class="btn btn-dark mt-2" type='submit' name='saveChanges'>Сохранить изменения</button>
            </div>

            </form>
        </div>
    </div>
</div>