<?php
// Datas
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i');

// Formato para o banco
$date = date('Y-m-d'); // DATE
$datetime = date('Y-m-d H:i:s'); // DATETIME

// Time
time();
date('d/m/Y', time());

// Mktime
$data_de_pagamento = mktime(21, 32, 00, 01, 30, 2024);
date('d/m/Y H:i', $data_de_pagamento);

// Strtotime
$data = '2012-05-23 12:23:01';
$data = strtotime($data);
