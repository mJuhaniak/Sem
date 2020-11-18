<?php /** @var Array $data */
/** @var \App\Models\Reservation $reservation */
$reservation = $data['reservation']
?>

<div class="container">
    <div class="row">
        <div class="col">
            <form method="post">
                <div class="form-group">
                    <label style="margin-top: 50px">Dátum príchodu</label>
                    <input name="arrival_date" type="date" required
                           class="form-control" value="<?=$reservation->getArrivalDate()?>">
                </div>
                <div class="form-group">
                    <label>Dátum odchodu</label>
                    <input name="departure_date" type="date" required
                           class="form-control" value="<?=$reservation->getDepartureDate()?>">
                </div>
                <div class="form-group">
                    <label>Meno a priezvisko</label>
                    <input name="name" type="text" required pattern="^[A-Z]{1}[a-zA-Z-]+\s[A-Z]{1}[a-zA-Z-]+$"
                           title="Zadajte meno a priezvisko oddelené medzerou a s veľkým začiatočným písmenom"
                           class="form-control" value="<?=$reservation->getName()?>">
                </div>
                <div class="form-group">
                    <label>Počet ľudí</label>
                    <input name="people" type="number" min="2" max="20" required
                           class="form-control" value="<?=$reservation->getPeople()?>">
                </div>
                <div class="form-group">
                    <label>Telefónne číslo</label>
                    <input name="phone" type="text" required pattern="^(09)\d{8}"
                           title="Telefónne číslo zadajte vo formáte 09-- --- ---"
                           class="form-control" value="<?=$reservation->getPhone()?>">
                </div>
                <button type="submit" class="btn btn-success" style="margin-bottom: 50px">Submit</button>
            </form>
        </div>
    </div>
</div>