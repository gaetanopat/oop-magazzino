<?php
  require_once 'Prodotto.php';

  class Carne extends Prodotto{
    public $tipo_carne;
    public $prezzo_al_kg;
    public $quantita;

    function __construct($_id_prodotto, $_descrizione_prodotto, $_marca_prodotto, $_data_scadenza_prodotto, $_tipo_carne, $_prezzo_al_kg, $_quantita){
      parent::__construct($_id_prodotto, $_descrizione_prodotto, $_marca_prodotto, $_data_scadenza_prodotto);
      $this->tipo_carne = $_tipo_carne;
      $this->prezzo_al_kg = $_prezzo_al_kg;
      $this->quantita = $_quantita;
    }

  function calcolaPrezzo(){
    return $this->prezzo_al_kg * $this->quantita;
  }
}

?>
