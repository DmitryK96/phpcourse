<?php
// создаем новый класс "Чайник"
// у данного класса должна быть возможность кипятить воду, для это можно создать 2 характеристики:
// обьем воды в чайнике и ее температура
// так же нужно задать функцию изменения температуры воды до 100 гр и проверку уровня воды в чайнике
class Chainik
{
public function __construct(
    public int $value_water_in_chainik = 0,
    public int $tempwater = 0
){}
public function change($value_water_in_chainik){
   // if ($this->value_water_in_chainik > 0){
        //$this->tempwater = 100;
    }
    $this->value_water_in_chainik+=$value_water_in_chainik
    $this->setCheckCount();
}
public function change
}