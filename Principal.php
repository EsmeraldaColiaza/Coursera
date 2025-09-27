

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?=base_url()?>assets/imagenes/ibm.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="<?=base_url()?>assets/imagenes/ia.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          
        </div>      
      </div>
    
      <div class="item">
        <img src="<?=base_url()?>assets/imagenes/R.jpeg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          </div>      
      </div>
    </div>

    
  </div>
</div>
  <!-- Controles -->
  <a class="left carousel-control" href="#promoCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#promoCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Prepárate para obtener un examen de certificación industrial</h3>

    <!-- Botones de filtro -->
    <div class="text-center" style="margin-bottom: 30px;">
      <button class="btn btn-default filter-btn" data-filter="all">Todos</button>
      <button class="btn btn-primary filter-btn" data-filter="demanda">Mayor Demanda</button>
    </div>

    <div class="row text-center">
      
      <div class="col-sm-4 curso all demanda">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/4.jpg" alt="Power BI">
          <p><strong>Microsoft Power BI Data Analyst</strong></p>
          <p>Certificado Profesional</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscríbete</button>
        </div>
      </div>

      
      <div class="col-sm-4 curso all demanda">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/5.jpg" alt="Cybersecurity">
          <p><strong>IBM Cybersecurity Analyst</strong></p>
          <p>Certificado Profesional</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscríbete</button>
        </div>
      </div>

      
      <div class="col-sm-4 curso all">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/8.webp" alt="IA Fundamentals">
          <p><strong>Fundamento de la IA para todos</strong></p>
          <p>Certificado Profesional</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscríbete</button>
        </div>
      </div>

      
      <div class="col-sm-4 curso all demanda">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/9.webp" alt="Python">
          <p><strong>Python para todos</strong></p>
          <p>Certificado Profesional</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscríbete</button>
        </div>
      </div>

   
      <div class="col-sm-4 curso all demanda">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/7.webp" alt="IA Generativa IBM">
          <p><strong>Ingeniería de IA generativa de IBM</strong></p>
          <p>Certificado Profesional</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscríbete</button>
        </div>
      </div>

     
      <div class="col-sm-4 curso all">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/10.webp" alt="IA Developer">
          <p><strong>Desarrollador de IA de IBM</strong></p>
          <p>Certificado Profesional</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscríbete</button>
        </div>
      </div>

      
      <div class="col-sm-4 curso all">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/11.jpg" alt="Java Spring">
          <p><strong>Generative AI for Java and Spring Developers</strong></p>
          <p>Certificado Profesional</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscríbete</button>
        </div>
      </div>

   
      <div class="col-sm-4 curso all">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/12.webp" alt="HR AI">
          <p><strong>Generative AI for Human Resources (HR) Professionals</strong></p>
          <p>Certificado Profesional</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscríbete</button>
        </div>
      </div>

      
      <div class="col-sm-4 curso all">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/13.jpg" alt="Project Managers">
          <p><strong>Generative AI for Project Managers</strong></p>
          <p>Certificado Profesional</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscríbete</button>
        </div>
      </div>

     
      <div class="col-sm-4 curso all">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/6.jpg" alt="Project Management">
          <p><strong>Microsoft Project Management</strong></p>
          <p>Certificado Profesional</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscríbete</button>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function(){
    $(".filter-btn").click(function(){
      var filter = $(this).attr("data-filter");
      if(filter == "all"){
        $(".curso").show(300);
      } else {
        $(".curso").hide(300);
        $("." + filter).show(300);
      }
    });
  });
</script>
  
<section id="videos" class="videos-section">
  <div class="container">
    <h2>Videos</h2>
    

    <div class="videos-grid">
      <div class="video-card">
        <div class="video-responsive">
          <iframe src="https://youtube.com/embed/nKPbfIU442g?t=9" title="Video 1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
      </div>

      <div class="video-card">
        <div class="video-responsive">
          <iframe src="https://youtube.com/embed/6nLSlhICEyA" title="Video 2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <div class="video-card">
        <div class="video-responsive">
          <iframe src="https://youtube.com/embed/ggKO3DtwNn8" title="Video 3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>




    </div>
  </div>
</section>


<!-- Container (Contact Section) -->
<div id="contacto" class="container contact-section">
  <h2 class="text-center">Contacto</h2>
  <p class="text-center">¿Tienes dudas? Estamos aquí para ayudarte.</p>

  <div class="row text-center">
    <!-- Dirección -->
    <div class="col-md-4 contact-card">
      <span class="glyphicon glyphicon-map-marker icon-lg"></span>
      <h4>Oficinas</h4>
      <p>Coursera Inc.<br>Chicago, US</p>
      <p><a href="https://goo.gl/maps/" target="_blank">Ver en Google Maps</a></p>
    </div>

    <!-- Teléfono -->
    <div class="col-md-4 contact-card">
      <span class="glyphicon glyphicon-earphone icon-lg"></span>
      <h4>Teléfono</h4>
      <p>+35 964528294</p>
      <p>Lunes - Viernes<br>9:00am - 6:00pm</p>
    </div>

    <!-- Email -->
    <div class="col-md-4 contact-card">
      <span class="glyphicon glyphicon-envelope icon-lg"></span>
      <h4>Email</h4>
      <p><a href="mailto:coursera@gmail.com">coursera@gmail.com</a></p>
      <p>Respuestas en menos de 24 horas</p>
    </div>
  </div>

  <hr>

  <!-- Redes sociales -->
  
</div>


<!-- Image of location/map -->


<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
