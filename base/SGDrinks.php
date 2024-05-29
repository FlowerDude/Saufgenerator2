<?php

class SGDrinks extends SGObject
{

    private $sMeasurement;

    /**
     * @return mixed
     */
    public function getMeasurement()
    {
        return $this->sMeasurement;
    }

    /**
     * @param mixed $sMeasurement
     */
    public function setMeasurement($sMeasurement)
    {
        $this->sMeasurement = $sMeasurement;
    }



}