<?php

class SGItem extends SGObject
{
    private $sDescription;
    private $iUserPoints;
    private $iTargetPoints;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->sDescription;
    }

    /**
     * @param mixed $sDescription
     */
    public function setDescription($sDescription)
    {
        $this->sDescription = $sDescription;
    }

    /**
     * @return mixed
     */
    public function getTargetPoints()
    {
        return $this->iTargetPoints;
    }

    /**
     * @param mixed $iTargetPoints
     */
    public function setTargetPoints($iTargetPoints)
    {
        $this->iTargetPoints = $iTargetPoints;
    }

    /**
     * @return mixed
     */
    public function getUserPoints()
    {
        return $this->iUserPoints;
    }

    /**
     * @param mixed $iUserPoints
     */
    public function setUserPoints($iUserPoints)
    {
        $this->iUserPoints = $iUserPoints;
    }


}