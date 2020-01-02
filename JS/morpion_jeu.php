<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/morpion.css">
    <script src="javascript/morpion.js"  type="text/javascript"></script>
  </head>
  <body onload="bonjour()">
      <header>
          <h1>Le Jeu du morpion</h1>
          <h2>Activité 2</h2>
      </header>
      <main>
        <div>
          <h3 onmouseover="couleurtitre()">Bienvenue</h3>
          Nous sommes le <?php echo date("d:m:y")?> et il est <?php echo date("H:i:s");?>
          <br/>
          votre adresse IP est  <?php echo $_SERVER['REMOTE_ADDR'];?><br/>
          Ce script est exécuté sur le serveur <?php echo $_SERVER['SERVER_SOFTWARE'];?> qui se 
          trouve à l'adresse <?php echo $_SERVER['SERVER_ADDR']?>.
        </div>
        <div>
        <button onclick = "ChangeCouleur('blue');">Bleu</button>
        <button onclick = "ChangeCouleur('yellow');">Jaune</button> 
        <button onclick = "ChangeCouleur('white');">Blanc</button>
        </div>
        <div>
          <button ondblclick = "raz()">Remise à zéro</button>
        </div>
        <div class="tableau">
          <table style="width:80%">
            <tr>
              <td><img id="img1" src="images/croix.png" onclick = "croixrond(1);"></td><td><img id="img2" src="images/vide.png" onclick = "croixrond(2);"></td><td><img id="img3" src="images/croix.png"onclick = "croixrond(3);"></td>
            </tr>
            <tr>
              <td><img id="img4" src="images/vide.png" onclick = "croixrond(4);"></td><td><img id="img5" src="images/rond.png" onclick = "croixrond(5);"></td><td><img id="img6" src="images/vide.png" onclick = "croixrond(6);"></td>
            </tr>
            <tr>
              <td><img id="img7" src="images/rond.png" onclick = "croixrond(7);"></td><td><img id="img8" src="images/vide.png" onclick = "croixrond(8);"></td><td><img id="img9" src="images/vide.png" onclick = "croixrond(9);"></td>
            </tr>
          </table>
        </div>
      </main>
      <aside>
        <div>
          <h3>Les régles du Jeu</h3>
          Aligner troix croix ou trois ronds pour gagner. Les diagonales sont prises en compte.
        </div>
        <div>
          <h3>Les joueurs :</h3>
          Nom   Joueur 1 : <b>
          <?php 
            if (isset($_GET['nom'])){
              $nom = $_GET['nom'];
            }
            else 
            {
              $nom = 'Inconnu';
            }
            echo $nom;?></b>
          <br/>
          Prénom Joueur 1 : </br>
          Nom Joueur    2 : <b>Inconnu</b><br/>
        </div>
        <div>
          <h3>Score</h3>
          Joueur 1 : <span id="score1" ></span><br/>
          Joueur 2 : <span id="score2" ></span><br/>
        </div>
      </aside>
      <footer>
        NSI LFT
      </footer>
  </body>