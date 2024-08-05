
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>Enter your username and password</title>


    <link rel="icon" type="image/icon" href="https://www.studentnet.net/favicon.ico" />


	<meta name="robots" content="noindex, nofollow" />
<style>
    body {
    font-family: "Open Sans", sans-serif;
    height: 100vh;
    margin: 0;
    padding: 0;
    background-size: cover;
    background-attachment: fixed;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    -webkit-flex-direction: column;

}

.content {
    color: #5b5b5b;
    font-family: "Open Sans", sans-serif;
    min-height: 400px;
    max-width: 80vw;
    background: white;
    border-radius: 5px;
    text-align: center;
    padding: 40px;
}

.content-header {
    max-width:415px;
    margin:auto;
}

.passwordreset {
    width: 680px;
}

.login {
    width:420px;
}

.logo {
    max-width:400px;
}

input[type=text], input[type=password], input[type=submit], select {
    display: block;
    padding: 12px 3%;
    box-sizing: border-box;
}

.checkbox {
    text-align:left;
    margin: 20px 0px;
}

input[type="text"],
input[type="password"],
select {
    margin: 20px 0px;
    width: 100%;
    font-weight: 600;
    font-size: 16px;
    border-radius: 5px;
    background: #e0e0e0;
    border: none;
    color: #5b5b5b;
}

.submit {
    text-align: left;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
    display:-webkit-flex;
    display:flex;
}

div.forgot,
.submit input,
.submit button {
    display: inline-block;
    flex: 1 1 auto;
    -webkit-flex: 1 1 auto;
}
div.forgot > a.forgot {
    display: block;
}

input[type="submit"], .submit > button {
    background: #5598fe;
    color: #ECECEC;
    font-size: 20px;
    border-radius: 5px;
    border: none;
    text-align: center;
    padding: 12px 3%;
    box-sizing: content-box;
}

.main {
    display: -webkit-flex;
    display: flex;
    align-items: center;
    -webkit-align-items: center;
    justify-content: center;
    -webkit-justify-content: center;
    flex: 1 0 auto;
    -webkit-flex: 1 0 auto;
}

.footer {
    text-align: center;
    font-size: 10px;
    color: #3b3b3b;
    padding: 4px;
    flex-shrink: 0;
    -webkit-flex-shrink: 0;
}

.footer a {
    color: #2b2b2b;
}

.error {
    display: inline-block;
    border: 1px solid #ebccd1;
    background: #f2dede;
    color: #993432;
    padding:3%;
    width:100%;
    box-sizing:border-box;
    border-radius:3px;
}


