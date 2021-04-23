<?php

namespace App;

use App\Arquivo;

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

        $arquivo = new Arquivo();

        $extensao = explode('.', $this->getArquivo());

        if ($extensao[1] == "csv") {
            $arquivo->lerArquivoCSV($caminho);
        } else if($extensao[1] == "txt") {
            $arquivo->lerArquivoTXT($caminho);
        } else {
            return "extensão não pode ser lida";
        }

        return $arquivo->getDados();
    }
}