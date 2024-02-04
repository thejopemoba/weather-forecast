<?php

// inserindo a url para iniciar a sessão
$endpoint = 'https://api.hgbrasil.com/weather/?cid=455827&format=json';

// iniciando a sessão cURL, criando uma nova instância associada ao endpoint

$instancia = curl_init($endpoint);

/* configurando opções específicas para a sessão, nesse caso a url e parametros de requisição
o parâmetro "CURLOPT_RETURNTRANSFER" define que a cURL retorne o resultado da requisição
como uma string, já o true é atribuido ao parâmetro para executar a função */

curl_setopt($instancia, CURLOPT_RETURNTRANSFER, true);

// nessa parte, vou executar a requisição, armazenando-a em uma variável

$resposta = curl_exec($instancia);

// por fim fecho a sessão cURL, liberando os recursos a associados a essa sessão

curl_close($instancia);

// decodificando o json, transformando a resposta em json para um array

$dados = json_decode($resposta, true);

// acessando os elementos do array

$dadosCidade = $dados['results'];

$temperatura = $dadosCidade['temp'];
$horario = $dadosCidade['time'];
$descricao = $dadosCidade['description'];
$cidade = $dadosCidade['city'];
$dataHoje = $dadosCidade['date'];

$dadosForecast = $dados['results']['forecast'];

$tempMaxDia = array();
$tempMinDia = array();

foreach ($dadosForecast as $previsao) {
    $data = $previsao['date'];
    $tempMax = $previsao ['max'];
    $tempMin = $previsao['min'];

    $tempMaxDia[$data][] = $tempMax;
    $tempMinDia[$data][] = $tempMin;

}

?>
