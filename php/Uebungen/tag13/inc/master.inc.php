<?php
class Student{
    private $firstname;
    private $lastname;
    private $email;
    private $seminar;
    private $city;
    private $age;

       #Functions


       public function __construct(string $firstname, string $lastname, string $email, string $seminar, string $city, int $age)
       {
           $this->firstname = $firstname;
           $this->lastname = $lastname;
           $this->email = $email;
           $this->seminar = $seminar;
           $this->city = $city;
           $this->age = $age;
           /*
?>

        <h5 class="card-title fw-bold color-3 text-center"><?= strtoupper($this->firstname.' '.$lastname); ?></h5>
                    <p class="card-text">
                    <ul class="list-group my-2 list-group-item-light mt-3">
                        <li class="list-group-item"><b>Farbe :</b> <?= strtoupper($this->farbe); ?></li>
                        <li class="list-group-item"><b>Erstzulassung :</b> <?= #str_split($this->erstzulassung,4)[0]; ?></li>
                        <li class="list-group-item"><b>Preis :</b> <?= $this->preis; ?></li>

                        <?php if(str_split($this->erstzulassung,4)[0] < 2021) :  ?>
                            <li class="list-group-item color-4"><b class="color-1">Rabatt :</b> 10%</li>
                            <li class="list-group-item"><b class="color-1">Preisnachlass :</b> <?= #$this->preis - $this->preis*10/100; ?></li>
                            <li class="list-group-item"><b class="color-1">Neuer Preis :</b> <?= #$this->preis*10/100; ?></li>
                        <?php endif; ?>

                        <li class="list-group-item"><b>PS :</b> <?= $this->ps.'ps'; ?></li>
                        <li class="list-group-item"><b>Verbrauch :</b> <?= #$this->verbrauchProKm.' liter pro km' ; ?></li>
                        <li class="list-group-item"><b>tankvolumen :</b> <?= #$this->tankvolumen; ?></li>
                        <li class="list-group-item"><b>Kraftstoffart :</b> <?= #strtoupper($this->kraftstoffart); ?></li>
                        <li class="list-group-item"><b>Reichweite :</b> <?=  #round($this->reichweite()).' km'; ?></li>
                    </ul>
                    </p>
                    
    <?php
    */
    } #close __construct
    
    #Getters & Setters
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSeminar()
    {
        return $this->seminar;
    }

    public function setSeminar($seminar)
    {
        $this->seminar = $seminar;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
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