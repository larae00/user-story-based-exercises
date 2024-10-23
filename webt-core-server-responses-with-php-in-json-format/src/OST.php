<?php
    class OST implements JsonSerializable {

        //Constructor 
        public function __construct(protected int $id, protected string $name, protected string $gameName, protected int $releaseYear, protected array $trackList) {
            $this->id = $id;
            $this->name = $name;
            $this->gameName = $gameName;
            $this->releaseYear = $releaseYear;
            $this->trackList = $trackList;
        }

        public function getId(): int {
            return $this->id;
        }

        public function getName(): string {
            return $this->name;
        }

        public function getGameName(): string {
            return $this->gameName;
        }

        public function getReleaseYear(): int {
            return $this->releaseYear;
        }

        public function getTrackList(): array {
            return $this->trackList;
        }

        public function jsonSerialize(): array {
            return [
                'id' => $this->getId(),
                'name' => $this->getName(),
                'gameName' => $this->getGameName(),
                'releaseYear' => $this->getReleaseYear(),
                'trackList' => $this->getTrackList(),
            ];
        }

    }
?>
