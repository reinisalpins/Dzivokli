<?php
$page = "profils";
require "header.php";
?>

<div class="formContainer">
            <h1 class="title">Reģistrēties portālam</h1>
            <form>
                <label class=input-label >Vārds:</label>
                <input type="text" class="input" required />
                <label class=input-label >Uzvārds:</label>
                <input type="text" class="input" required />
                <label class=input-label >Vecums:</label>
                <input type="number" class="input" required />
                <label class=input-label >E-pasts:</label>
                <input type="email" class="input" required />
                <label class="input-label" >Parole:</label>
                <input type="password" class="input" required />

                <button class="sign-in-button">Reģistrēties</button>
                <div class="login-links-container">
                <a href="login.php" class="login-link">Ielogoties</a>
            </div>
            </form>