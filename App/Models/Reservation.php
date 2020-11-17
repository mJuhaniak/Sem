<?php
declare(strict_types=1);
namespace App\Models;
use App\Core\Model;
use DateTime;

class Reservation extends Model
{

    protected $id;
    protected ?string $arrival_date;
    protected ?string $departure_date;
    protected ?string $name;
    protected ?int $people;
    protected ?string $phone;

    /**
     * Reservation constructor.
     * @param string|null $arrival_date
     * @param string|null $departure_date
     * @param string|null $name
     * @param int|null $people
     * @param string|null $phone
     */
    public function __construct(?string $arrival_date = null, ?string $departure_date = null, ?string $name = null, ?int $people = null, ?string $phone = null)
    {
        $this->arrival_date = $arrival_date;
        $this->departure_date = $departure_date;
        $this->name = $name;
        $this->people = $people;
        $this->phone = $phone;
    }

    static public function setDbColumns()
    {
        return ['id', 'arrival_date', 'departure_date', 'name', 'people', 'phone'];
    }
    static public function setTableName()
    {
        return 'reservations';
    }

    /**
     * @return string|null
     */
    public function getArrivalDate()
    {
        return $this->arrival_date;
    }

    /**
     * @param string|null $arrival_date
     */
    public function setArrivalDate(?string $arrival_date): void
    {
        $this->arrival_date = $arrival_date;
    }

    /**
     * @return string|null
     */
    public function getDepartureDate()
    {
        return $this->departure_date;
    }

    /**
     * @param string|null $departure_date
     */
    public function setDepartureDate(?string $departure_date): void
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
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}