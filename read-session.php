<?php
/**
 * session_start() deve ficar no topo da página antes de qualquer instrução
 */
session_start();

print_r($_SESSION);