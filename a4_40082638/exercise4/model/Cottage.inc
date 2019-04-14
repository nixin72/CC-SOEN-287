<?php

class Cottage {
    private $_id;
    private $index;
    private $maxPeople;
    private $allowSmoking;
    private $allowCats;
    private $allowDogs;
    private $allowPets;
    private $size;
    private $location;
    private $address;
    private $price;
    private $ammenities;
    private $image;

    public function __construct(
            $id, 
            $index = 0, 
            $maxPeople = 0, 
            $allowSmoking = false, 
            $allowCats = false, 
            $allowDogs = false, 
            $allowPets = false, 
            $size = "1/2", 
            $location = "", 
            $address = "", 
            $price = 0, 
            $ammenities = [],
            $image = 0) {
        $this->_id = $id;
        $this->index = $index;
        $this->maxPeople = $maxPeople;
        $this->allowSmoking = $allowSmoking;
        $this->allowCats = $allowCats;
        $this->allowDogs = $allowDogs;
        $this->allowPets = $allowPets;
        $this->size = $size;
        $this->location = $location;
        $this->address = $address;
        $this->price = $price;
        $this->ammenities = $ammenities;
        $this->image = $image;
    }

    /*
        Accessor methods
    */
    public function getId() {
        return $this->_id;
    }
    public function getIndex() {
        return $this->index;
    }
    public function getMaxPeople() {
        return $this->maxPeople;
    }
    public function getAllowSmoking() {
        return $this->allowSmoking;
    }
    public function getAllowPets() {
        return $this->allowPets;
    }
    public function getAllowCats() {
        return $this->allowCats;
    }
    public function getAllowDogs() {
        return $this->allowDogs;
    }
    public function getSize() {
        return $this->size;
    }
    public function getLocation() {
        return $this->location;
    }
    public function getAddress() {
        return $this->address;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getAmmenities() {
        return $this->ammenities;
    }
    public function getImage() {
        return $this->image;
    }

    /*
        Mutator methods
    */
    public function setLocation($location) {
        $this->location = $location;
    }
    public function setMaxPeople($maxPeople) {
        $this->maxPeople = $maxPeople;
    }
    public function setAllowSmoking($allowSmoking) {
        $this->allowSmoking = $allowSmoking;
    }
    public function setSize($size) {
        $this->size = $size;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function setAllowPets($allowPets) {
        $this->allowPets = $allowPets;
    }
    public function setAmmenities($ammenities) {
        $this->ammenities = $ammenities;
    }
}