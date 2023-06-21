<?php
class Auto{
    private $marke;
    private $farbe;
    private $ps;
    private $kraftstoffart;
    private $tankvolumen;
    private $verbrauchProKm;
    private $erstzulassung;
    private $preis;

       #Functions
    /**
     * Summary of reichweite
     * @return float
     */
    private function reichweite(){
        return ($this->tankvolumen * 100 / $this->verbrauchProKm);
    }

    public function __construct(string $marke, string $farbe, float $ps, string $kraftstoffart, float $tankvolumen, float $verbrauchProKm, string $erstzulassung, float $preis) {
        $this->marke = $marke;
        $this->farbe = $farbe;
        $this->ps = $ps;
        $this->kraftstoffart = $kraftstoffart;
        $this->tankvolumen = $tankvolumen;
        $this->verbrauchProKm = $verbrauchProKm;
        $this->erstzulassung = $erstzulassung;
        $this->preis = $preis;
        ?>

        <h5 class="card-title fw-bold color-3 text-center"><?= strtoupper($this->marke); ?></h5>
                    <p class="card-text">
                    <ul class="list-group my-2 list-group-item-light mt-3">
                        <li class="list-group-item"><b>Farbe :</b> <?= strtoupper($this->farbe); ?></li>
                        <li class="list-group-item"><b>Erstzulassung :</b> <?= str_split($this->erstzulassung,4)[0]; ?></li>
                        <li class="list-group-item"><b>Preis :</b> <?= $this->preis; ?></li>

                        <?php if(str_split($this->erstzulassung,4)[0] < 2021) :  ?>
                            <li class="list-group-item color-4"><b class="color-1">Rabatt :</b> 10%</li>
                            <li class="list-group-item"><b class="color-1">Preisnachlass :</b> <?= $this->preis - $this->preis*10/100; ?></li>
                            <li class="list-group-item"><b class="color-1">Neuer Preis :</b> <?= $this->preis*10/100; ?></li>
                        <?php endif; ?>

                        <li class="list-group-item"><b>PS :</b> <?= $this->ps.'ps'; ?></li>
                        <li class="list-group-item"><b>Verbrauch :</b> <?= $this->verbrauchProKm.' liter pro km' ; ?></li>
                        <li class="list-group-item"><b>tankvolumen :</b> <?= $this->tankvolumen; ?></li>
                        <li class="list-group-item"><b>Kraftstoffart :</b> <?= strtoupper($this->kraftstoffart); ?></li>
                        <li class="list-group-item"><b>Reichweite :</b> <?=  round($this->reichweite()).' km'; ?></li>
                    </ul>
                    </p>
        <?php
    }

    #Getters & Setters
    /**
     * Summary of getMarke
     * @return string
     */
    private function getMarke(): string {
        return $this->marke;
    }

    /**
     * Summary of setMarke
     * @param mixed $marke
     * @return void
     */
    public function setMarke(string $marke): void {
        $this->marke = $marke;
    }

    /**
     * Summary of getFarbe
     * @return string
     */
    private function getFarbe(): string {
        return $this->farbe;
    }

    /**
     * Summary of setFarbe
     * @param mixed $farbe
     * @return void
     */
    public function setFarbe(string $farbe): void {
        $this->farbe = $farbe;
    }

    /**
     * Summary of getPs
     * @return float
     */
    private function getPs(): float {
        return $this->ps;
    }

    /**
     * Summary of setPs
     * @param mixed $ps
     * @return void
     */
    public function setPs(float $ps): void {
        $this->ps = $ps;
    }

    /**
     * Summary of getKraftstoffart
     * @return string
     */
    private function getKraftstoffart(): string {
        return $this->kraftstoffart;
    }

    /**
     * Summary of setKraftstoffart
     * @param mixed $kraftstoffart
     * @return void
     */
    public function setKraftstoffart(string $kraftstoffart): void {
        $this->kraftstoffart = $kraftstoffart;
    }

    /**
     * Summary of getTankvolumen
     * @return float
     */
    private function getTankvolumen(): float {
        return $this->tankvolumen;
    }

    /**
     * Summary of setTankvolumen
     * @param mixed $tankvolumen
     * @return void
     */
    public function setTankvolumen(float $tankvolumen): void {
        $this->tankvolumen = $tankvolumen;
    }

    /**
     * Summary of getVerbrauchProKm
     * @return float
     */
    private function getVerbrauchProKm(): float {
        return $this->verbrauchProKm;
    }

    /**
     * Summary of setVerbrauchProKm
     * @param mixed $verbrauchProKm
     * @return void
     */
    public function setVerbrauchProKm(float $verbrauchProKm): void {
        $this->verbrauchProKm = $verbrauchProKm;
    }

    /**
     * Summary of getErstzulassung
     * @return string
     */
    private function getErstzulassung(): string {
        return $this->erstzulassung;
    }

    /**
     * Summary of setErstzulassung
     * @param mixed $erstzulassung
     * @return void
     */
    public function setErstzulassung(string $erstzulassung): void {
        $this->erstzulassung = $erstzulassung;
    }

    /**
     * Summary of getPreis
     * @return float
     */
    private function getPreis(): float {
        return $this->preis;
    }

    /**
     * Summary of setPreis
     * @param mixed $preis
     * @return void
     */
    public function setPreis(float $preis): void {
        $this->preis = $preis;
    }

 

}



function displayDate(){
    $monaten = array(
        1 => 'Januar',
        2 => 'Februar',
        3 => 'März',
        4 => 'April',
        5 => 'Mai',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'August',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Dezember'
    );
    $tage = array(
        'Sonntag',
        'Montag',
        'Dienstag',
        'Mittwoch',
        'Donnerstag',
        'Freitag',
        'Samstag'
    );

    return $tage[date('w')].' '.date('d').'. '.$monaten[date('n')].', '.date('Y');
}
?>