<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'www klausimas',
    'email_message' => 'Gavote klausimą iš WWW k9 paieška',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'k9paieska@gmail.com',
    'to' => 'k9paieska@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Address',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Address\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>