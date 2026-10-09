<?php
if($_SERVER["REQUEST_METHOD"] === "GET"){ // GET
    echo "hola con get";
}elseif($_SERVER["REQUEST_METHOD"] === "POST"){// POST
    echo "hola con post";
}elseif($_SERVER["REQUEST_METHOD"] === "PUT"){// PUT
    echo "hola con put";
}elseif($_SERVER["REQUEST_METHOD"] === "DELETE"){// DELETE
    echo "hola con delete";
}else{
    http_response_code(405);
    header("Allow: GET, POST, PUT, DELETE");
    exit;
}