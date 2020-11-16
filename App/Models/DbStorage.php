<?php
declare(strict_types=1);

namespace App\Models;

class DbStorage
{
    private $user = 'root';
    private $pass = 'dtb456';
    private $db = 'reservations';
    private $host = 'localhost';

    private PDO $pdo;

    /**
     * DbStorage constructor.
     */
    public function __construct()
    {
        $this->pdo = new PDO("mysql:dbname={$this->db};host=$this->host", $this->user, $this->pass,
                                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]);
    }


    /**
     * @return Reservation[]
     */
    public function getAll() : array {
        $stmt = $this->pdo->query("SELECT * FROM reservations");
        $reservations=[];
        while ($row = $stmt->fetch()) {
            $reservation = new Reservation($row['arrival_date'], $row['departure_date'], $row['name'], $row['people'], $row['phone']);
            $reservations[] = $reservation;
        }
        return $reservations;
    }

    public function saveReservation(Reservation $reservation)
    {
        $stmt = $this->pdo->prepare("INSERT INTO reservations (arrival_date, departure_date, name, people, phone) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$reservation->getArrivalDate(), $reservation->getDepartureDate(), $reservation->getName(), $reservation->getPeople(), $reservation->getPhone()]);
    }

    public function createPost(string $arrival_date, string $departure_date, string $name, int $people, string $phone)
    {
        $reservation = new Reservation($arrival_date, $departure_date, $name, $people, $phone);
        $this->saveReservation($reservation);
    }
}