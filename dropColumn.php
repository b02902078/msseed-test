<?php  
                require_once "getitems.php";
              #prepareResource();
                $team = getOccupyTeam('y997V');
                if(!empty($team)) { echo $team; }
                else {echo "empty";}
?>