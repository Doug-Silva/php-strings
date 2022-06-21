<?php

namespace App\Alura;

class Contato
{

    private string $email;
    private string $endereco;
    private string $cep;
    private string $telefone;

    public function __construct(string $email, string $endereco, string $cep, string $telefone)
    {
        $this->email = $email;
        $this->endereco = $endereco;
        $this->cep = $cep;

        if ($this->validaEmail($email) !== false) {
            $this->setEmail($email);
        } else {
            $this->setEmail("Email inválido");
        }

        if ($this->validaTelefone($telefone)) {
            $this->setTelefone($telefone);
        } else {
            $this->setTelefone("Telefone inválido");
        }
    }

    private function validaTelefone(string $telefone): int
    {
        //Expressão regular para validar telefone / exemplo: 9893-9205
        return preg_match('/^[0-9]{4}-[0-9]{4}$/', $telefone, $encontrados);
    }

    private function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    private function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getUsuario(): string
    {
        $posicaoArroba = strpos($this->email, "@");

        if ($posicaoArroba === false){
            return "Usuario Inválido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }

    private function validaEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEnderecoCep(): string
    {
        $enderecoCep = [$this->endereco, $this->cep];
        return implode(" - ", $enderecoCep);
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }
}