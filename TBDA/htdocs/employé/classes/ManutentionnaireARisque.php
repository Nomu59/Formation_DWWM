<?php
    class ManutentionnaireARisque implements IARisque{
        public function AffichageEmployeRisque($nombreHeures, $trancheDixUnites){
            $BASE_PRIME_RISQUE = 20;
            $Prime = $nombreHeures / 2 * $BASE_PRIME_RISQUE;
            echo "Ce(tte) manutentionnaire travaille dans un secteur à risque et touche une prime de " . $Prime . "&euro;. <br><br>";
        }
    }
?>