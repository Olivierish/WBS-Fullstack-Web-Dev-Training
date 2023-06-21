<?php
    // class BankKonto{
    //     public $iban;
    //     public $guthaben;

    //     function __construct($foo, $bar){
    //         $this->iban = $foo;
    //         $this->guthaben = $bar;
    //     }

    //     function ausgabeGuthaben(){
    //         echo "Der Kontostand von {$this->iban} ist : {$this->guthaben}";
    //     }
    // }

    // $konto1 = new BankKonto('DE245685421', 1000);
    // $konto1->ausgabeGuthaben();
    // echo '<hr>';

    // $konto2 = new BankKonto('NL545236521', 2000);
    // $konto2->ausgabeGuthaben();
    // echo '<hr>';


?>

<?php
    // class BankKonto{
    //     public string $iban;
    //     private float $guthaben;

    //     function __construct(string $iban, $guthaben){
    //         $this->iban = $iban;
    //         $this->guthaben = $guthaben;
    //     }
    //     function transfer(BankKonto $to, float $amount){
    //         if ($this->guthaben < $amount){
    //             echo '<p>Nicht genug guthaben';
    //             return;
    //         }
    //         echo "Überweisung von {$this->iban} auf {$to->iban} : {$amount}$";
    //         $this->guthaben-=$amount;
    //         $to->guthaben+=$amount;

    //     }
    //     function ausgabeGuthaben(){
    //         echo "Der Kontostand von {$this->iban} ist : {$this->guthaben}";
           
    //     }
    // }

    // $konto1 = new BankKonto('DE245685421', 1000);
    // $konto1->ausgabeGuthaben();
    // echo '<hr>';

    // $konto2 = new BankKonto('NL545236521', 2000);
    // $konto2->ausgabeGuthaben();
    // echo '<hr>';

    // $konto1 -> transfer($konto2, 2000);
    // $konto1-> ausgabeGuthaben();
    // $konto2-> ausgabeGuthaben();
?>

<?php
     class BankKonto{
         public string $iban;
        private float $guthaben;

         public function __construct(string $iban, $guthaben){
             $this->iban = $iban;
             $this->guthaben = $guthaben;
         }
         #Getters
         public function getIban(){
            return $this->iban;
         }
         public function getGuthaben(){
            return $this->guthaben;
         }
          #Setters
         public function setIban($wert){
            $this->iban = $wert;
         }
         public function setGuthaben($wert){
            $this->guthaben = $wert;
         }

         public function transfer(BankKonto $to, float $amount){
             if ($this->guthaben < $amount){
                 echo '<p>Nicht genug guthaben';
                 return;
             }
             echo "Überweisung von {$this->getIban()} auf {$to->getIban()} : {$amount}$";
            $this->guthaben-=$amount;
            $to->guthaben+=$amount;

         }
        public function ausgabeGuthaben(){
            echo "Der Kontostand von {$this->iban} ist : {$this->guthaben}";
           
       }
   }
    $konto1 = new BankKonto('DE245685421', 1000);
    $konto1->setGuthaben(3000);
    $konto1->ausgabeGuthaben();
    echo '<hr>';
?>