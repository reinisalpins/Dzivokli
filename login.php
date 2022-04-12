<?php
$page = "profils";
require "header.php";
?>
<body>
<div class="formContainer">
            <h1 class="title">Ielogoties savā profilā</h1>
            <form>
                <label class=input-label >E-pasts:</label>
                <input type="email" class="input" required />
                <label class="input-label" >Parole:</label>
                <input type="password" class="input" required />
                <button class="sign-in-button">Ielogoties</button>
            </form>
            <div class="login-links-container">
                <a href="register.php" class="login-link">Reģistrēties</a>
            </div>
</body>
</html>