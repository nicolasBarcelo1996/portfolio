<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="DarkTheme">



    <div class="background">
    <div class="mainHeaderDark">
        
        <button class="switch" id="switch"><img class="darkHat" id="black" src="darkHat.png" alt="sss"></button>
      <h1 style="color: whitesmoke;">Bienvenido, mi nombre es <span style="color: lightseagreen;">Nicolas Barcelò </span></h1>
      <h3> <a href="https://www.linkedin.com/in/nicolas-barcelo-aa10741a1/"> <img  class="github" src="./img/link.png" alt="linkedin"> </a> 
        
        <a href="https://api.whatsapp.com/send?phone=3412283856"> <img class="github" src="./img/wpp.png" alt="whatsapp"></h3></a>
        <h3 style="color: lightseagreen;"> Nicolas.BarceloDS@gmail.com </h3>
        <h2 class="type"></h2> </span> </h2>
       
        
        
        

    </div>
    <!-- Section "Info" -->
    <section>
        <div class="Info">
          
            <ul>
                <li><img src="./img/fast.png" alt="">
                <h1>Velocidad</h1>
                <p>Cumplir objetivos con rapidez y <br>
                     precision es mi enfoque</p>
                </li>


                <li><img src="./img/password.png" alt="">
                    <h1>Key</h1>
                <p>El trabajo en equipo es la llave <br> para conseguir cumplir con las demandas</p>
             </li>


                <li><img src="./img/books.png" alt=""> 
                    <h1>Aprendizaje</h1>
                <p>Me encuentro en constante aprendizaje para mejorar <br> el uso de las tecnologias que ya conozco <br>  y las que siguen por conocer</p>
                </li>


                <li><img src="./img/home.png" alt=""> 
                    <h1>Diseño</h1>
                      <p>Me enfoco mucho en los diseños <br> mobile friendly y una UI/UX amigable</p>
                </li>

            </ul>

        </div>
    
    </section>

    <div class="me">
        <img class="fotoPersonal" src="./img/fotoPersonal.jpg" alt="">

        <h1 style="color: lightseagreen;">Acerca de mi</h1>
        <h3>Desarrollador de FrontEnd residente en Rosario,Santa Fe. 
            Apasionado por jugar al ajedrez, tocar instrumentos y <br> crear paginas web, darles vida a traves 
            de animaciones, efectos y logica.
        </h3>
       

        
   <ul class="knowledgeList">
    <li>Bootstrap - <a href="https://www.udemy.com/certificate/UC-14fb4f22-d86d-400e-acc9-35c338994add/">Certificado</a></li>
    <li>Javascript - <span><a href="https://www.udemy.com/certificate/UC-193cd36f-b508-4fcb-87da-8e6711f8d034/">Certificado</a> </span> </li>
    <li>React - <span><a href="https://www.udemy.com/certificate/UC-4353e9a0-ece1-48c3-b5fb-e2b73a3410f8/">Certificado</a></span> </li>
    <li>MaterialUI - <a href="https://material-ui.com/">Material-UI</a></li>
    <li>Css - <a href="https://www.freecodecamp.org/">FreeCodeCamp</a></li>
    <li >Express-Axios-NodeJs</li>
</ul>

    </div>

    <!-- Section "Work" -->
    <div class="proyectUI">
    <h2>Proyectos(React)</h2>

    <div class="proyectDiv">
      
        <a href="https://rickandmortyz.herokuapp.com/">
        <li>
            <h4>Rick y morty App(live)</h4><br><img class="proyect" src="./img/RickPro.jpg" alt="">
        </a>
        <p>Github code <a href="https://github.com/nicolasBarcelo1996/RickAndMortyZ"><img class="github" src="./img/gitDark.png" alt=""></a> </p>
        </li>
 
        <a href="https://appbookz.herokuapp.com/">
        <li>
            <h4>Google Play Books API App(live)</h4><br>
            <img class="proyect" src="/img/BookPro.jpg" alt="google">
        </a>
            <p>Github code <a href="https://github.com/nicolasBarcelo1996/BookZ"><img class="github" src="./img/gitDark.png" alt=""></a> </p>
        </li>

        <a href="http://weatherzapp.herokuapp.com">
            
        <li>
            <h4>Weather App(live)</h4><br>
            <img class="proyect" src="./img/ClimaPro.jpg" alt="">
        </a>
            <p>Github code <span><a href="https://github.com/nicolasBarcelo1996/WeatherZ"><img class="github" src="./img/gitDark.png" alt=""></a></span> </p>
        </li>
    </div>
</div>

</div>


    <!-- Section "Thanks" -->
     <!-- 
        Agradecimiento a este website y sus maravillosos iconos!

         Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
        Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
        Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
        Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
        -->
    







<script>
const btnSwitch = document.querySelector('#switch');

btnSwitch.addEventListener('click', () =>{
    document.body.classList.toggle('LightTheme');
    btnSwitch.classList.toggle('background');
    
   
})


</script>
<script src="typed.js"></script>
<script>
    var typed = new Typed('.type', {
  strings: [
   'Universitario',
    'Autodidacta',
    'FrontEnd Developer',
],
  typeSpeed: 45,
  fadeOut: true,
  showCursor:false ,
  loop: false
});
</script>


    
</body>
</html>