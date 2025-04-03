<?php 
/*
class Car{
    public string $manufacturer;
    public string $color;
    public bool $hasSunRoof;

    public function __construct($manufacturer, $color, $hasSunRoof)
    {
        $this->manufacturer = $manufacturer;
        $this->color = $color;
        $this->hasSunRoof = $hasSunRoof;
    }

	public function getManufacturer() {
		return $this->manufacturer;
	}

	public function setManufacturer(string $manufacturer) {
		$this->manufacturer = $manufacturer;
	}

	public function getColor() {
		return $this->color;
	}

	public function setColor(string $color = 'grey') {
		$this->color = $color;
	}

	public function getHasSunRoof() {
		return $this->hasSunRoof;
	}

	public function setHasSunRoof(bool $hasSunRoof) {
		$this->hasSunRoof = $hasSunRoof;
	}

    public function hello(){
        $string = "I am a".$this->getManufacturer() ." car, and I am ".$this->getColor().". ";
        $string .= $this->getHasSunRoof() ? 'I have a sun roof!' : "I don't have a sun roof.";
        return $string;
    }

}

$car = new Car( 'VW', 'Black' ,1);
echo $car->hello();
*/