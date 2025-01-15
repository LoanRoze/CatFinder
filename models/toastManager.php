<?php

function toastSuccess($message) {
    echo "<script defer>
            setTimeout( ()=>{
                showToastSuccess('. $message .')
            }, 100)
         </script>";
}

function redirectTimeoutWithSuccess($page, $time, $message) {
    echo "<script defer>
            setTimeout( ()=>{
                showToastSuccess('". $message ."')
            }, 100)
            setTimeout( ()=>{
                window.location.href = '". $page ."'
            }, ". $time .")
         </script>";
}

function toastError($message) {
    echo "<script defer>
            setTimeout( ()=>{
                showToastError('. $message .')
            }, 100)
         </script>";
}