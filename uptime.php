<?php

function secondsToTime($inputSeconds) {

    $secondsInAMinute = 60;
    $secondsInAnHour  = 60 * $secondsInAMinute;
    $secondsInADay    = 24 * $secondsInAnHour;

    // extract days
    $days = floor($inputSeconds / $secondsInADay);

    // extract hours
    $hourSeconds = $inputSeconds % $secondsInADay;
    $hours = floor($hourSeconds / $secondsInAnHour);

    // extract minutes
    $minuteSeconds = $hourSeconds % $secondsInAnHour;
    $minutes = floor($minuteSeconds / $secondsInAMinute);

    // extract the remaining seconds
    $remainingSeconds = $minuteSeconds % $secondsInAMinute;
    $seconds = ceil($remainingSeconds);

    // return the final array
    $obj = array(
        'd' => (int) $days,
        'h' => (int) $hours,
        'm' => (int) $minutes,
        's' => (int) $seconds,
    );
    return $obj;
}

$host = "127.0.0.1";
$user = "root";
$password = "lk96322";
$db_name = "auth_lk";

$conexao = mysqli_connect($host, $user, $password);
$banco = mysqli_select_db($conexao,$db_name);
mysqli_set_charset($conexao,'utf8');

if (!$conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$sql = mysqli_query($conexao,"select * from uptime ORDER BY starttime DESC LIMIT 1") or die("Erro");
while($dados=mysqli_fetch_assoc($sql))
    {
        $resultado = $dados['uptime'];
    }

$texto = '<a>UPTIME: ';

$h = secondsToTime($resultado);

$dias = $h['d'];
$horas = $h['h'];
$minutos = $h['m'];

echo '<div class="value">',$dias,'<sup>d</sup>',$horas,'<sup>h</sup>',$minutos,'<sup>m</sup></div>';

mysqli_close($conexao);
?>