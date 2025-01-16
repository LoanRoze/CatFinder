<?php

function createMap($container, $latitude, $longitude) {
    // echo "<script src='' defer> </script>";
    echo "<script src='./script/mapManager.js'> </script>";

    echo "<script defer>
            setTimeout( ()=>{
                testmap()
                let {map, marker} = createMap('". $container ."', ". $latitude .", ". $longitude .", false)
            }, 100)
         </script>";

}