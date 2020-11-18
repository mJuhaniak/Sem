<?php /** @var Array $data */

/** @var \App\Models\Reservation $reservation */
foreach ($data['reservations'] as $reservation) {
    ?>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><?=$reservation->getName()?></h4>
            <h5>Dátum príchodu:</h5>
            <p class="card-text"><?=$reservation->getArrivalDate()?></p>
            <h5>Dátum odchodu:</h5>
            <p class="card-text"><?=$reservation->getDepartureDate()?></p>
            <h5>Počet ľudí:</h5>
            <p class="card-text"><?=$reservation->getPeople()?></p>
            <h5>Telefónne číslo:</h5>
            <p class="card-text"><?=$reservation->getPhone()?></p>
            <a href="?c=reservation&a=edit&id=<?=$reservation->getId()?>" class="btn btn-primary btn-sm">Editovať</a>
            <a href="?c=reservation&a=delete&name=<?=$reservation->getName()?>&id=<?=$reservation->getId()?>" class="btn btn-danger btn-sm">Zmazať</a>
        </div>
    </div>
<?php }
if (count($data['reservations']) == 0) {
  ?>
    <div class="alert alert-danger" role="alert" style="width: 90%; margin-left: 5%; margin-top: 20px">
        Pre <strong>"<?=$_GET['name']?>"</strong> neexistujú žiadne záznamy
    </div>
<?php
}
?>

<a href="?c=reservation" class="btn btn-primary" style="position: fixed; right: 15px; bottom: 15px">Späť</a>
