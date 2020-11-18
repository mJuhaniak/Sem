
<div class="container">
    <div class="row">
        <div class="col">
            <form method="post">
                <div class="form-group">
                    <label style="margin-top: 50px">Zadajte meno a priezvisko</label>
                    <input name="name" type="text" required pattern="^[A-Z]{1}[a-zA-Z-]+\s[A-Z]{1}[a-zA-Z-]+$" title="Zadajte meno a priezvisko oddelené medzerou a s veľkým začiatočným písmenom" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" style="margin-bottom: 50px">Potvrdiť</button>
                <a href="?c=reservation" class="btn btn-primary" style="margin-bottom: 50px">Späť</a>
            </form>
        </div>
    </div>
</div>
