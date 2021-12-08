<?php 
    namespace Simpla_factory;

    interface House 
    {
        public function getFloorCount(): int;
        public function getApartmentCount(): int;
    }

    class HighRiseBuilding implements House 
    {
        protected $floorCount;
        protected $apartmentCount;

        public function __construct(int $floorCount, int $apartmentCount)
        {
            $this->floorCount = $floorCount;
            $this->apartmentCount = $apartmentCount;
        }

        public function getFloorCount(): int
        {
            return $this->floorCount;
        }

        public function getApartmentCount(): int
        {
            return $this->apartmentCount;
        }
    }

    class HouseFactory 
    {
        public static function makeHouse(int $floorCount, int $apartmentCount): House
        {
            return new HighRiseBuilding($floorCount,$apartmentCount);
        }
    } 
    
    $house = HouseFactory::makeHouse(10,4);
    