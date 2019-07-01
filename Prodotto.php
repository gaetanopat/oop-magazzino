<?php
  class Prodotto{
    public $id_prodotto;
    public $descrizione_prodotto;
    public $marca_prodotto;
    public $data_scadenza_prodotto;

    function __construct($_id_prodotto, $_descrizione_prodotto, $_marca_prodotto, $_data_scadenza_prodotto){
      $this->id_prodotto = $_id_prodotto;
      $this->descrizione_prodotto = $_descrizione_prodotto;
      $this->marca_prodotto = $_marca_prodotto;
      $this->data_scadenza_prodotto = $_data_scadenza_prodotto;
    }
  }

?>
