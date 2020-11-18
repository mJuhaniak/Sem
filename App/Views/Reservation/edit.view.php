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
                    <label>Počet ľudí</label>
                    <input name="people" type="number" min="2" max="20" required
                           class="form-control" value="<?=$reservation->getPeople()?>">
                </div>
                <div class="form-group">
                    <label>Telefónne číslo</label>
                    <input name="phone" type="text" required pattern="^(09)([0-9]{2})+\s([0-9]{3})+\s([0-9]{3})"
                           title="Telefónne číslo zadajte vo formáte 09-- --- ---" class="form-control" value="<?=$reservation->getPhone()?>">
                </div>
                <button type="submit" class="btn btn-success" style="margin-bottom: 50px">Submit</button>
                <a href="?c=reservation&a=editUser&name=<?=$reservation->getName()?>" class="btn btn-primary" style="margin-bottom: 50px">Späť</a>
            </form>
        </div>
    </div>
</div>