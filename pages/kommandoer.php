<style>
    .card-title {
        background-color: #0c1821;
        padding: 20px;
        color: white;
        font-size: 20px;
             font-weight: 300;
    }
    
    .card-bread {
        padding: 20px;
        font-weight: 500;
    }
    
    .card {
        border-radius: 0;
        border: none;
        border-bottom: 5px solid #faedca; 
    }

</style>
<div class="jumbotron">
	<div class="row">
		<div class="col-md">
		<div class="toc">
			<center><h1>Kommandoer <i class="fas fa-terminal"></i></h1>
			<p>En liste med kommandoer som du kan ha bruk for.</p></center>
		</div>
    </div>
  </div>
</div>

<div class="jumbotron">
	<div class="row">
		<div class="col-md-6">
		<div class="toc">
            
            <center><h1>Lage nytt prosjekt <i class="fas fa-book"></i></h1></center>
			<?php
$cars = array
  (
  array("git init", "Starter et nytt reprository (Med andre ord et prosjekt) "),
  array("git clone ssh://git@github.com/[brukernavn]/[repository].git", "Kloner ett prosjekt med remote SSH. (Med andre ord, henter fra en sky, eksempelet her bruker GITHub)"),
  
  );
  foreach ($cars as $key) {
     echo "<div class='card'>";
    echo "<div class='card-body'>";
    echo "<h4 class='card-title'>".$key[0]."</h4>";
    echo "<p class='card-bread'>".$key[1]."</p>";
       echo "</div>";
       echo "</div>";
    
  }
?>
			
		</div>
    </div>
                               		<div class="col-md-6">
		<div class="toc">
            
            <center><h1>Inspeksjon <i class="fas fa-clipboard-list"></i></h1></center>
			<?php
$cars = array
  (
  array("git log ", "Se endringer"),
  array("git log --summary", "Se endringer detaljert "),
  );
  foreach ($cars as $key) {
     echo "<div class='card'>";
    echo "<div class='card-body'>";
    echo "<h4 class='card-title'>".$key[0]."</h4>";
    echo "<p class='card-bread'>".$key[1]."</p>";
       echo "</div>";
       echo "</div>";
    
  }
?>
			
		</div>
    </div>
        		<div class="col-md-6">
		<div class="toc">
            
            <center><h1>Essensielle <i class="fas fa-heartbeat"></i></h1></center>
			<?php
$cars = array
  (
  array("git status ", "Sjekk statusen på reprository"),
  array("git commit -m {melding}", "Oppdaterer de nye filene som er endret i prosjektet. MERK: Du må inkludere en melding, og  "),
  array("git add {filnavn}", "Legg til en fil"),
  array("git add -A", "Legger til alle filer og nye endringer."),
array("git remove {filnavn}", "Fjern en fil (Denne vil slette filen)")
  );
  foreach ($cars as $key) {
     echo "<div class='card'>";
    echo "<div class='card-body'>";
    echo "<h4 class='card-title'>".$key[0]."</h4>";
    echo "<p class='card-bread'>".$key[1]."</p>";
       echo "</div>";
       echo "</div>";
    
  }
?>
			
		</div>
    </div>
                
 
                                                      		<div class="col-md-6">
		<div class="toc">
            
            <center><h1>Deling av prosjekter <i class="fab fa-creative-commons-share"></i></h1></center>
			<?php
$cars = array
  (
  array("git push origin {branch navn}", "Push ut en branch til din remote"),
  array("git push", "Pusher ut en branch, den du har lagt til huskelisten"),
  array("git pull", "Sjekk om det er oppdateringer."),
  array("git remote add origin ssh://git@github.com/[brukernavn]/[repository].git", "Setter en remote, her i dette tilfelle er det GITHub"),
   array("git remote set-url origin ssh://git@github.com/[brukernavn]/[repository].git", "Setter origin sin url, slik at hver gang du pusher og puller vil du bruke denne som utgangspunkt."),
  );
  foreach ($cars as $key) {
     echo "<div class='card'>";
    echo "<div class='card-body'>";
    echo "<h4 class='card-title'>".$key[0]."</h4>";
    echo "<p class='card-bread'>".$key[1]."</p>";
       echo "</div>";
       echo "</div>";
    
  }
?>
			
		</div>
    </div>
  </div>
</div>