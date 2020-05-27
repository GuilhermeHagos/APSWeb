<?php

namespace App\Models;
use MF\Model\Model;

class reservaHospedagem extends Model {

	private $ReservaId;
	private $NumeroAdultos;
	private $NumeroCriancas;
	private $NumeroQuartos;
	private $UsuarioId;
	private $ValorReserva;
	private $DataChegada;
	private $DataPartida;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}


    // Configurar função para dar insert no banco reserva(checar o que o formulário pede)
	public function incluirReserva() {
		
		$query = "INSERT INTO `reserva` (`ReservaId`, `NumeroAdultos`, `NumeroCriancas`, `NumeroQuartos`, `UsuarioId`, `ValorReserva`, `DataChegada`, `DataPartida`) VALUES ('', :NumeroAdultos, :NumeroCriancas, :NumeroQuartos, :UsuarioId, :ValorReserva, :DataChegada, :DataPartida)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':NumeroAdultos', $this->__get('NumeroAdultos'));
		$stmt->bindValue(':NumeroCriancas', $this->__get('NumeroCriancas'));
		$stmt->bindValue(':NumeroQuartos', $this->__get('NumeroQuartos'));
		$stmt->bindValue(':UsuarioId', $this->__get('UsuarioId'));
		$stmt->bindValue(':ValorReserva', $this->__get('ValorReserva'));
		$stmt->bindValue(':DataChegada', $this->__get('DataChegada'));
		$stmt->bindValue(':DataPartida', $this->__get('DataPartida'));
		$stmt->execute();

		return $this;
	}

	
}

?>