.btn, .btnaddonright {
    color: #000000;
    border: 1px solid #eee;
    border-radius: 3px;
    background-color: #eee;
    background-image: linear-gradient(#fcfcfc, #eee);
    text-align: center;
    padding: 5px;
    cursor: hand;
}

.btn:hover, .btnaddonright:hover {
    border-color: #ccc;
    background-color: #ddd;
    background-image: linear-gradient(#eee, #ddd);

}

.btn img,
.btnaddonright img {
    max-height: 15px;
    max-width: 15px;
}

meter {
    margin: 0 auto 1em;
    width: 100%;
    height: 0.5em;

    /* Applicable only to Firefox */
    background: none;
    background-color: rgba(0, 0, 0, 0.1);
}

meter::-webkit-meter-bar {
    background: none;
    background-color: rgba(0, 0, 0, 0.1);
}
/* Webkit based browsers */
meter[value="1"]::-webkit-meter-optimum-value { background: red; }
meter[value="2"]::-webkit-meter-optimum-value { background: yellow; }
meter[value="3"]::-webkit-meter-optimum-value { background: orange; }
meter[value="4"]::-webkit-meter-optimum-value { background: green; }

/* Gecko based browsers */
meter[value="1"]::-moz-meter-bar { background: red; }
meter[value="2"]::-moz-meter-bar { background: yellow; }
meter[value="3"]::-moz-meter-bar { background: orange; }
meter[value="4"]::-moz-meter-bar { background: green; }/* Webkit based browsers */


@media (max-device-width:480px) {
    html { height: 100% }
    body { height: 100%; background: white; display: default; }
    .content{
        width: 90vw;
        padding:25px 10px 0px 10px;
        margin:0px auto;
        border-radius: 0px;
    }
    .login, .passwordreset {
        width: 100%;
    }
}

@media (max-device-height: 480px) {
    html { height: 100% }
    body { height: 100%; background: white; display: default; }
    .content {
        width: 90vw;
        margin:0px auto;
        border-radius: 0px;
        border-radius: 0px;
    }
    .login, .passwordreset {
        width: 100%;
    }
}
</style>
<style type="text/css">
body {
    background-image: url("https://sbc.files.cloudworkengine.net.au/pub/5D81853D_403_IMG_0622_modified.jpg");
      background-color: #5598fe;
}
input[type="submit"] {
    background-color: #0066B0;
}
.content {
    background-color: white;
    color:  #5b5b5b;
}

.main {
    flex-direction:column;
    }
</style>
</head>
<body>
    <div class="header"></div>
    <div class="main">
      <div class="content">
        <div class="content-header">
          <img class="logo" src="https://sbc.files.cloudworkengine.net.au/pub/5F041387_logo.png">
<h2>St Bernard's College</h2>
        </div>

<div class="login">
    <h3>Please enter your username and password</h3>
	<form action="?" method="post" name="f" id="f">

<input type="text" id="username" tabindex="1" name="username" placeholder="Username" value="" spellcheck="false" autofocus autocomplete="username webauthn" /><input id="password" type="password" tabindex="3" name="password" placeholder="Password" style="display:none;" autocomplete="current-password webauthn" />
<div class="submit">
<div class="forgot">
<a href="https://sbc-login.cloudworkengine.net/module.php/accountinfo/start-reset.php" target="_blank" class="forgot">Reset my password</a>
<a href="https://sbc-login.cloudworkengine.net/module.php/accountinfo/forgot-username.php" target="_blank" class="forgot">I forgot my username</a>
</div>
 <button id="webauthnBegin" tabindex="2">Continue</button>
<input type="submit" id="submit" style="display: none;" value="Sign in">
</div>
<input type="hidden" name="AuthState" value="_0f7baa13ee10e6a36247e9554af0875e01c2aef488:https://sbc-login.cloudworkengine.net/saml2/idp/SSOService.php?spentityid=https%3A%2F%2Fmysbc.sbc.vic.edu.au&amp;RelayState=https%3A%2F%2Fmysbc.sbc.vic.edu.au%2Fsaml%2Findex.php&amp;cookieTime=1722829784" />	</form>
  <br>
  <style>
    .social_login_btn {
      padding: 0.6em;
      border-radius: 0.3em;
      border: 1px solid #bbb;
      display: block;
      margin-bottom: 0.5em;
      background-repeat: no-repeat;
      background-position-x: 1em;
      background-size: 1.6em;
      background-position-y: center;
      height: 2.6em;
      box-sizing: border-box;
      text-decoration: none;
      color: #222;
    }
    .social_login_btn:hover {
      background-color: #eee;
    }
    .social_login_btn.facebook {
      background-image: url(/module.php/nextmail/cloudwork/facebook.svg);
    }
    .social_login_btn.microsoft {
      background-image: url(/module.php/nextmail/cloudwork/microsoft.svg);
    }
    .social_login_btn.google {
      background-image: url(/module.php/nextmail/cloudwork/google.svg);
    }
    .social_login_btn.apple {
      background-image: url(/module.php/nextmail/cloudwork/apple.svg);
    }
  </style>
            <p>PLEASE NOTE: Parents/caregivers have been issued new usernames. Old alphanumeric usernames have now been disabled.
Parents/caregivers can request login information and password resets using the provided links. 

If you are having trouble logging in, please contact IT Support.</p>
</div>

      </div>
    </div>
    <div class="footer">Cloudwork&reg; Copyright &copy; 2024 <a href="http://studentnet.net">Studentnet&reg;</a> | Powered by <a href="http://coherentcloud.com">Coherent Cloud&reg;</a></div>
  </body>
</html>