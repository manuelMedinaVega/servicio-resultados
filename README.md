# Servicio de resultados
Este servicio se encarga de mostrar las posiciones abiertas y los resultados del análisis de los candidatos. Al entrar al servicio se muestra la lista de todas las posiciones, al dar clic en una posición
se muestran más detalles de la posición y los resultados de análisis de los candidatos, se muestran datos de los candidatos y el puntaje que obtuvieron, estos datos están ordenados de forma
descendente de acuerdo al puntaje obtenido. Para obtener los datos de la posición y de los candidatos se usa la API del servicio de postulaciones, y para obtener el puntaje de la aplicación se 
usa la API del servicio de análisis.

## Instrucciones para iniciar el servicio

<ul>
  <li>
    Clonar el repositorio
  </li>
  
  <li>
    Inicia los contenedores: <b><i>docker-compose up -d --build</i></b>
  </li>
  
  <li>
    Copiar el archivo .env.example a .env
  </li>

  <li>
    En el .env, en la variable POSTULACIONES_API_TOKEN, agregar el token obtenido al iniciar el servicio de postulaciones
  </li>

  <li>
    En el .env, en la variable ANALISIS_API_TOKEN, agregar el token obtenido al iniciar el servicio de analisis
  </li>
  
  <li>
    Instalar composer: <b><i>docker-compose run --rm --user resultados composer install</i></b>
  </li>
  
  <li> 
    Ejecutar las migraciones: <b><i>docker-compose run --rm artisan migrate</i></b>
  </li>

</ul>

Se puede acceder al front end del servicio desde: http://127.0.0.1:82/
