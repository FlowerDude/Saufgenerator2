<?php

class SGUser extends SGObject
{
    private $oSession;
    private $aItems = [];
    private $iPoints = 0;

    /**
     * @param $sName
     * @param $oSession
     */
    public function __construct($sName, $oSession)
    {
        $this->setName($sName);
        $this->setSession($oSession);
    }

    /**
     * @return mixed
     */
    public function getSession()
    {
        return $this->oSession;
    }

    /**
     * @return mixed
     */
    public function setSession($oSession)
    {
        $this->oSession = $oSession;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->aItems;
    }

    /**
     * @param array $aItems
     */
    public function setItems($aItems)
    {
        $this->aItems = $aItems;
    }

    /**
     * @return int
     */
    public function getPoints()
    {
        return $this->iPoints;
    }

    /**
     * @param int $iPoints
     */
    public function setPoints($iPoints)
    {
        $this->iPoints = $iPoints;
    }


}