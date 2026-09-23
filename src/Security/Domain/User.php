<?php

/**
 * @author Nikita Prokopenko <radynje@gmail.com>
 */

declare(strict_types = 1);

namespace App\Security\Domain;

class User {
	public function __construct(
		private EmailAddress $email,
	) {
	}

	public function getEmail(): EmailAddress {
		return $this->email;
	}
}
