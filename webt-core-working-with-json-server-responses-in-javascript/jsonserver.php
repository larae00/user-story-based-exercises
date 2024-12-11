<?php

class WeatherEntry implements JsonSerializable{

    public function __construct(public int $temperature, public bool $rain){
        $this->temperature = $temperature;
        $this->rain = $rain;
    }

    public function jsonSerialize(): array {
        return [
            'temperature' => $this->$temperature,
            'name' => $this->$rain
        ];
    }
    

}

$ws = new WeatherEntry(25, true);
header('Content-Type: application/json');
?>