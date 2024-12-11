<?php
    class Song implements JsonSerializable{
        
        //Constructor 
        public function __construct(protected int $id, protected string $name, protected string $artist, protected int $trackNumber, protected string $duration) {
            $this->id = $id;
            $this->name = $name;
            $this->artist = $artist;
            $this->trackNumber = $trackNumber;
            $this->duration = $duration;
        }

        public function getId(): int {
            return $this->id;
        }

        public function getName(): string {
            return $this->name;
        }

        public function getArtist(): string {
            return $this->artist;
        }

        public function getTrackNumber(): int {
            return $this->trackNumber;
        }

        public function getDuration(): string {
            return $this->duration;
        }

        public function jsonSerialize(): array {
            return [
                'id' => $this->getId(),
                'name' => $this->getName(),
                'artist' => $this->getArtist(),
                'trackNumnber' => $this->getTrackNumber(),
                'duration' => $this->getDuration(),
            ];
        }
    }
?>
