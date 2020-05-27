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

		$reserva->__set('descricao', $_POST['descricao']);
		$reserva->__set('preco', $_POST['preco']);

		$reserva->incluirReserva();

		//rota a passar com o Diego, é daqui pra tela de reserva concluida
				header('Location: /reservaConcluida');
	}
}



?>