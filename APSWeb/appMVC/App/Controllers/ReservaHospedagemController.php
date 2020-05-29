<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\reservaHospedagem;

class ReservaHospedagemController extends Action {
//checar aqui também,a ideia é só redirecionar para a
//página de TelaReservaHospedagem
    public function reservaHospedagem() {
		$this->view->ReservaHospedagem = array(
			
		);
		$this->render('TelaReservaHospedagem');
	}
// arrumar function salvarReserva, resta setar todos os atributos
//que serão passados pra model
	public function salvarReserva() {
		$reserva = Container::getModel('reservaHospedagem');

		$reserva->__set('NumeroAdultos', $_POST['NumeroAdultos']);
		$reserva->__set('NumeroCriancas', $_POST['NumeroCriancas']);
		$reserva->__set('NumeroQuartos', $_POST['NumeroQuartos']);
		$reserva->__set('UsuarioId', $_POST['UsuarioId']);
		$reserva->__set('ValorReserva', $_POST['ValorReserva']);
		$reserva->__set('DataChegada', $_POST['DataChegada']);
		$reserva->__set('DataPartida', $_POST['DataPartida']);
		

		$reserva->incluirReserva();

		//rota a passar com o Diego, é daqui pra tela de reserva concluida
				header('Location: /reservaConcluida');
	}
}



?>