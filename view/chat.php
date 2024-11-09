<?php
include "Bot.php";
$bot = new Bot;
$questions = [
   
 // Información básica sobre Amigo Tendero
 "¿qué es amigo tendero?" => "Amigo Tendero es una iniciativa que busca apoyar a los pequeños tenderos con recursos, capacitaciones y acceso a promociones de diversas marcas para fortalecer sus negocios.",
 "¿cómo funciona amigo tendero?" => "Amigo Tendero funciona a través de programas de lealtad, promociones, y eventos educativos para que los tenderos puedan mejorar sus prácticas comerciales y conectarse con grandes marcas.",
 "¿qué beneficios ofrece amigo tendero?" => "Amigo Tendero ofrece beneficios como capacitaciones, promociones exclusivas y programas de lealtad para tenderos, ayudándoles a fortalecer sus negocios.",
 "¿qué empresas participan en amigo tendero?" => "Diversas empresas del sector comercial colaboran con Amigo Tendero para ofrecer promociones y recursos a los tenderos, promoviendo así el crecimiento de sus negocios.",
 
 // Información sobre programas y recursos
 "¿qué tipo de programas ofrece amigo tendero?" => "Amigo Tendero ofrece programas educativos, eventos y acceso a promociones exclusivas para apoyar a los tenderos en sus negocios.",
 "¿cómo puedo acceder a los recursos de amigo tendero?" => "Los tenderos pueden acceder a los recursos de Amigo Tendero a través de su plataforma o de eventos promocionales realizados por las marcas colaboradoras.",
 "¿hay capacitaciones en amigo tendero?" => "Sí, Amigo Tendero ofrece capacitaciones para que los tenderos puedan aprender mejores prácticas comerciales y fortalecer sus negocios.",
 
 // Saludos y despedidas
 "hola" => "¡Hola! ¿En qué puedo ayudarte sobre Amigo Tendero?",
 "adiós" => "¡Hasta luego! Vuelve cuando necesites información sobre Amigo Tendero.",
 "gracias" => "¡De nada! Me alegra poder ayudarte.",
 
 // Preguntas de control
 "¿qué puedo preguntar aquí?" => "Puedes hacer preguntas sobre qué es Amigo Tendero, cómo funciona, los beneficios que ofrece, y las empresas que participan.",

    //name
    "como te llamas?" =>"Soy MiniBot y estoy para servirte",
    "cual es tu nombre?" =>"Soy MiniBot y estoy para servirte",
    "tienes nombre?" =>"Soy MiniBot y estoy para servirte",


    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you lader ♥",
    //
    "what is your name?" =>" my name is MiniBot",
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, Las preguntas deben estar relacionadas con Amigo Tendero");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}

