<?php

function toastSuccess($message) {
    echo "<script defer>
            setTimeout( ()=>{
                showToastSuccess('. $message .')
            }, 100)
         </script>";
}
function toastError($message) {
    echo "<script defer>
            setTimeout( ()=>{
                showToastError('. $message .')
            }, 100)
         </script>";
}