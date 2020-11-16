<?php
declare(strict_types=1);
namespace App\Models;
use App\Core\Model;
use DateTime;

class Reservation extends Model
{
    protected $arrival_date;
    protected $departure_date;
    protected ?string $name;
    protected ?int $people;
    protected $phone;

    /**
     * Reservation constructor.
     * @param $arrival_date
     * @param $departure_date
     * @param string|null $name
     * @param int $people
     * @param $phone
     */
    public function __construct($arrival_date = null, $departure_date = null, ?string $name = null, ?int $people = null, $phone = null)
    {
        $this->arrival_date = $arrival_date;
        $this->departure_date = $departure_date;
        $this->name = $name;
        $this->people = $people;
        $this->phone = $phone;
    }

    static public function setDbColumns()
    {
        return ['arrival_date', 'departure_date', 'name', 'people', 'phone'];
    }
    static public function setTableName()
    {
        return 'reservations';
    }

    /**
     * @return mixed
     */
    public function getArrivalDate()
    {
        return $this->arrival_date;
    }

    /**
     * @param mixed $arrival_date
     */
    public function setArrivalDate($arrival_date): void
    {
        $this->arrival_date = $arrival_date;
    }

    /**
     * @return mixed
     */
    public function getDepartureDate()
    {
        return $this->departure_date;
    }

    /**
     * @param mixed $departure_date
     */
    public function setDepartureDate($departure_date): void
    {
        $this->departure_date = $departure_date;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getPeople(): ?int
    {
        return $this->people;
    }

    /**
     * @param int|null $people
     */
    public function setPeople(?int $people): void
    {
        $this->people = $people;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }
}