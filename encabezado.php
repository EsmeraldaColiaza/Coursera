<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">
        <img src="<?= base_url() ?>assets/imagenes/logo.png" alt="Logo">
      </a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <?php
     
      $principales = ['Inscripción', 'Material de Apoyo', 'Contacto', 'Certificaciones'];
      ?>
      <ul class="nav navbar-nav navbar-right">
        <?php if (!empty($secciones)): ?>
          <?php foreach ($secciones as $seccion): ?>
            <?php if (in_array($seccion->nombre_seccion, $principales)): ?>
              <li>
                <?php if ($seccion->nombre_seccion === 'Certificaciones'): ?>
                 
                  <a href="<?= base_url('secciones/certificados') ?>">
                    <?= htmlspecialchars($seccion->nombre_seccion) ?>
                  </a>
                <?php else: ?>
                  
                  <a href="#sec_<?= $seccion->Id ?>">
                    <?= htmlspecialchars($seccion->nombre_seccion) ?>
                  </a>
                <?php endif; ?>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>

          
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Más
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <?php foreach ($secciones as $seccion): ?>
                <?php if (!in_array($seccion->nombre_seccion, $principales)): ?>
                  <li>
                    <a href="#sec_<?= $seccion->Id ?>">
                      <?= htmlspecialchars($seccion->nombre_seccion) ?>
                    </a>
                  </li>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
          </li>
        <?php else: ?>
          <li><a href="#">No hay secciones activas</a></li>
        <?php endif; ?>

       
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
