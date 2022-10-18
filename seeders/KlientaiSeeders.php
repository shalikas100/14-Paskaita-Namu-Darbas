<?php

include "../utilities/FileManger.php";

class KlientaiSeeder{

use FileManager;

// trait FileManager {

//     public $file; kompanijos.json
//     public $data; $kompanijos

//     public function readFile() {
//         $this->data = json_decode(file_get_contents($this->file), true);
//     }

//     public function writeFile($data) {
//         file_put_contents($this->file, json_encode($data));
//     }
// }

protected $miestas = ["Vilnius","Klaipeda","Panevezys","Siauliai"];

public function seeder($skaicius){
            $data = array();
            for($i = 0; $i<$skaicius; $i++){
                $klientas = array(
                    "vardas" => "Vardenis".$i,
                    "pavarde" => "Pavardenis".$i,
                    "amzius" => rand(18,99),
                    "miestas" => $this->miestas[rand(0,3)]
                );
                $data[$i] = $klientas;
            }
            $this->file = "../klientaiSeeder.json";
            $this->writeFile($data);
}
}
$kompanijuPildymas = new KlientaiSeeder();
$kompanijuPildymas->seeder(100);