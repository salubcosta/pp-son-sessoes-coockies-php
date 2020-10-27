<?php

/**
 * Para apagar o coockie pode colocar o valor null no @param2 ou setar um timer negativo,
 * Exemplo: time()-20
 */

# Uma forma de apagar um coockie:
# setcookie('nome',null, time()+3600);

# Uma forma "mais correta" seria esta:
# setcookie('nome','Salumão', time()-1);

# A forma acima define um segundo negativo. Assim o coockie é expirado e automaticamente apagado.