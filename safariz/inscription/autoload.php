<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of autoload
 *
 * @author PC300
 */
function chargerClasse($classname) {
    require $classname . '.php';
}
spl_autoload_register('chargerClasse');

