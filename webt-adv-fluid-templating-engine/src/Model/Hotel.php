<?php
namespace Lara\WebtAdvFluidTemplatingEngine\Model;

class Hotel {
    private string $name;
    private string $description;
    private string $price;
    private string $image;

    public function __construct(string $name, string $description, string $price, string $image) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPrice(): string {
        return $this->price;
    }

    public function getImage(): string {
        return $this->image;
    }
} 