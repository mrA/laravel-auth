<?php namespace Andheiberg\Auth;

interface UserInterface {

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier();

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword();

	/**
	 * Get the password for the user.
	 *
	 * @param  string  $value
	 * @return string
	 */
	public function setAuthPassword($value);

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken();

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value);

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName();

	/**
	 * Check if a user is verified.
	 *
	 * @return string
	 */
	public function getAuthVerified();

	/**
	 * Set value of auth verified.
	 *
	 * @param  string  $value
	 * @return string
	 */
	public function setAuthVerified($value);

	/**
	 * Check if a user has been deactivated.
	 *
	 * @return string
	 */
	public function getAuthDeactivated();

	/**
	 * Set value of auth deactived.
	 *
	 * @param  string  $value
	 * @return string
	 */
	public function setAuthDeactivated($value);

}
