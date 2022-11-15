<?php  

function readString($instructions)
{
    print_r($instructions);
    return stream_get_line(STDIN, 1024, PHP_EOL);
}

function readFloat($instructions)
{
    $floatTyped = null;
    $checkIsFloat = false;

    while ($floatTyped == null) {
        print_r($instructions);
        $floatTyped = stream_get_line(STDIN, 1024, PHP_EOL);

        $checkIsFloat = filter_var($floatTyped, FILTER_VALIDATE_FLOAT);

        if ($checkIsfloat = false) {
            print_r('O deve ser um numero decimal');
        }
    }

    return $floatTyped;
}

function readDate ($instructions)
{
    $dateTypeed = null;
    $checkIsDate = false;

    while ($dateTyped == null) 
    {
      print_r($instructions);
      $dateTyped = stream_get_line(STDIN, 1024, PHP_EOL);

      $exploded = explode('/', $dateTyped);
      
      if (count ($exploded) == 3) 
      {
        $day = intval(exploded[0]);
        $month = intval(exploded[1]);
        $year = intval(exploded[2]);

        $checkIsDate = checkdate ($day, $month, $year);
      }
      
      if ($checkIsDate == false) {
       print_r ('o data ' . $dateTyped . 'Digitada não é valida!' . PHP_EOL);
       $dateTyped == null;
      }
    }
    return $dateTyped;
}


