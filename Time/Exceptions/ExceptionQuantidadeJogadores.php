<?php

namespace Source\Time\Exceptions;
class ExceptionQuantidadeJogadores extends \Exception
{
  public function __construct()
  {
    $mensagem = "Número máximo de jogadores já foi atingido.";
    parent::__construct($mensagem);
  }
}



// try{
//   throw new TestExceptions;
// } catch (TestExceptions $a) {
//   $a->exibe();
// }
