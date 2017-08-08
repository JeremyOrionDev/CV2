<?php function bodyDisplay(){ ?>
    </head>
    <body id="bod">
      <aside class="left">
        <article class="coordonnees">
          <img id="photo" src="images/pic02.jpg" alt="photo">
          Jeremy ORION <br> 9 ronde cordelia <br> 26300 Chatuzange le goubet <br> 06.68.52.67.07 <br> jeremy9315@hotmail.fr
        </article>
        <hr>
        <nav >
          <ul>
            <br>
            <h3 style="margin-left:30%"> Mes formations</h3>
            <br>
            <div id="btnFormations">
              <button type="button" class="btnNav" id="btn-form" href="formations.php">2017/2018 Titre Concepteur Développeur</button><br>
              <button id="btn-Boucher" class="btnNav" type="button" href="experiences.php" name="btn-exp">2013/2014 Titre Boucher</button>
              <button type="button" class="btnNav" id="btn-BTS">2004/2006 BTS Anabiotech</button>
            </div>
          </ul> <br> <br> <hr>
          <p style="text-align:center"> <br>Copyright Jérémy ORION <br> Site web conçu sur Atom en Août 2017</p>
        </nav>
      </aside>
      <aside class="right">
        <h2 style="text-align:center"> Mes expériences</h2>
        <div class="timeline">
    <div class="timeline-item active">
        <div class="year">2017 <br>2018 <span class="marker"><span class="dot"></span></span>
        </div>
        <div class="info">Formation Concepteur Développeur Informatique.</div>
    </div>
    <div class="timeline-item">
        <div class="year">2016 <span class="marker"><span class="dot"></span></span>
        </div>
        <div class="info">Nombreuses Expériences intérims. <br> aide-maçon, travail sur chaine de découpe, etc...</div>
    </div>
    <div class="timeline-item">
        <div class="year">2008 <span class="marker"><span class="dot"></span></span>
        </div>
        <div class="info">That song the artist formerly known as prince sang no longer applies.</div>
    </div>
    <div class="timeline-item">
        <div class="year">2008 <span class="marker"><span class="dot"></span></span>
        </div>
        <div class="info">The in-house Gawker chat room is filled with photos of Rob Ford, and for one reason.The in-house Gawker chat room is filled with photos of Rob Ford, and for one reason.The in-house Gawker chat room is filled with photos of Rob Ford, and for one reason.</div>
    </div>
    <div class="timeline-item">
        <div class="year">2008 <span class="marker"><span class="dot"></span></span>
        </div>
        <div class="info">That song the artist formerly known as prince sang no longer applies.</div>
    </div>
    <div class="timeline-item">
        <div class="year">2008 <span class="marker"><span class="dot"></span></span>

      </aside>
      <script type="text/javascript">

        $(document).ready(function(){

          $('#btn-exp').click(function(){
              $('#jqueryRefresh').empty();
              $('#jqueryRefresh').load('experiences.php');
          });
          $('#btn-form').click(function(){
            $('#jqueryRefresh').empty();
            $('#jqueryRefresh').load('formationCDI.php');
          });
          $('#btn-Boucher').click(function(){
            $('#jqueryRefresh').empty();
            $('#jqueryRefresh').load('formationBoucher.php');
          });

          $('#btn-BTS').click(function(){
            $('#jqueryRefresh').empty();
            $('#jqueryRefresh').load('Bts.php');
          });
        });
        $(".timeline-item").hover(function () {
            $(".timeline-item").removeClass("active");
            $(this).toggleClass("active");
            $(this).prev(".timeline-item").toggleClass("close");
            $(this).next(".timeline-item").toggleClass("close");
        });

      </script>

        </body>
      </html>
  <?php } ?>
