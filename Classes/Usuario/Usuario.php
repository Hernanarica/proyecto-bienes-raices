<?php

namespace App\Usuario;

use App\DB\DBConnection;
use PDO;

class Usuario
{
	protected int    $id_user;
	protected string $name;
	protected string $lastName;
	protected string $email;
	protected string $password;

	/**
	 * @param string $name
	 * @param string $lastName
	 * @param string $email
	 * @param string $password
	 * @return bool
	 */
	public function register(string $name, string $lastName, string $email, string $password): bool
	{
		$db = DBConnection::getConnection();

		$query = "INSERT INTO users (name, last_name, email, password)
					 VALUES(:name, :lastName, :email, :password) ";

		$stmt = $db->prepare($query);

		return $stmt->execute([
			'name'     => $name,
			'lastName' => $lastName,
			'email'    => $email,
			'password' => $password,
		]);
	}

	/**
	 * @param $email
	 * @return mixed
	 */
	public function getByEmail($email): mixed
	{
		$db    = DBConnection::getConnection();
		$query = "SELECT * FROM users WHERE email = :email";

		$stmt = $db->prepare($query);
		$stmt->execute([
			'email' => $email
		]);

		return ($user = $stmt->fetchObject(self::class)) ? $user : null;
	}

	/**
	 * @return int
	 */
	public function getIdUser(): int
	{
		return $this->id_user;
	}

	/**
	 * @param int $id_user
	 */
	public function setIdUser(int $id_user): void
	{
		$this->id_user = $id_user;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name): void
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getLastName(): string
	{
		return $this->lastName;
	}

	/**
	 * @param string $lastName
	 */
	public function setLastName(string $lastName): void
	{
		$this->lastName = $lastName;
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