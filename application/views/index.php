<?php include 'header.php' ?>

 <div class="container video-wrap">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <?php  foreach ($video as $row): ?>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe width="100%" height="100%" src="<?= $row->url_video ?>"></iframe>
      </div>
      <!-- https://www.youtube.com/embed/nGVSvlhitxY -->
    <?php endforeach ?>
    </div>
    <div class="col-md-2"></div>
  </div>
 
  <!-- WHAT IS -->
  <div class="c-second"> 
    <div class="container">
      <h3 style="font-family: 'Coming Soon';"><b>What is Jajaka?</b></h3>
      <p style="text-align: justify;line-height: 25px;">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
  </div>

  <div class="container member">
    <center><h1 style="font-family: 'Coming Soon';font-size: 35px;">This Is We Are</h1></center>

    <div class="row">
      <div class="col-md-2"></div>
      <center><div class="col-md-2">
        <div class="img">
          <img src="<?= base_url(); ?>assets/img/JajakaPersonal/Akmal.png">
          <p>CEO</p>
        </div>
      </div></center>
      <center><div class="col-md-2">
        <div class="img">
          <img src="<?= base_url(); ?>assets/img/JajakaPersonal/Hendar.png">
          <p>CMO</p>
        </div>
      </div></center>
      <center><div class="col-md-2">
        <div class="img">
          <img src="<?= base_url(); ?>assets/img/JajakaPersonal/Igun.png">
          <p>CKO</p>
        </div>
      </div></center>
     <center> <div class="col-md-2">
        <div class="img">
          <img src="<?= base_url(); ?>assets/img/JajakaPersonal/Lando.png">
          <p>CEO</p>
        </div>
      </div></center>
      <div class="col-md-2"></div>
    </div>

    <div class="row">
      <div class="col-md-2"></div>
      <center><div class="col-md-2">
        <div class="img">
          <img src="<?= base_url(); ?>assets/img/JajakaPersonal/Malik.png">
          <p>COO</p>
        </div>
      </div></center>
      <center><div class="col-md-2">
        <div class="img">
          <img src="<?= base_url(); ?>assets/img/JajakaPersonal/Rezza.png">
          <p>CEO</p>
        </div>
      </div></center>
      <center><div class="col-md-2">
        <div class="img">
          <img src="<?= base_url(); ?>assets/img/JajakaPersonal/Trias.png">
          <p>CCO</p>
        </div>
      </div></center>
     <center> <div class="col-md-2">
        <div class="img">
          <img src="<?= base_url(); ?>assets/img/JajakaPersonal/Willy.png">
          <p>CTO</p>
        </div>
      </div></center>
      <div class="col-md-2"></div>
    </div>

  </div>

<?php include 'footer.php'; ?>