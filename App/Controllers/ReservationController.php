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
        if (isset($_POST['title'])) {
            $article = new Reservation($_POST['title'], $_POST['text']);
            $article->save();
            header("Location: ?c=reservation");
        }
        return ['name' => 'Rezervacie', 'info' => 'textRezervacie'];
    }

    public function edit()
    {
        {
            return ['name' => 'Rezervacie', 'info' => 'textRezervacie'];
        }
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