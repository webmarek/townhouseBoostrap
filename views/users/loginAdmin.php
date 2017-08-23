<div class="row justify-content-center alert">
    <div class="col-md-4"><?php Messages::display(); ?></div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formLoginModal">
    Otwórz formularz logowania Admina
</button>

<div class="modal fade" id="formLoginModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" id="signInForm">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Formularz logowania Administratora</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="div-forms">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="login">Nr Admina/login</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="adminNr" id="login" "/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="pass">Hasło</label>
                            </div>
                            <div class="col-md-6">
                                <input type="password" name="password" id="pass"/>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Zaloguj">
                    </div>

                </div>


                <!--<div>
                    <input type="text" name="adminNr" id="login" placeholder="Nr Administratora"/>
                </div>

                <div>
                    <input type="password" name="password" id="haslo" placeholder="Hasło"/>
                </div>

                <div>
                    <input type="submit" name="submit" value="log in" class="button"/>
                </div>-->


            </form>
        </div>
    </div>
</div>

<script src="<?php echo ROOT_PATH; ?>assets/js_dest/users/login.js">
</script>