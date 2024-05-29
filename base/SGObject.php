<?php

class SGObject
{
    private $iID;
    private $sName;

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->iID;
    }

    /**
     * @param mixed $iID
     */
    public function setID($iID)
    {
        $this->iID = $iID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->sName;
    }

    /**
     * @param mixed $sName
     */
    public function setName($sName)
    {
        $this->sName = $sName;
    }


}