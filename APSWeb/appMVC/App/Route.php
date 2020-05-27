<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['sobre_nos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);

		//rota para o formulário de reserva de cada página
		$routes['reserva_hospedagem'] = array(
			'route' => '/reserva_hospedagem',
			'controller' => 'ReservaHospedagemController',
			'action' => 'reservaHospedagem'
		);

		$routes['salvarReserva'] = array(
			'route' => '/salvarReserva',
			'controller' => 'ReservaHospedagemController',
			'action' => 'salvarReserva'
		);

		$this->setRoutes($routes);
	}

}

?>