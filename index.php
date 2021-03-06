<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./static/png/favicon.png">
    <link rel="stylesheet" href="./static/css/index.css">
    <link rel="stylesheet" href="./static/css/layout.css">
    <title>Portafolio Carlos</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://kit.fontawesome.com/3e26a1e3ce.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#">Portafo<span>lio</span></a>
            </div>
            <ul class="menu">
                <li><a href="#homes" class="menu-btn">Inicio</a></li>
                <li><a href="#sobreMi" class="menu-btn">Sobre mí</a></li>
                <li><a href="#expe" class="menu-btn">Experiencia</a></li>
                <li><a href="#skill" class="menu-btn">Habilidades</a></li>
                <li><a href="#work" class="menu-btn">Trabajos</a></li>
                <li><a href="mailto:ct749063@gmail.com" class="menu-btn">Contatame</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="homes">
        <div class="max-width">
            <div class="home-conten">
                <div class="text-1">¡Hola bienvenidos!</div>
                <div class="text-2">Soy David</div>
                <div class="text-3">Y soy <span class="typing">Ingeniero en sistemas</span></div>
            </div>
        </div>
    </section>

    <!--  about me secction start  -->
    <section class="about" id="sobreMi">
        <div class="max-width">
            <h1 class="tittle">Sobre mí</h1>
            <div class="about-conten">
                <div class="column left">
                    <img src="./static/png/IMG_20220326_200204_699.webp" alt="">
                    <!--<embed src="CV_Carlos_David_Tapia_Leiva.pdf" type="application/pdf" width="100%" height="600px" />!-->
                </div>
                <div class="column right">
                    <div class="text">Soy ingeniero en <span>sistemas</span></div>
                    <p>
                        Soy una persona responsable, amables con ganas de siempre salir adelanta y ganas de siempre aprender un poco más sobre la informatica, he tenido experiencia en el campo de la programación siendo parte del staff de <b>CS50 Nicaragua</b> ayudando a los alumnos del curso con sus pset(tareas) y proyectos finales para la feria de esta misma.
                    </p>
                    <a href="CV_Carlos_David_Tapia_Leiva.pdf" download="CV Carlos Tapia" >Descarga mi CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- habilidades secction start  -->
    <section class="expe" id="expe">
        <div class="max-width"> 
           <h1 class="tittle">Mi experiencia</h1>
            <div class="expe-conten">
                <div class="card" onclick="developer()">
                    <div class="box">
                        <i class="far fa-file-code"></i>
                        <div class="text">Desarrollador web</div>
                        <p>
                            He tenido una alta experiencia desarrollando webs tanto estaticas como dinamicas,
                            trabajando tanto en el frontend como en el backend. dichas estas son poco complejas.
                        </p>
                    </div>
                    <br>
                   <marquee> <b class="moreinfo">Click para más información</b> </marquee>
                </div>

                <div class="card" onclick="aplicacionesEscritorio()">
                    <div class="box">
                        <i class="fab fa-windows"></i>
                        <div class="text">Programación en aplicaciones de escritorio</div>
                        <p>
                            He trabajado tanto como en aplicaciones de escritorio de consola e interfaces graficas,
                            estos programas han sido destinado a la facturación y contabilidad de empresas. para asi facilitarle
                            a la empresa sus gestiones.
                        </p>
                    </div>
                    <br>
                    <marquee> <b class="moreinfo">Click para más información</b> </marquee>
                </div>

                <div class="card" onclick="diseñoGrafico()">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Diseñador grafico</div>
                        <p>
                            Mi experiencia en este lado laboral ha sido poca, haciendo logos para mis proyectos y logos
                            para terceros: <span>Streamers y empresas familiares o de personas cercanas.</span>
                        </p>
                    </div>
                    <br>
                    <marquee> <b class="moreinfo">Click para más información</b> </marquee>
                </div>
            </div>
        </div>
        <!-- <marquee >En esta seccion solo se muestra un poco de mi experiencia, si desear ver mis proyecto baja mas en la pagina  </marquee> -->
    </section>

    <!-- slills secction start -->
    <section class="skill" id="skill">
        <div class="max-width">
            <h1 class="tittle">Mis habilidades</h1>
            <div class="skill-content">
                <div class="column left">
                    <div class="text">Mis habilidades en el desarrollo de software.</div>
                    <p>
                        Mi experiencia en la programación ha sido completa como podra observar en los siguientes porcentajes.
                        He estado en un curso de Harvard donde fui exelencia academica, en este curso vimos C, python con flask, sql y web.
                        Tambien curse en WEB50, curso de Harvard donde vimos python, flask, css, html, js, django, sass y realizamos proyectos 
                        los cuales eran de complejidad alta. Aumentando así mucho mas mi experiencia en paginas y aplicaciones web
                    </p>
                </div>
                <div class="column right">
                    <div class="bar">
                        <div class="info">
                            <span>C</span>
                            <span>80%</span>
                        </div>
                        <div class="line c"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>C++</span>
                            <span>60%</span>
                        </div>
                        <div class="line cc"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>C#</span>
                            <span>90%</span>
                        </div>
                        <div class="line cshap"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>Python</span>
                            <span>90%</span>
                            
                        </div>
                        <div class="line python"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>Django</span>
                            <span>90%</span>                            
                        </div>
                        <div class="line django"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>Html</span>
                            <span>90%</span>                            
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>CSS</span>
                            <span>95%</span>                            
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>70%</span>    
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>Sql</span>
                            <span>95%</span>
                           </div>
                        <div class="line sql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--  Trabajos secction star  -->
    <section class="work" id="work">
        <div class="max-width">
            <h1 class="tittle">Mis proyectos</h1>
            <div class="carsel owl-carousel">
                <div class="card">
                    <div class="box">
                        <video src="./static/video/Ferreto2.mp4" autoplay loop muted></video>
                        <div class="text">Ferreto</div>
                        <p>
                            Aplicacion de escritorio con interfaces graficas que esta destinado para la mejora
                            de facturacion de una ferreteria, desde añadir productos nuevos hasta darles de baja 
                            aplicacion completa y amigable con el usuario.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <video src="./static/png/2021-07-16 04-11-01.mkv" autoplay loop muted></video>
                        <div class="text">Blueland</div>
                        <p>
                            Aplicacion web dedicada para facilitar a la hora de reservar hoteles, restaurantes,
                            lugares turisticos y ayudar a que la experiencia turistica sea mucho mejor y mas 
                            sencilla a la hora de hacer gestiones de reservas.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <video src="./static/video/2021-07-18 04-13-04.mkv" autoplay loop muted></video>
                        <div class="text">Daliz</div>
                        <p>
                            Programa de consola desarrollado en C#. Con fin de mejorar el rendimiento de ventas
                            e ingreso de productos a una farmacia, puedes agregar productos desde su nombre, ID,
                            precio y cantidad. tambien realiza facturas.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="./static/png/Captura de pantalla 2022-03-27 035630.png">
                        <div class="text">Inta</div>
                        <p>
                            Aplicación web basada en RRHH de la empresa inta, donde ayudamos a automatizar todos los modulos de recursos humanos
                            para asi facilitar las gestiones en esta empresa. Esta app se construyo en <span> HTML5, CSS3, JS, DJANGO, PYTHON Y MYSQL</span>
                        </p> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <canvas      
        width="500"
        height="500"
        id="lienzo">
        </canvas>
    </section> -->
    <!--  footer  -->
    <footer>
        <span>Creado por <a href="">Carlos Tapia</a> derechos reservados. | <span class="far fa-copyright"></span> Creado en 2022</span>
    </footer>
    <script src="./static/scripts/index.js" ></script>

</body>
</html>
