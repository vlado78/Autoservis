<nav class="top-bar topbar-responsive" id=1>

  <div class="top-bar-title" >
    <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
    </span>
    <?php if(!isset( $_SESSION[$idAPP."o"])): ?>
      <a class="topbar-responsive-logo" href="#"><strong>Moj mali servis</strong></a>
      <?php else:?>
      <a class="topbar-responsive-logo" href="#"><strong>Dobrodošao </strong></a>
    <?php endif?>
  </div>

  <div id="topbar-responsive" class="topbar-responsive-links">
    <div class="top-bar-right">
      <ul class="menu simple vertical medium-horizontal">
        <li><a href="<?php echo $putanjaAPP; ?>index.php">Naslovnica</a></li>
        <li><a href="<?php echo $putanjaAPP; ?>onama.php">O nama</a></li>
        <li><a href="<?php echo $putanjaAPP; ?>kontakt.php">Kontakt</a></li>


        <?php if(isset( $_SESSION[$idAPP."o"])): ?>
          <li><a href="<?php echo $putanjaAPP; ?>odjava.php">Odjavi se</a></li>
        <?php else:?>
          <li><a href="<?php echo $putanjaAPP; ?>prijava.php">Prijavi se</a></li>
        <?php endif?>
      </ul>
    </div>
  </div>
</nav>

<br>
<?php if(isset( $_SESSION[$idAPP."o"])): ?>
  <nav class="top-bar topbar-responsive" id=2>

    <div class="top-bar-title">
      <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
      </span>
    </div>

      <div id="topbar-responsive" class="topbar-responsive-links">
        <div class="top-bar-right">
          <ul class="menu simple vertical medium-horizontal">
            <li><a href="<?php echo $putanjaAPP; ?>privatno/nadzornaPloca.php">Nadzorna ploča</a></li>
            <li><a href="<?php echo $putanjaAPP; ?>privatno/PDO.php">PDO</a></li>    
            <li><a href="<?php echo $putanjaAPP; ?>privatno/eraDiagram.php">ERA diagram</a></li>  
            <li><a href="https://github.com/vlado78/GitHub/tree/master/Servis" target="_blank">GitHub</a></li>  
            <li><a href="<?php echo $putanjaAPP; ?>privatno/radionice/index.php">Radionice</a></li>    
            <li><a href="<?php echo $putanjaAPP; ?>privatno/vlasnik/index.php">Vlasnik</a></li>           
            </ul>
        </div>
      </div>
    </nav>
   

    <?php endif?>

  