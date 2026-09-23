<?php

/**
 * @author Nikita Prokopenko <radynje@gmail.com>
 */

declare(strict_types = 1);

namespace App\Security\Domain;

use App\Security\Exception\InvalidEmailException;

class EmailAddress {
	public function __construct(private string $value) {
		if (filter_var($value, FILTER_VALIDATE_EMAIL) === false) {
			throw new InvalidEmailException($value);
		}
	}

	public function getValue(): string {
		return $this->value;
	}
}
