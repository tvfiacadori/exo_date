<?php

// ARRAYS ASSOCIATIVOS

$people = array("name"=> "Talita", "age"=> 33, "height"=> 1.58);
$people["city"] = "Lyon";

// print_r ($people);


foreach($people as $indice=> $result) {
  echo $indice.": ".$result."<br>";
}

echo "<br>";
echo "<hr>";
echo "<br>";



// EXO 1 



echo "A cet instant, le timestamp est : ", date('jS \of F Y h:i:s A'),"<br>";

// echo "A cet instant, le timestamp est : ", time(),"<br>";
echo "<br>";
echo "<hr>";
echo "<br>";

// EXO 2

$data = "1989-02-13";
list($year, $month, $day) = explode('-', $data);
$today = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$bday = mktime( 0, 0, 0, $month, $day, $year);
$age = floor((((($today - $bday) / 60) / 60) / 24) / 365.25);
echo $age;

// A função "mktime" permite criar um timestamp Unix de uma data. Seus argumentos são mktime(hora, minuto, segundo, mês, dia,ano);

// Como o retorno vai ser um número com os segundos deste 01 de janeiro de 1970, vamos precisar converter a diferença entre as duas datas em anos, por isso se fez as diviões por 60 (segundos), 60(minutos), 24(horas) e 365.25 (dias do ano). A função "floor" faz o arredondamento do resultado para baixo, o seu retorno é um número inteiro.



echo "<br>";
echo "<hr>";
echo "<br>";

$dataNascimento = '1989-02-13';
$data = new DateTime($dataNascimento );
$resultado = $data->diff( new DateTime( date('Y-m-d') ) );
echo $resultado->format( '%Y anos' );

// No exemplo acima foi criado um objeto DateTime com base na data de nascimento informada, e utilizando o método "diff", se calculou a diferença em relação a data atual. O resultado foi exibido no formato de anos, utilizando o método "format".

// EXO 3

var_dump(checkdate(02, 29, 1962));

$data = '29/02/9621';
$d = DateTime::createFromFormat('d/m/Y', $data);
if($d && $d->format('d/m/Y') == $data){
    echo 'data valida';
}else{
    echo 'data invalida';
}

// false esse dia nao existiu
// DateTime::createFromFormat -- date_create_from_format — Retorna um novo objeto DateTime formatado de acordo com um formato informado

echo "<br>";
echo "<hr>";
echo "<br>";

// EXO 4

// Array com os dias da semana
$weekday = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendrendi', 'Samedi');

$data = date('1993-03-3');

// Varivel que recebe o dia da semana (0 = Domingo, 1 = Segunda ...)
$weekday_num = date('w', strtotime($data));

echo $weekday[$weekday_num];


echo "<br>";
echo "<hr>";
echo "<br>";

echo "Mars 3, 1993 is on a " . date("l", mktime(0, 0, 0, 3, 3, 1993));

echo "<br>";
echo "<hr>";
echo "<br>";

// EXO 5

for ($year = 2023; $year < 2030; $year++) {
  $x = ($year % 4 == 0) && ($year % 100 != 0 || $year %400 == 0);
  $y = date('d', strtotime($year)) === '29';
  if ($x != $y) {
      echo "$year, $x, $y\n";
  }
}

// nao entendi muito bem o calculo

echo "<br>";
echo "<hr>";
echo "<br>";

// EXO 6

for( $i = 2023; $i <= 2030; $i++ ) {
  $date = mktime(0,0,0,5,1, $i); // mes 5 dia 1 e os anos representados por $i a cima
  if( date("w", $date) == 6 || date("w", $date) == 0) {
    echo "1 March $i : Sorry<br>";
  } elseif(date("w", $date) == 5 || date("w", $date) == 1) {
    echo "1 March $i : Long Weekend <br>";
    }
}


echo "<br>";
echo "<hr>";
echo "<br>";
// EXO 7

for( $i = 2023; $i < 2030; $i++ ) {
  echo "Easter Day : ", date("l d M Y", easter_date($i)), "<br>";
}


