function captureEcho($funcString){
    ob_start();
    call_user_func($funcString);
    $echoContents = ob_get_contents(); /* Get contents of echo from the output buffer */
    ob_end_clean();
    return $echoContents;
}
