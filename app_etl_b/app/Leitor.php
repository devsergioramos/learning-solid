<?php

namespace App;

class Leitor {
    private $diretorio;
    private $arquivo;

    public function getDiretorio(): string {
        return $this->diretorio;
    }
    
    public function setDiretorio(String $diretorio): void {
        $this->diretorio = $diretorio;
    }

    public function getArquivo(): string {
        return $this->arquivo;
    }

    public function setArquivo(String $arquivo): void {
        $this->arquivo = $arquivo;
    }

    public function lerArquivo(): array {
        $caminho = $this->getDiretorio().'/'.$this->getArquivo();
        $extensao = explode('.', $this->getArquivo());

        $classe = '\App\extrator\\' . ucfirst($extensao[1]);
        return call_user_func_array(
            [
                new $classe,
                'lerArquivo'
            ],
            [
                $caminho
            ]
        );
    }
}