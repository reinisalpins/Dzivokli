<?php
$page = "profils";
require "header.php";
?>

<div class="formContainer">
            <h1 class="title">Reģistrēties portālam</h1>
            <!-- <form>
                <label class=input-label >Vārds:</label>
                <input type="text" class="input" required />
                <label class=input-label >Uzvārds:</label>
                <input type="text" class="input" required />
                <label class=input-label >E-pasts:</label>
                <input type="email" class="input" required />
                <label class="input-label" >Parole:</label>
                <input type="password" class="input" required />
                <label class=input-label >Tālrunis:</label>
                <input type="text" class="input" required />
                <label class=input-label >Vecums:</label>
                <input type="number" class="input" required />
                <label class=input-label >Adrese:</label>
                <input type="text" class="input-inline" required placeholder="Valsts"/>
                <input type="text" class="input-inline" required placeholder="Pilsēta"/>
                <input type="text" class="input-inline" required placeholder="Iela"/>
                <input type="text" class="input-inline" required placeholder="Ielas Nr."/>
                <input type="text" class="input-inline-last" required placeholder="Dzīv Nr."/>

                <button class="sign-in-button">Reģistrēties</button>
                <div class="login-links-container">
                <a href="login.php" class="login-link">Ielogoties</a>
            </div>
            </form> -->

            <div class="register-container">
                <form>
                    <h1>Vārds un Uzvārds</h1>
                
                    <div class="inline">
                        <input type="text" placeholder="Vārds">
                        <input type="text" placeholder="Uzvārds">
                    </div>
                    <h1>E-Pasts</h1>
                
                <div class="inline">
                    <input type="email" placeholder="E-Pasts">
                </div>
                <h1>Parole</h1>
                
                <div class="inline">
                    <input type="password" placeholder="Parole">
                </div>
                <h1>Tālrunis</h1>
                
                <div class="inline">
                    <input type="text" placeholder="Tālrunis">
                </div>
                    <h1>Dzimšanas Datums</h1>
                    <div class="inline">
                        <input type="date" min="1920-01-01" max="2022-05-31">
                    </div>
                    <h1>Adrese</h1>
                    <div class="inline">
                        <input type="text" placeholder="Valsts">
                        <input type="text" placeholder="Pilsēta">
                        <input type="text" placeholder="Iela">
                        <input type="text" placeholder="Ielas nr.">
                        <input type="text" placeholder="Dzīvokļa nr.">
                    </div>

                    <button class="poga">Reģistrēties</button>
                </form>

                <h1></h1>
                
            </div>
</div>