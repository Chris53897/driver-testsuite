<?php
    $resp = new Symfony\Component\HttpFoundation\Response();
    $cookiePath = dirname($request->server->get('REQUEST_URI')) . '/';
    $cookie = Symfony\Component\HttpFoundation\Cookie::create('srvr_cookie', 'srv_var_is_set', 0, $cookiePath);
    $resp->headers->setCookie($cookie);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Basic page with cookie set in sub-directory from server side</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
</head>
<body>
    Basic page with cookie set in sub-directory from server side
</body>
</html>
