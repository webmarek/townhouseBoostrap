<?php

if (!isset($_SESSION['is_logged_in_admin'])) {
    header('location: ' . ROOT_PATH);
    exit();
}

/*var_dump($viewmodel);*/
?>


<div id="container">
    <div class="text-left"><a href="<?php echo ROOT_URL; ?>admins" class="btn btn-secondary">wstecz</a></div>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" id="form">

        <div class="row">
            <div class="col"><h4>WPROWADŹ DANE DLA WYBRANEGO MIESZKANIA</h4></div>
        </div>

        <div class="row justify-content-between">
            <div class="col-xs-8"><label for="year">podaj rok w formacie cyfr arabskich:</label></div>
            <div class="col-xs-3"><input type="number" class="inputInt" name="year" id="year"/></div>
        </div>


        <div class="row justify-content-between">
            <div class="col-xs-8"><label for="month">podaj miesiac w formacie cyfr arabskich:</label></div>
            <div class="col-xs-3"><input type="number" class="inputInt" name="month" id="month"/></div>
        </div>


        <div class="row justify-content-between">
            <div class="col-xs-8"><label for="flat">podaj nr mieszkania w formacie cyfr arabskich:</label></div>
            <div class="col-xs-3"><input type="number" class="inputInt" name="flat" id="flat"/></div>
            <input type="hidden" name="driver" value="particular"/>
        </div>


        <div class="row">
            <div class="col"><input type="button" class="btn btn-primary btn-block" value="pokaż" id="showThose"></div>
        </div>


        <div class="tableContainer">
            <table class="table">
                <thead>
                <tr>
                    <th>ciepla woda</th>
                    <th>zimna woda</th>
                    <th>prąd</th>
                <tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" name="hwaterUpdate" class="inputInt" id="hwaterUpdate"></td>
                    <td><input type="text" name="cwaterUpdate" class="inputInt" id="cwaterUpdate"></td>
                    <td><input type="text" name="electricityUpdate" class="inputInt"
                               id="electricityUpdate"></td>
                </tr>
                </tbody>
            </table>
        </div>
        <!--<input type="submit" class="button" name="submit" value="zatwierdź poprawki"/>-->
        <button type="submit" class="button btn btn-primary" name="submit">zatwierdź poprawki</button>
    </form>
</div>

<div class="modal fade" id="myModal3">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Uwaga!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                W podanym miejscu nie ma jeszcze danych, nie ma czego edytować
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo ROOT_URL; ?>assets/js_dest/admins/editParticular.js" type="text/javascript"></script>