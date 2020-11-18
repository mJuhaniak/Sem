<?php /** @var Array $data */ ?>

<div class="container">
    <div class="row">
        <div class="col">
            <form method="post">
                <div class="form-group">
                    <label style="margin-top: 50px">Dátum príchodu</label>
                    <input name="arrival_date" type="date" required class="form-control" value="2020-12-24">
                </div>
                <div class="form-group">
                    <label>Dátum odchodu</label>
                    <input name="departure_date" type="date" required class="form-control" value="2020-12-26">
                </div>
                <div class="form-group">
                    <label>Meno a priezvisko</label>
                    <input name="name" type="text" required pattern="^[A-Z]{1}[a-zA-Z-]+\s[A-Z]{1}[a-zA-Z-]+$"
                           title="Zadajte meno a priezvisko oddelené medzerou a s veľkým začiatočným písmenom" class="form-control">
                </div>
                <div class="form-group">
                    <label>Počet ľudí</label>
                    <input name="people" type="number" required min="2" max="20" class="form-control">
                </div>
                <div class="form-group">
                    <label>Telefónne číslo</label>
                    <input name="phone" type="text" required pattern="^(09)([0-9]{2})+\s([0-9]{3})+\s([0-9]{3})" class="form-control"
                           title="Telefónne číslo zadajte vo formáte 09-- --- ---" value="0904 232 545">
                </div>
                <button type="submit" class="btn btn-success" style="margin-bottom: 50px">Potvrdiť</button>
                <a href="?c=reservation" class="btn btn-primary" style="margin-bottom: 50px">Späť</a>
            </form>
        </div>
    </div>
</div>


