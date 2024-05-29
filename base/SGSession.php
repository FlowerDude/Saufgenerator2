<?php

class SGSession
{
    private $iID;
    private $sSessionKey;
    private $iTargetPoints;
    /**
     * @param $sSessionKey
     */
    public function __construct($sSessionKey, $iTargetPoints)
    {
        $this->sSessionKey = $sSessionKey;
        $this->iTargetPoints = $iTargetPoints;
    }

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
    public function getSessionKey()
    {
        return $this->sSessionKey;
    }

    /**
     * @param mixed $sSessionKey
     */
    public function setSessionKey($sSessionKey)
    {
        $this->sSessionKey = $sSessionKey;
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
}