<?php

class PersonaBean {
    public $CODPERSO ;
    public $NOMBPERSO ;
    public $APELLIPERSO ;
    public function getCODPERSO() {
        return $this->CODPERSO;
    }

    public function getNOMBPERSO() {
        return $this->NOMBPERSO;
    }

    public function getAPELLIPERSO() {
        return $this->APELLIPERSO;
    }

    public function setCODPERSO($CODPERSO): void {
        $this->CODPERSO = $CODPERSO;
    }

    public function setNOMBPERSO($NOMBPERSO):void {
        $this->NOMBPERSO = $NOMBPERSO;
    }

    public function setAPELLIPERSO($APELLIPERSO): void {
        $this->APELLIPERSO = $APELLIPERSO;
    }

}
?>