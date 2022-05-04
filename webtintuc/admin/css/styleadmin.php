<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");
?>

* {
    padding: 0;
    margin: 0;
    box-sizing: inherit;
}

html {
    box-sizing: border-box;
    font-size: 62.5%;
    font-family: Arial, Helvetica, sans-serif;
}

a {
    text-decoration: none;
    color: #444;
    transition: color linear .2s;
}

a:hover {
    color: #0090cd;
}

.grid {
    max-width: 1200px;
    margin: 0 auto;
    border: 1px #444 solid;
    border-radius: 5px;
    padding: 16px;
    background: linear-gradient(rgba(0, 144, 205, .25),#fff);

}

.hello {
    margin: 16px;
    text-align: center;
    font-size: 4rem;
    color: #0090cd;
}

/* Header -------------------------- */

/* navbar ----------------------------- */
.navbar {
    display: flex;
    font-size: 2rem;
    margin: 16px;
    list-style: none;
}

.navbar>li {
    margin-left: 24px;
}


/* Footer ------------------------------ */
.footer {
    text-align: center;
    color: #0090cd;
    margin-top: 24px;
}
