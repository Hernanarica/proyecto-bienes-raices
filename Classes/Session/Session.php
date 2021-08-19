<?php


namespace App\Session;


class Session
{
	/**
	 * Create my variable of SESSION
	 *
	 * @param $key
	 * @param $value
	 */
	public static function set($key, $value)
	{
		$_SESSION[ $key ] = $value;
	}

	/**
	 * Read my variable of SESSION if exist
	 *
	 * @param $key
	 * @return mixed
	 */
	public static function get($key): mixed
	{
		if (isset($_SESSION[ $key ])) {
			return $_SESSION[ $key ];
		}
		return null;
	}

	public static function flash($key, $value)
	{

	}

	/**
	 * Remove my variables of SESSION if exist
	 *
	 * @param $key
	 * @return bool
	 */
	public static function remove($key): bool
	{
		if (self::get($key)) {
			unset($_SESSION[ $key ]);
			return true;
		}

		return false;
	}
}