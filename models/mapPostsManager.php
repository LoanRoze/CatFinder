<?php

function createMap($container, $latitude, $longitude) {
    echo "<script defer>
            setTimeout( ()=>{
                testmap()
                let {map, marker} = createMap('". $container ."', ". $latitude .", ". $longitude .", false)
            }, 100)
         </script>";
}