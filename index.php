<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Mi Página Web Personal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="dist/BOOTSTRA.386/css/bootstrap.min.css" media="screen" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
            <?php require_once( "structure/menu.php" ); ?>
          </div>
      
          <div class="container" style="background:url('dist/fonts/grid.svg')">

            <div class="bs-docs-section">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="page-header">
                      <h1 id="inicio">Bienvenido a NOTICIAS.ES </h1>
                      <h2>Ángel Redondo Pliego</h2>
                      <?php
                        echo "Fecha de la consulta: " . date("d/m/Y h:m:s") . "<br>";

                        ?>
                    </div>
                  </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bs-component">
                            <p class="justify-text">
                            ¡Hola! Me llamo Ángel, soy de Toledo y nací en el 83. <br />
                            Profesionalmente, me dedico a ayudar a las personas solucionando problemas gracias a la informática. <br />
                            He estudiado Arte, Electrónica, Informática y Biblioteconomía, y no necesariamente en ese orden. Soy padre, 
                            soy reflexivo, soy extrovertido, pero sobre todo soy una mente inquieta que se esfuerza por aprender y mejorar 
                            disfrutando lo más posible en el proceso. <br />
                            Durante más de la mitad de mi vida he dedicado muchos esfuerzos al voluntariado desde todo tipo de asociaciones 
                            y proyectos de solidaridad y cooperación, llegando a liderar el Consejo de la Juventud de Toledo durante un par 
                            de años.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">       
                        <h3 id="progress-basic">Alimento</h3>
                        <div class="bs-component">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">Programación 70%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">Sistemas 64%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 58%;" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">BBDD 58%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 73%;" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100">Juegos Retro 73%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 71%;" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100">Coches Clásicos 71%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 66%;" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100">Música de los 80s 69%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 97%;" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100">Artes Marciales 97%</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-lg-3">       
                        <div class="bs-component">
                            <img src="assets/images/yo.gif" width=180px alt="avatar" />
                            <h5>He venido a hablar de mi libro</h5>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="bs-component">
                            <p class="justify-text">
                            Hago muchos experimentos artísticos: Aporreo mi guitarra y mi piano cuanto puedo, y en ocasiones incluso suena algo 
                            semejante a música. Hago mis pinitos literarios cuando siento que necesito un bálsamo para mi dolor. A veces, hasta me 
                            atrevo a garabatear con acuarela. Me encanta escuchar música de baile latino, música de los ochenta y música heavy y, 
                            cuando me dejan, me marco alguna sesión con mi mesa de mezclas.<br />
                            Siempre que puedo me escapo con la familia a corretear por el campo, a echar unas partidas de rol en vivo, o en general 
                            cualquier actividad al aire libre con la que disfrutar del sol y los árboles. A veces me debo conformar con coger la moto 
                            y ver las cosas empequeñecerse desde el retrovisor. Otras veces, puedo liarlos a todos, y nos vamos con nuestro pequeño 
                            Ford Fiesta ochentero a alguna concentración, el último reducto donde los coches se conducen.<br />
                            Apasionado de conversar sobre temas que me hagan pensar, la crianza de mis hijos, la filosofía, las artes marciales, 
                            los juegos de rol y simulación, los paseos en otoño, la poesía romántica, la narrativa gótica, y bailar hasta que me 
                            duelan los pies.

                          </p>
                        </div>
                      </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-4">
                        <div class="bs-component">
                            <h2 id="sobre-mi">Sobre Mi</h2>
                            <p class="justify-text">
                            Entusiasta de ayudar a los demás,disfruto buscando soluciones eficaces, prácticas y rápidas.
                            Me entiendo bien tanto conpersonas como con máquinas. Se me da bien usar mis habilidades sociales para 
                            entender y explicar
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="bs-component">
                            <h2 id="habilidades">Habilidades</h2>
                            <ul>
                                <li>Análisis de necesidades y búsqueda de soluciones</li>
                                <li>Hacer mías las necesidades de mi entorno de trabajo</li>
                                <li>Resolutivo tanto como parte de un equipo como de manera autónoma</li>
                                <li>Solucionar tareas estando bajo presión, siguiendo objetivos y plazos</li>
                                <li>Cumplimiento de instrucciones, generando resultados decalidad</li>
                            </ul>
                        </div>
        
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-lg-6">
                        <div class="bs-component">
                            <h2 id="experiencia">Experiencia</h2>
                            <ul>
                                <li>Atención a usuarios finales, de todo tipo. Trato amable</li>
                                <li>Resolución de todo tipo de incidencias microinformáticas, de sistemas, de infraestructura y redes tanto en Windows como en Linux y Mac OS</li>
                                <li>Diseño, programación, mantenimiento y mejora de todo tipo de bases de datos. Explotación de datos. Generación de consultas, optimizaciónes, creación de vistas. Sobre todo MySQL, MS SQL y PostgreSQL</li>
                                <li>Desarrollo de soluciones a medida en php y tecnologías afines. Con y sin frameworks. CodeIgniter, Laravel. Muchos middleware fullstack, también EndPoints</li>
                                <li>Desarrollo de todo tipo scripts de integración entre sistemas. Bash, php, python</li>
                                <li>Desarrollo de aplicaciones para múltiples dispositivos. Flutter</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="bs-component">
                            <h2 id="formacion">Formación</h2>
                            <ul class="justify-text">
                                <li>Diplomatura Biblioteconomía y Documentación. 2007</li>
                                <li>Bachiller Artes y Oficios. 2003</li>
                                <li>Grado Medio Equipos Electrónicos de Consumo. 2001</li>
                            </ul> 
                        </div>

                        <div class="bs-component">
                            <h2 id="formacion">Cursos y Certificaciones</h2>
                            <ul class="justify-text">
                                <li>Certificado de Profesionalidad 2. Arquitectura Big Data, BI y Datawarehouse. 2022. 160 horas</li>
                                <li>Certificación. Cisco CCNA Essentials v7. 2022. 180 horas</li>
                                <li>Certificado de Profesionalidad 2. Dinamización de Ocio y Tiempo Libre. 2021. 320 horas</li>
                                <li>Certificación. Cisco Ciberops Essentials v7. 2021. 180 horas</li>
                                <li>Certificado de Profesionalidad 3. Programación de Sistemas Informáticos. 2014. 580 horas</li>
                                <li>Certificado de Profesionalidad 3. Administración de Bases de Datos. 2013. 640 horas</li>
                                <li>Certificado de Profesionalidad 2. Equipos Microinformáticos y Terminales de Telecomunicación. 2010. 220 horas</li>
                                <li>Certificación. ITIL foundations v2. 2008. 250 horas</li>
                            </ul> 
                        </div>

                    </div>
                </div>
        
                <!-- Blockquotes -->
        
                <div class="row">
                  <div class="col-lg-12">
                    <h2 id="type-blockquotes">Rarezas Mías</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="bs-component">
                        <h3>Algunos juegos</h3>
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Juego</th>
                                <th scope="col">Plataformas</th>
                                <th scope="col">Descripción</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="table-active">
                                <th scope="row">1</th>
                                <td>Super Mario Bros 3</td>
                                <td>NES</td>
                                <td>Es el tercer videojuego de plataformas de la franquicia Mario para la consola Nintendo Entertainment System 
                                    (NES). Salió a la venta el 23 de octubre de 1988 en Japón y el 12 de febrero de 1990 en Estados Unidos. Al 
                                    igual que en títulos anteriores, SMB3 fue diseñado por Shigeru Miyamoto, mientras que la banda sonora fue 
                                    compuesta por Kōji Kondō. El juego retoma la historia del primer título, en la cual los fontaneros Mario y 
                                    Luigi deberán salvar a la Princesa Peach de las garras de Bowser. 
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Tetris</td>
                                <td>Game Boy</td>
                                <td>
                                    Es un videojuego de puzle lanzado para el Game Boy en 1989. Es una versión portátil del Tetris original desarrollado 
                                    por Alekséi Pázhitnov, y se incluyó en los lanzamientos norteamericanos y europeos del Game Boy. Fue el primer 
                                    juego en ser compatible con el Game Link Cable, un accesorio que permite conectar dos Game Boy para propósitos multijugador.
                                </td>
                              </tr>

                            </tbody>
                          </table>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="bs-component">
                        <h3>Algunas canciones</h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/7Clxaxcp5Sk3uU2K0M23MI?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                  </div>

                </div>
              </div>
            
      <?php require_once( "structure/footer.php" ); ?>
    </div>
  </body>
</html>
