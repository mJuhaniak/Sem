<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Models\Reservation;

class ReservationController extends AControllerBase
{
    public function index()
    {
        $name = 'Peto';
        return ['name' => 'Rezervacie', 'info' => 'textRezervacie',
                'reservations' => Reservation::getAll($name)];
    }

    public function add()
    {
        if (isset($_POST['arrival_date'], $_POST['departure_date'], $_POST['name'], $_POST['people'], $_POST['phone'])) {
            $reservation = new Reservation($_POST['arrival_date'], $_POST['departure_date'], $_POST['name'], (int)$_POST['people'], $_POST['phone']);
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
            $name = $_POST['name'];
            $reservation->setArrivalDate($_POST['arrival_date']);
            $reservation->setDepartureDate($_POST['departure_date']);
            $reservation->setName($_POST['name']);
            $reservation->setPeople($_POST['people']);
            $reservation->setPhone($_POST['phone']);
            $reservation->save();
            header("Location: ?c=reservation&a=editUser&name=" . $name);
        }

        return ['name' => 'Rezervacie', 'info' => 'textRezervacie',
            'reservation' => $reservation];
    }

    public function chooseUser()
    {
        if (isset($_POST['name'])) {
            header("Location: ?c=reservation&a=editUser&name=" . $_POST['name']);
        }
        return ['name' => 'Rezervacie', 'info' => 'textRezervacie'];
    }

    public function editUser()
    {
        return ['name' => 'Rezervacie', 'info' => 'textRezervacie',
            'reservations' => Reservation::getAll($_GET['name'])];
    }

    public function delete()
    {
        $name = $_GET['name'];
        $id = $_GET['id'];
        $reservation = new Reservation();
        $reservation->getOne($id);
        $reservation->delete();
        header("Location: ?c=reservation&a=editUser&name=" . $name);

        exit();
    }
}