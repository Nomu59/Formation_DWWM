<?php
    class ProducteurARisque implements IARisque{
        public function AffichageEmployeRisque($nombreHeures, $trancheDixUnites){
            $BASE_PRIME_RISQUE = 20;
            $Prime = $trancheDixUnites * $BASE_PRIME_RISQUE;
            echo "Ce(tte) producteur/trice travaille dans un secteur à risque et touche une prime de " . $Prime . "&euro;. <br><br>";
        }
    }
?>