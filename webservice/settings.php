<?php

    $database   = array(
        'hostname'  => '127.0.0.1',
        'username'  => 'todocargo',
        'password'  => 'todocargo',
        'database'  => 'todocargo',
        'port'      => 3306
    );

    $mailDetails = array(
        'hostname'      => "mail.servidorgpsalerta.com",
        'username'      => "alertas@servidorgpsalerta.com",
        'password'      => 'paul10203040',
        'port'          => 25,
        'fromName'      => "Reporte de BUS",
        'fromEmail'     => "alertas@servidorgpsalerta.com",
        'subject'       => "Notificacion automatica del BUS",
        'replayEmail'   => "sistemas@aguilacontrol.com",        // Responder los emails a este correo
        'toEmail'       => "sistemas@aguilacontrol.com",        // A este correo llegaran los cambios en la asistencia
    );

    $system     = array(
        'sysName'   => 'PLEX',
        'appKey'    => 'cGxleGFwcA==',
        'timezone'  => -5,
    );

    // Funcion para verificar si la sesion ha sido iniciada previamente
    function is_session_started() {
        if ( php_sapi_name() !== 'cli' ) {
            if ( version_compare(phpversion(), '5.4.0', '>=') ) {
                return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
            } else {
                return session_id() === '' ? FALSE : TRUE;
            }
        }
        return FALSE;
    }

?>