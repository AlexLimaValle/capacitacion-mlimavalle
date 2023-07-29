<?php
    function color(){
        $colors = ["#A0F986","#FB8062","#F6FB62","#62FBEB","#629AFB","#A862FB","#DF62FB","#FB62EB","#FB628E","#E4F81B","#F8931B","#F3C997"];
        $numero_color = sizeof($colors);
        $numero = rand(0,$numero_color-1);

        return $colors[$numero];
    }
?>