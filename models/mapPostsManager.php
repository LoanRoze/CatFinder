<?php

function createMap($container, $longitude, $latitude) {
    // echo "<script src='' defer> </script>";
    echo "<script src='./script/mapManager.js'> </script>";

    echo "<script defer>
            setTimeout( ()=>{
                let {map, marker} = createMap('". $container ."', ". $longitude .", ". $latitude .", false)
            }, 100)
         </script>";

}