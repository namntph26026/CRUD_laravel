<?php


function ShowError($errors,$name){
    if($errors->has($name)){
        return'
        <div class="alert alert-danger" role="alert">
            '.$errors->first($name).'
        </div> ' ;
    }
}
      