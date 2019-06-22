<?php

  abstract class Animal {
    public function fala(){
      return "Som";
    }

    public function mover(){
      return "Anda";
    }
  }

  class Cachorro extends Animal {
    public function falar(){
      return "Late";
    }
  }

  class Gato extends Animal {
    public function falar(){
      return "Mia";
    }

    public function mover(){
      return "pula";
    }
  }

  class Passaro extends Animal {
    public function falar(){
      return "Pica";
    }

    public function mover(){
      return "Voa e " . parent::mover();
    }
  }

  $pluto = new Cachorro();
  echo "O Pluto, ";
  echo $pluto->falar();
  echo " e ";
  echo $pluto->mover();
  echo " muito!" . "<br/>";

  echo "<hr>";

  $garfield = new Gato();
  echo "O Garfield, ";
  echo $garfield->mover();
  echo " e ";
  echo $garfield->falar();
  echo " Muito Alto...! ";

  echo "<hr>";

  $PicaPau = new Passaro();
  echo "Este Pica Pau ";
  echo $PicaPau->falar();
  echo " e Destrói qualquer Madeira Rapidamente e ";
  echo $PicaPau->mover();
  echo " de Árvore em Árvore toda hora.";


?>