<?php
heading("kundenbg.jpg", "Rechner");
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>?page=rechner" method="POST" class="border rounded-3 p-3 mt-5">
                <div class="p-1">
                    <label for="meter" class="fw-bold">Meter:</label>
                    <input type="text" name="meter" id="meter" 
                                        value="<?= $_POST["meter"] ??  ''; ?>"
                                            class="form-control" />
                </div>
                <div class="p-1">
                    <select name="auswahl" class="form-select fw-bold">
                        <option value="k">Kilometer</option>
                        <option value="m">Meile</option>
                        <option value="y">Yard</option>
                        <option value="z">Zoll</option>
                    </select>
                </div>
                <input type="submit" value="Umrechnen" name="btn" class="btn btn-danger fw-bold mt-2" />
            </form>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php 
            if(isset($_POST["btn"])):
                echo '<div class="alert alert-secondary my-2 fw-bold fs-4">';
            
                $meter=$_POST["meter"];
                $muster = "/^[0-9]{1,5}$/";

                if(!preg_match($muster,$meter)):
		            echo "<p class='text-danger'>Bitte eine Zahl eingeben(min 1, max 5 stellig)</p>";
                else:
                    switch($_POST["auswahl"])
                    {
                        /*
                        case "k": echo  "$meter Meter  =  ",$meter / 1000," km"; break;
                        case "m": echo  "$meter Meter  =  ",number_format(($meter / 1609.344),3,',','.')," Meile"; break;
                        case "y": echo  "$meter Meter  =  ",number_format(($meter / 0.9144),3,',','.')," Yard"; break;
                        case "z": echo  "$meter Meter  =  ",number_format(($meter / 0.0254),3,',','.')," Zoll"; break;
                        */
                        #oder Fall2
                        case "k": $formel = ($meter / 1000); 			$zeichen = "km"; 		break;
                        case "m": $formel = ($meter / 1609.344); 	$zeichen ="Meile"; 	break;
                        case "y": $formel = ($meter / 0.9144); 		$zeichen = "Yard"; 	break;
                        case "z": $formel = ($meter / 0.0254); 		$zeichen ="Zoll"; 	break;
                    }

                    echo  "$meter Meter  =  ", number_format($formel,3,',','.')," " , $zeichen;
                endif;


                echo '</div>';
            endif; //isset
            ?>
        </div> <!--end col -->
    </div>
</div> <!--end container -->