<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculator
{

    const PLUS = 1, MINUS = 2, KRAT = 3, DELENE = 4;
    use HasFactory;

    public function scitaj(int $cislo1, int $cislo2): int{
        return $cislo1+$cislo2;
    }

    public function odcitaj(int $cislo1, int $cislo2): int{
        return $cislo1-$cislo2;
    }

    public function vynasob(int $cislo1, int $cislo2): int{
        return $cislo1*$cislo2;
    }

    public function vydel(int $cislo1, int $cislo2): int{
        if ($cislo2==0){
            return 0;
        }

        return intdiv($cislo1,$cislo2);
    }

    public function getOperacie(): array{
        return [
            self::PLUS =>'Plus',
            self::MINUS =>'Mínus',
            self::KRAT =>'Krát',
            self::DELENE =>'Delene'
        ];
    }

    public function vypocet(int $operacia, int $cislo1, int $cislo2): int{
        if ($operacia==self::PLUS){
            return $this->scitaj($cislo1,$cislo2);
        }
        else if ($operacia==self::MINUS){
            return $this->odcitaj($cislo1,$cislo2);
        }
        else if ($operacia==self::KRAT){
            return $this->vynasob($cislo1,$cislo2);
        }
        else if ($operacia==self::DELENE){
            return $this->vydel($cislo1,$cislo2);
        }
        else{
            return 0;
        }
    }

}
