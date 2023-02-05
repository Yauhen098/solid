<?php

namespace Solid\Examples\SRP;

class Car {
    public function startEngine()
    {
    }

    public function stopEngine()
    {
    }

    public function turnOnRadio()
    {
    }

    public function turnOffRadio()
    {
    }
}

class Starter {
    public function startEngine()
    {
    }
    public function otherMethod()
    {
    }
}

class RepairService {
    public function stopEngine()
    {
    }
    public function otherMethod()
    {
    }
}

class RadioMarket {
    public function turnOnRadio()
    {
    }

    public function turnOffRadio()
    {
    }

    public function otherMethod()
    {
    }
}

class CarEngine {
    public function startEngine()
    {
    }

    public function stopEngine()
    {
    }
}

class CarRadio {
    public function turnOnRadio()
    {
    }
    public function turnOffRadio()
    {
    }
}

class CarCommon {
    protected $carEngine;
    protected $carRadio;
    public function __construct(CarEngine $engine, CarRadio $radio)
    {
        $this->engine = $engine;
        $this->radio = $radio;
    }

    public function startEngine()
    {
        $this->radio->startEngine();
    }
    public function stopEngine()
    {
        $this->radio->stopEngine();
    }

    public function turnOnRadio()
    {
        $this->radio->turnOnRadio();
    }
    public function turnOffRadio()
    {
        $this->radio->turnOffRadio();
    }
}
