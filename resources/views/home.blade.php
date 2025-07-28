<h1 style="text-align: center;">Học lập trình laravel tại unicode</h1>

<?php
if(env('APP_ENV') == 'production'){
    //Call API live
    echo 'Call API live';
} else {
    //Call API sanbox
    echo 'Call API sanbox';
}