<?php namespace Andheiberg\Auth\Exceptions\VerificationBroker;

class InvalidPasswordException extends AuthException {

	/**
	 * The key the error message applies to.
	 *
	 * @var string
	 */
	protected $messageKey = 'password';

	/**
	 * The error message for the exception.
	 *
	 * @var string
	 */
	protected $message = 'auth::verification.password';
	
};