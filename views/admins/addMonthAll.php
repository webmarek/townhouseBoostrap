<?php

if (!isset($_SESSION['is_logged_in_admin'])) {
    header('location: ' . ROOT_PATH);
    exit();
}

//var_dump($viewmodel);
?>


<div id="container">
    <div class="text-left"><a href="<?php echo ROOT_URL; ?>admins" class="btn btn-secondary">wstecz</a></div>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

        <div class="row">
            <div class="col"><h4>WPROWADŹ DANE DLA WSZYSTKICH</h4></div>
        </div>

        <div class="row justify-content-between">
            <div class="col-xs-8"><label for="year">podaj rok w formacie cyfr arabskich:</label></div>
            <div class="col-ex-3"><input type="number" class='inputInt' id="year" name="year"></div>
        </div>

        <div class="row justify-content-between">
            <div class="col-xs-8"><label for="month">podaj miesiac w formacie cyfr arabskich:</label></div>
            <div class="col-xs-3"><input type="number" class='inputInt' id="month" name="month"></div>

        </div>

        <div class="row">
            <button type="button" id="checkEach" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="left"
                    title="sprawdź każdą krotkę oddzielnie - zajęte już pola zmienią swój kolor tła na jasnoczerwony">
                sprawdź każdy
            </button>

            <!--<input type="button" id="checkEach" value="sprawdź każdy" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="left"
                   title="sprawdź każdą krotkę oddzielnie - zajęte już pola zmienią swój kolor tła na jasnoczerwony">-->
        </div>


        <div class="tableContainer">
            <table class="table">
                <thead>
                <tr>
                    <th>numer mieszkania</th>
                    <th>ciepła woda</th>
                    <th>zimna woda</th>
                    <th>prąd</th>
                <tr>
                </thead>
                <tbody>
                <?php foreach ($viewmodel['flatNrs'] as $flat): ?>

                    <tr>
                        <th scope="row"> <?php echo $flat; ?> :</th>
                        <td><input type='number' class='inputInt resource' data-resource='hwater'
                                   data-flat='<?php echo $flat; ?>'
                                   name='<?php echo "hwater", $flat; ?>'></td>
                        <td><input type='number' class='inputInt resource' data-resource='cwater'
                                   data-flat='<?php echo $flat; ?>'
                                   name='<?php echo "cwater", $flat; ?>'></td>
                        <td><input type='number' class='inputInt resource' data-resource='electricity'
                                   data-flat='<?php echo $flat; ?>' name='<?php echo "electricity", $flat; ?>'></td>
                    </tr>

                <?php endforeach ?>
                </tbody>


            </table>
        </div>
        <input type="submit" name="submit" value="zatwierdź" class="button">

    </form>
</div>


<div class="modal fade" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Uwaga!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                W tym fotmularzu można wpisywać jedynie cyfry!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Uwaga!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="afterAutoCheckResult">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
            </div>
        </div>
    </div>
</div>

<div id="hasAlready"></div>

<script src="<?php echo ROOT_URL; ?>assets/js/admins/addMonthAll.js" type="text/javascript">
</script>