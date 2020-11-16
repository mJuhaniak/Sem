<?php /** @var Array $data */
/** @var \App\Models\Article $article */
$article = $data['article'];
?>

<div class="container">
    <div class="row">
        <div class="col">

            <form method="post">
                <div class="form-group">
                    <label>Titulok</label>
                    <input name="title" type="text" class="form-control" value="<?=$article->getTitle()?>">
                </div>
                <div class="form-group">
                    <label>Text</label>
                    <textarea name="text" class="form-control"><?=$article->getText()?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>