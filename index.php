<?php

/*
* =======================================================================================
*                               ARCHIVO PRINCIPAL
* =======================================================================================
*
*   Adicionalmente tendran un header con los siguientes valores de interes: 
*   
*      {
*          CONTENT_LENGTH:     "0",
*          HTTP_USER_AGENT:    "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36",
*          REMOTE_ADDR:        "186.14.183.238",
*          REQUEST_METHOD:     "GET",
*          REQUEST_TIME:       "1619625721"
*          HTTP_KEY_ATPE:      "Z9AQBQXUWDHRN5GYE3DUG52BTSFT1NMA"
*          CONTENT_TYPE:       multipart/form-data - application/json
*      }
*/

    #PERMITIR ACCESO DESDE OTRO DOMINIO (CORS)
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
    header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    #FIN

    
    $response = array(
      "about"=> "¡El plan de tonificación para Rafael Ramon Bastidas Lameda está listo!",
      "initial"=> array(
          "urlImg"=> "https://picsum.photos/75/256",
          "title"=> "Ahora",
          "items"=> array(
              array("name"=> "Grasa corporal", "value"=>"20-24%"),
              array("name"=> "Músculos del cuerpo", "value"=>"10-12%")
          )
      ),
      "final"=> array(
          "urlImg"=> "https://picsum.photos/75/256",
          "title"=> "6 meses",
          "items"=> array(
              array(name=> "Grasa corporal", value=>"10-12%"),
              array(name=> "Músculos del cuerpo", value=>"20-21%")
          )
      ),
      "difficulty"=> array(
          array(nivel=> "Principiante", video=> "https://www.youtube-nocookie.com/embed/egT5ziBD9og"),
          array(nivel=> "Intermedio", video=> "https://www.youtube-nocookie.com/embed/cyPd0CP5TMg"),
          array(nivel=> "Avanzado", video=> "https://www.youtube-nocookie.com/embed/3yHLpmGWRW0")
      ),
      goal=> array(
          "Mejorar el sueño"
      ),
      plan=> array(
          array(
              urlImg=> "https://picsum.photos/180/318",
              title=> "6 meses",
              items=> array(
                  "Consigue tu objetivo",
                  "Cambia tu vida para siempre"
              )
          ),
          array(
              urlImg=> "https://picsum.photos/290/420",
              title=> "3 meses",
              items=> array(
                  "Pierde el exceso de grasa corporal",
                  "Mejora la intensidad de tus entrenamientos",
                  "Comprueba resultados a mitad de camino"
              )
          ),
          array(
              urlImg=> "https://picsum.photos/180/318",
              title=> "1 mes",
              items=> array(
                  "Construye un hábito",
                  "Crea correctas técnicas para ejercitarte",
                  "Primeras transformaciones"
              )
          )
      )
    );
    
    
    echo json_encode($response);




?>
