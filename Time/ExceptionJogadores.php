<?php

class ExceptionJogadores extends Exception
{
  public function exibe()
  {
    print 'Ana';
  }

}

// try{
//   throw new TestExceptions;
// } catch (TestExceptions $a) {
//   $a->exibe();
// }
