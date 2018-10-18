<?php

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class UserLoader {

	private $session;

	public function __construct(SessionInterface $session) {
		$this->session = $session;
	}
	
	public function loadAll() {
		$users = $this->session->get('users');
		return $users;
	}
	
	public function loadOne($userId) {
        foreach ($this->loadAll() as $value) {
            if ($value->getId() == $userId) {
            	return $value;
            }
        }
	}
}