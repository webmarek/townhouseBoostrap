<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formLoginModal">
    Otwórz formularz logowania
</button>

<div class="modal fade" id="formLoginModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="<?php echo ROOT_URL; ?>users/login" id="signInForm">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Formularz logowania</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="div-forms">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="flat">Nr mieszkania/login</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="flatNr" id="flat" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="pass">Nr mieszkania/login</label>
                            </div>
                            <div class="col-md-6">
                                <input type="password" name="password" id="pass" />
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Zaloguj">
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


<script src="<?php echo ROOT_PATH; ?>assets/js/users/login.js"></script>