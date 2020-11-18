<?php /** @var Array $data */

/** @var \App\Models\Reservation $reservation */
foreach ($data['reservations'] as $reservation) {
    ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?=$reservation->getName()?></h5>
            <a href="?c=reservation&a=edit&id=<?=$reservation->getId()?>" class="btn btn-primary btn-sm">Editovať</a>
            <a href="?c=reservation&a=delete&name=<?=$reservation->getName()?>&id=<?=$reservation->getId()?>" class="btn btn-danger btn-sm">Zmazať</a>
            <p class="card-text"><?=$reservation->getArrivalDate()?> -> <?=$reservation->getDepartureDate()?></p>
        </div>
    </div>
<?php }
if (count($data['reservations']) == 0) {
  ?>
<h1>Ziaden zaznam</h1>

<?php
}
?>

<a href="?c=reservation" class="btn btn-primary" style="bottom: 20px">Späť</a>
