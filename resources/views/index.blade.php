<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home | Kuolix</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4e254da965.js" crossorigin="anonymous"></script>    
    <script src="https://kit.fontawesome.com/397f8ab6a4.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <header>

      <div class="imagen">
        <img src="./img/logo.png" alt="Logo de kuolix">
      </div>

      <nav>
        <ul class="menu">
          <li><a href="{{ route('home') }}">Home</a></li>
          @guest
            <li><a href="{{ route('login') }}">Ingresar</a></li>
            <li><a href="{{ route('register') }}">Registrarse</a></li>            
          @endguest
        </ul>
        <div class="buscar">
          <input type="text" name="" placeholder="Buscar">
          <button><i class="fas fa-search"></i></button>
        </div>
      </nav>
    </header>

    <section class="wrap">
      <section class="articles">

        <article>
          <h2>Kuolix: La Empresa Que Cambiará Internet</h2>
          <div class="images">
            <img src="./img/img1.jpg">
          </div>
          <p>
            Kuolix, una empresa líder en tecnología disruptiva, ha irrumpido en el escenario digital con una visión clara: transformar radicalmente la experiencia en línea. Con sede en el corazón del Silicon Valley, Kuolix ha reunido a un equipo de mentes brillantes y apasionadas, dedicadas a redefinir los límites de lo posible en el mundo digital. Desde su lanzamiento, la empresa ha estado en una misión incansable para revolucionar el Internet y ofrecer soluciones innovadoras que cambien la forma en que interactuamos, compartimos información y nos conectamos en línea.
          </p>
        </article>

        <article>
          <div class="images">
            <img src="./img/img2.jpg">
          </div>
          <p> 
            La clave del éxito de Kuolix radica en su enfoque pionero hacia el desarrollo de tecnologías
            de vanguardia. A través de una combinación única de inteligencia artificial, blockchain y 
            realidad aumentada, la empresa ha creado un ecosistema digital que desafía las convenciones
            y abre nuevas oportunidades para usuarios y empresas por igual. Desde plataformas de 
            comercio electrónico ultra intuitivas hasta redes sociales inmersivas y sistemas de 
            seguridad de última generación, Kuolix está en la vanguardia de la innovación tecnológica, 
            estableciendo un nuevo estándar para el Internet del mañana.<br><br>


            Con una filosofía centrada en el usuario y un compromiso inquebrantable con la excelencia,
            Kuolix está preparada para transformar la forma en que experimentamos la web. A medida que 
            la empresa continúa su viaje hacia el futuro digital, su impacto se extenderá mucho más allá 
            de las fronteras del mundo virtual, allanando el camino para una era de conectividad sin 
            precedentes y posibilidades infinitas en línea. Kuolix no solo está creando el futuro del 
            Internet, está liderando el camino hacia él.
          </p>
        </article>

      </section>
    </section>
    <footer class="footer-wrap">
      <div class="social-media">
        <div class="wrap-icon">
          <a href="https://www.facebook.com/sebastianmiguel.ostofuentes" target="_blank" class="facebook"><i class="fa-brands fa-facebook"></i></a>
        </div>
        <div class="wrap-icon">
          <a href="https://www.twitter.com" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="wrap-icon">
          <a href="https://www.instagram.com/kuolix_s/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="phone-numbers">
        <h4>Contactos</h4>
        <p>0424-4161544</p>
        <p>0241-8583639</p> 
      </div>
      <div class="made-by">
        <p> Sitio diseñado por <a href="#">Sebastian Osto</a></p>
      </div>
    </footer>
    <script type="text/javascript" src="./js/interactividad.js"></script>
  </body>
</html>
