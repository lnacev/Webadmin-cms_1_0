<?php 
//$datum = date("j-n-Y"); 
//$datum = date("Y-m-j");
?>
              <h1 class="edit-list-title">Smazání investice <span>(úprava investic)</span></h1>
              
              <div class="edit-list-wrap">

                  <form class="edit-list-form" action="./inc/akce-delete-investice.inc.php" method="post">
<?php
require_once "./inc/config/config.inc.php";
$id= $_GET['id'];     // Do proměnné $id si dáme číslo volaného článku. Tuto proměnnou raději z bezpečnostních důvodů přetypujeme na INTEGER
$vysledek=mysql_query("SELECT * FROM investice WHERE id='$id'");
while ($zaznam=MySQL_Fetch_Array($vysledek)): 
                                echo "<fieldset class=\"edit-form-left\">
                                      <input name=\"id\" type=\"hidden\" value='".$zaznam['id']."'/>
                                      <label for=\"page-title\">Nadpis novinky:</label> 
                                      <input class=\"text\" type=\"text\" value='".$zaznam['nazev-novinky']."' id=\"page-title\" name=\"page-title\" title=\"Název novinky\"/>
                                  </fieldset>
                                  <fieldset class=\"edit-form-right\">
                                      <label for=\"date\">Datum přidání:</label>
                                      <input class=\"text\" type=\"text\" value='".$zaznam['datum']."' id=\"date\" name=\"date\" title=\"Datum\"/>
                                  </fieldset>
                                  <fieldset class=\"edit-form-left-right\"> 
                                  </fieldset>";
  endwhile; ?>
                                  

                                  <p>
                                      <input type="submit" value="Smaž" class="btn-red-grey" onclick="" title="Kliknutím uložíte provedené změny"/>
                                      <a href="#" title="Návrat zpět bez uložení provedených úprav">Vrátit se zpět</a>
                                  </p>

                  </form>
                  
              </div>

              <div class="clear"></div> 
