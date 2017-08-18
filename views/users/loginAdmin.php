<div id="container2">

        <div>
            <h5 class="panel-title">Formularz logowania Administratora</h5>
        </div>

        <div id="formContainer">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" id="signInForm">


                <div>
                    <input type="text" name="adminNr" id="login" placeholder="Nr Administratora"/>
                </div>

                <div>
                    <input type="password" name="password" id="haslo" placeholder="Hasło"/>
                </div>

                <div>
                    <input type="submit" name="submit" value="log in" class="button"/>
                </div>

            </form>
        </div>


    <div id="clue"></div>

</div>

<script src="<?php echo ROOT_PATH;?>assets/js/users/login.js">
</script>