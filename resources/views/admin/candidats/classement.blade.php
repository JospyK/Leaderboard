<!DOCTYPE html>
<html lang="fr">

<head>
    <title>
        DSI Awards 2022
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bar-chart-race/style.css')}}">

    <link rel="icon" href="/favicon/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">


    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <style>

        body{
            font-family: 'Bebas Neue', cursive;
            color: white !important;
            font-size: 3rem;
            background-color: #022f65;

        }

        #particles-js{
            position:absolute;
            top:0;
            left:0;
            width: 100%;
            height: 100%;
            background-color: #022f65;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0;
            z-index:0;
        }
    </style>
</head>
<body>
    <div id="particles-js"></div>
    <div class="container-fluid m-0 p-0">
        <div class="row">
            <div class="col-md-6">
                <a href="/classement/{{$winner->categorie}}" title="Retour aux categories"><img src="/27871.jpg" class="img-responsive" width="100%" height="750px" alt=""></a>
            </div>
            <div class="col-md-6 text-center pt-5">
                <h1 class="">{{ App\Models\Candidat::CATEGORIE_RADIO[$winner->categorie] }}</h1>
                <hr>
                <h1 style="font-size: 6rem; color: rgb(91, 255, 203); font-weight: 900;">{{ $winner->nom}}</h1>
                <h3 class="">Projet: {{ $winner->projet}}</h3><hr>
                <a href="/classement/{{$winner->categorie}}" title="Retour aux categories"><img src="/8601.jpg" class="" width="50%" alt=""></a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script>
    <script src="https://d3js.org/d3.v5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
        <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="{{asset('js/bar-chart-race/barchartrace.js')}}"></script>
    <script src="{{asset('js/bar-chart-race/datasets.js')}}"></script>



    <script>


        particlesJS("particles-js", {
  particles: {
    number: { value: 400, density: { enable: true, value_area: 800 } },
    color: { value: "#fff" },
    shape: {
      type: "circle",
      stroke: { width: 0, color: "#000000" },
      polygon: { nb_sides: 5 },
      image: { src: "img/github.svg", width: 100, height: 100 }
    },
    opacity: {
      value: 0.7260172626387177,
      random: true,
      anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false }
    },
    size: {
      value: 10,
      random: true,
      anim: { enable: false, speed: 40, size_min: 0.1, sync: false }
    },
    line_linked: {
      enable: false,
      distance: 500,
      color: "#ffffff",
      opacity: 0.4,
      width: 2
    },
    move: {
      enable: true,
      speed: 4.810221721157459,
      direction: "bottom-left",
      random: false,
      straight: false,
      out_mode: "out",
      bounce: false,
      attract: {
        enable: false,
        rotateX: 481.02217211574595,
        rotateY: 1523.236878366529
      }
    }
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: { enable: true, mode: "bubble" },
      onclick: { enable: true, mode: "repulse" },
      resize: true
    },
    modes: {
      grab: { distance: 383.61638361638364, line_linked: { opacity: 0.5 } },
      bubble: {
        distance: 467.53246753246754,
        size: 3.996003996003996,
        duration: 0.3196803196803197,
        opacity: 1,
        speed: 3
      },
      repulse: { distance: 200, duration: 0.4 },
      push: { particles_nb: 4 },
      remove: { particles_nb: 2 }
    }
  },
  retina_detect: true
});
// var count_particles, stats, update;
// stats = new Stats();
// stats.setMode(0);
// stats.domElement.style.position = "absolute";
// stats.domElement.style.left = "0px";
// stats.domElement.style.top = "0px";
// document.body.appendChild(stats.domElement);
// count_particles = document.querySelector(".js-count-particles");
// update = function() {
//   stats.begin();
//   stats.end();
//   if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
//     count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
//   }
//   requestAnimationFrame(update);
// };
// requestAnimationFrame(update);


    </script>
</body>

</html>
