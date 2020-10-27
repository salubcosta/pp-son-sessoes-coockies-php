<?php

/**
 * @param1 - Nome do coockie
 * @param2 - Valor a ser armazenado
 * @param3 - Tempo em segundos. Exemplo: (time()+3600) == 1H
 */
setcookie('nome','salumao', time()+3600);

/**
 * Para apagar o coockie pode colocar o valor null no @param2 ou setar um timer negativo,
 * Exemplo: time()-20
 */