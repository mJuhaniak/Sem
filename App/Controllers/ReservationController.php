<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Models\Reservation;
use App\Models\CsvStorage;

class ReservationController extends AControllerBase
{
    public function index()
    {
        return ['name' => 'Rezervacie', 'info' => 'textRezervacie',
                'reservations' => Reservation::getAll()];
    }

    public function add()
    {
        if (isset($_POST['arrival_date'])) {
            $reservation = new Reservation($_POST['arrival_date'], $_POST['departure_date'], $_POST['name'], $_POST['people'], $_POST['phone']);
            $reservation->save();
            header("Location: ?c=reservation");
        }
        return ['name' => 'Rezervacie', 'info' => 'textRezervacie'];
    }

    public function edit()
    {
        $id = $_GET['id'];
        $reservation = new Reservation();
        $reservation->getOne($id);

        if (isset($_POST['arrival_date']))
        {
            $reservation->setArrivalDate($_POST['arrival_date']);
            $reservation->setDepartureDate($_POST['departure_date']);
            $reservation->setName($_POST['name']);
            $reservation->setPeople($_POST['people']);
            $reservation->setPhone($_POST['phone']);
            $reservation->save();
            header("Location: ?c=reservation");
        }

        return ['name' => 'Rezervacie', 'info' => 'textRezervacie',
            'reservation' => $reservation];
    }

    public function editUser()
    {
        return ['name' => 'Rezervacie', 'info' => 'textRezervacie'];
    }

    public function delete()
    {
        $id = $_GET['id'];
        $article = new Reservation();
        $article->getOne($id);
        $article->delete();
        header("Location: ?c=reservation");

        exit();
    }
}