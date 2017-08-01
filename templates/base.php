<?php
/* Ad hoc functions to make the examples marginally prettier.*/
/* Mostly copied from the client library base examples. */
function isWebRequest() {
  return isset($_SERVER['HTTP_USER_AGENT']);
}

function pageHeader($title) {
  $ret = "";
  if (isWebRequest()) {
    $ret .= "<!doctype html>
    <html>
    <head>
      <title>" . $title . "</title>
      <style> 
          body {
            font-family: Arial, sans-serif;
            margin: auto;
            white-space: nowrap;
            padding: 10px;
          }

          .request {
            -webkit-box-flex: 1;
            -moz-box-flex: 1;
            box-flex: 1;
          }

          .result {
            -webkit-box-flex: 2;
            -moz-box-flex: 2;
            box-flex: 2;
            margin-top: 5ex;
          }

          header {
            color: #000;
            padding: 2px 5px;
            font-size: 100%;
            margin: auto;
            text-align: center;
          }

          header h1.logo {
            margin: 6px 0;
            padding: 0;
            font-size: 24px;
            line-height: 20px;
            text-align: center;
          }

          .login {
            font-size: 200%;
            display: block;
            margin: auto;
            cursor: pointer;
            text-align: center;
            font-weight: bold;
            color: #2779AA;
            line-height: normal;
          }

          .logout {
            font-weight: normal;
            margin-top: 0;
          }

          .warn {
            color: red;
          }
      </style>
    </head>
    <body>\n";
    $ret .= "<header><h1>" . $title . "</h1></header>";
  }
  return $ret;
}

function pageFooter() {
  $ret = "";
  if (isWebRequest()) {
    $ret .= "</html>";
  }
  return $ret;
}

function missingClientSecretsWarning() {
  $ret = "";
  if (isWebRequest()) {
    $ret = "
      <h3 class='warn'>
        Warning: You need to set Client ID, Client Secret and Redirect URI on
        the client_secrets.json file. You can get these from the
        <a href='http://developers.google.com/console'>Google API console</a>
      </h3>";
  } else {
    $ret = "Warning: You need to set Client ID, Client Secret and Redirect URI";
    $ret .= " on the client_secrets.json file. You can get these from:\n";
    $ret .= "http://developers.google.com/console";
  }
  return $ret;
}
