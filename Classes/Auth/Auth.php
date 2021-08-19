<?php


namespace App\Auth;


use App\Usuario\Usuario;

class Auth
{
	protected string $email;
	protected string $password;

	/**
	 * @param $email
	 * @param $password
	 * @return bool
	 */
	public function Autenticate($email, $password): bool
	{
		/** @var Usuario $user */
		$user = (new Usuario())->getByEmail($email);

		if ($user) {
			if (password_verify($password, $user->getPassword())) {
				$_SESSION[ 'user' ] = [
					'id'    => $user->getIdUser(),
					'name'  => $user->getName(),
					'email' => $user->getEmail()
				];
				return true;
			}
		}

		return false;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail(string $email): void
	{
		$this->email = $email;
	}

	/**
	 * @return string
	 */
	public function getPassword(): string
	{
		return $this->password;
	}

	/**
	 * @param string $password
	 */
	public function setPassword(string $password): void
	{
		$this->password = $password;
	}
}