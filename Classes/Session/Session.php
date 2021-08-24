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
		return $_SESSION[ $key ] ?? null;
	}

	/**
	 * @param $key
	 * @return bool
	 */
	public static function has($key): bool
	{
		return isset($_SESSION[ $key ]);
	}

	public static function flash($key)
	{
		if (!self::has($key)) return null;

		$val = self::get($key);
		self::remove($key);
		return $val;
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