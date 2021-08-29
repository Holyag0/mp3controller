<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mp3control extends Controller
{

    public function play(Request $play){

         $nomeMusica;
         $artista;
         $ano;
         $album;
         $estilo;

function setplayVariveis(string $nomeMusica,string $nomeArtista,int $ano,string $album,string $estilo){

    $this->nomeMusica = $nomeMusica;
    $this-> artista =$nomeArtista;
    $this-> ano = $ano;
    $this-> album = $album;
    $this-> estilo =$estilo;


}

function getplayVariaveis()
    {

 return"{$this->nomeMusica} # {$this->artista} # {$this->ano} #{$this->album} # {$this->estilo} <hr>";

    }


        $musica1 = new mp3control;

     $musica1->setplayVariveis('tornado of souls','dave mustaine',1990,'rust in peace','trash metal');

     echo $musica1->getplayVariaveis();









        return view ('mp3');
    }
}
