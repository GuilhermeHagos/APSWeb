<?php

class Usuario
{
	private $pdo;
	public $msgErro = ""; //tudo ok

	public function conectar($nome, $host, $email, $senha)
	{
		global $pdo;
		try {
			$pdo = new PDO("mysql:dbname=" . $nome, $email, $senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
	}

	public function cadastrar($nome, $email, $senha)
	{
		global $pdo;
		//verificar se já existe o email cadastrado
		$sql = $pdo->prepare("SELECT UsuarioId FROM usuario WHERE email = :e");
		$sql->bindValue(":e", $email);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return false; //ja esta cadastrado
		} else {
			//caso nao, Cadastrar
			$sql = $pdo->prepare("INSERT INTO usuario (Nome, email, senha) VALUES (:n, :e, :s)");
			$sql->bindValue(":n", $nome);
			$sql->bindValue(":e", $email);
			$sql->bindValue(":s", md5($senha));
			$sql->execute();
			return true; //tudo ok
		}
	}


	public function logar($email, $senha)
	{
		global $pdo;
		//verificar se o email e senha estao cadastrados, se sim
		$sql = $pdo->prepare("SELECT UsuarioId FROM usuario WHERE email = :e AND senha = :s");
		$sql->bindValue(":e", $email);
		$sql->bindValue(":s", md5($senha));
		$sql->execute();
		if ($sql->rowCount() > 0) {
			//entrar no sistema (sessao)
			$dado = $sql->fetch();
			session_start();
			$_SESSION['UsuarioId'] = $dado['UsuarioId'];
			return true; //cadastrado com sucesso
		} else {
			return false; //nao foi possivel logar
		}
	}
}
