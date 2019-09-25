<?php
/**
 * Plugin Name: Plugin público do Entenda Antes para Wordpress
 * Description: A ponte entre o seu blog e o Entenda Antes
 * Version: 1.0.0
 * Author: Flávio Santos, Gleydson Parpinelli, Jonas Gabriel
 */

require_once plugin_dir_path(__FILE__) . 'class-ea-integra.php';

$ea_integra = new EA_Integra;