<?php

namespace Controllers\Auth;

trait Auth 
{
	public function middleware(string $value): void
	{
		if (empty($_SESSION['id'])) {
			$this->redirect('login');
		}
	}

	public function destroySession(): void
	{
		if (isset($_SESSION['id'])) {
			unset($_SESSION['id']);
			$this->redirect('login');
		}
	}

	public function redirect(string $name = ''): void
	{
		header("Location:".BASE_URL."/{$name}");
		exit;
	}

	public function with(string $type, string $message): array
	{
		return ['type'=>$type,'message'=>$message];
	}

	public function input(string $message): string
	{
		return $message;
	}

}