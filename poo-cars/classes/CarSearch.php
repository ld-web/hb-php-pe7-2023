<?php

require_once __DIR__ . '/Car.php';

class CarSearch
{
    private const YEAR_GET_PARAM = 'y';
    private ?int $year = null;

    public function __construct(
        /** @var Car[] $cars */
        private array $cars
    ) {
        if (isset($_GET[self::YEAR_GET_PARAM])) {
            $yearGetParam = intval($_GET[self::YEAR_GET_PARAM]);

            if ($yearGetParam !== 0) {
                $this->year = $yearGetParam;
            }
        }
    }

    /**
     * @return Car[]
     */
    public function getResults(): array
    {
        if ($this->year !== null) {
            return array_filter(
                $this->cars,
                fn (Car $car) => $this->year === $car->getYear()
            );
        }

        return $this->cars;
    }

    /**
     * @return int[]
     */
    public function getYears(): array
    {
        $years = array_unique(
            array_map(
                fn (Car $car): int => $car->getYear(),
                $this->cars
            )
        );

        sort($years);
        return $years;
    }
}
