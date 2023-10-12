<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="pageintro" class="hoc clear"> 
            <!-- ################################################################################################ -->
            <article>
              <h2 class="heading">Welcome To Our Studio!</h2>
              <h3>IT'S NICE TO MEET YOU</h3>
              <footer>
                <ul class="nospace inline pushright">
                  <li><a class="btn" href="#">Tell Us</a></li>
                  <li><a class="btn inverse" href="#">Chitrali Music</a></li>
                </ul>
              </footer>
            </article>
            <!-- ################################################################################################ -->
          </div>
          <!-- ################################################################################################ -->
        </div>
        <!-- End Top Background Image Wrapper -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper row3">
          <main class="hoc container clear"> 
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="group">
              <div class="one_third first"><a href="#"><img src="images/demo/400x500.jpg" alt=""></a></div>
              <div class="two_third">
                <div class="btmspace-50">
                  <h3 class="heading">Some Overview of Chitrali Music</h3>
                  <p class="nospace">The music of Chitral or Khowar consists of melodies based on lyrics, which have either been written or composed for specific individuals and occasions. It is very difficult to reduce these melodic structures to their basic modes because the scale of which the Chitrali sithar is a good conductor, is not a tempered one. As in most of the modes primarily used for vocal music, the scale tends to be a natural one. </p>
                </div>
                <ul class="fa-ul clear">
                  <li class="one_half first"><i class="fa-li fa fa-play"></i>
                    <h6 class="heading btmspace-10 font-x1"><a href="#">Chitrali Dhool</a></h6>
                    <p>The music of Chitral or Khowar consists of melodies based on lyrics, which have either been written or composed for specific individuals and occasions.</p>
                  </li>
                  <li class="one_half"><i class="fa-li fa fa-music"></i>
                    <h6 class="heading btmspace-10 font-x1"><a href="#">Chitrali Sitar</a></h6>
                    <p>The chitrali sitar is a long-necked lute played in northern area, Chitral of Pakistan. It is not related to the Indian sitar and its name is probably a corruption of setar a Central Asian and Iranian long-necked lute.</p>
                  </li>
                  <li class="one_half first"><i class="fa-li fa  fa-television"></i>
                    <h6 class="heading btmspace-10 font-x1"><a href="#">Chitral Dance</a></h6>
                    <p>Dance when the old King's warriors prepare for battle. ... The Drum, shot partly on location in Chitral on the north-west frontier, and based on A.E.W. Mason's novella, was clearly influenced by Lives of a Bengal Lancer..</p>
                  </li>
                  <li class="one_half"><i class="fa-li fa fa-ils"></i>
                    <h6 class="heading btmspace-10 font-x1"><a href="#">Tradition</a></h6>
                    <p>The lifestyle and social habits of the Chitralis date back to ancient times. Joint family system is still the norm. The father is considered the head of the family; the privilege is conferred on the eldest son after his death. Usually it so happens that while the father is alive, all live together in a single house.</p>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
          </main>
          {{$slot}}
    </body>
</html>