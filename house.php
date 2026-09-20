<?php

class Huis
{
    private int $aantalVerdiepingen;
    private int $aantalKamers;
    private float $breedte;
    private float $hoogte;
    private float $diepte;

    public function __construct(
        int $aantalVerdiepingen,
        int $aantalKamers,
        float $breedte,
        float $hoogte,
        float $diepte) {
        $this->aantalVerdiepingen = $aantalVerdiepingen;
        $this->aantalKamers = $aantalKamers;
        $this->breedte = $breedte;
        $this->hoogte = $hoogte;
        $this->diepte = $diepte;
    }

    public function berekenVolume(): float {
        return $this->breedte * $this->hoogte * $this->diepte;
    }

    public function berekenPrijs(): float {
        return $this->berekenVolume() * 1200;
    }

    public function toonDetails(): void {
    echo "Dit huis heeft " . $this->aantalVerdiepingen . " verdiepingen, ";
    echo $this->aantalKamers . " kamers en heeft een volume van ";
    echo $this->berekenVolume() . " m3.<br>";
    echo "De prijs van het huis is: €" . $this->berekenPrijs() . "<br>";
}
}