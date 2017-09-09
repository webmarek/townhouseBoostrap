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
            <div class="col-ex-3"><!--<input type="number" class='inputInt' id="year" name="year">-->
                <select class='inputInt' id="year" name="year">
                    <option value="" disabled selected>Wybierz rok</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                </select>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-xs-8"><label for="month">podaj miesiac w formacie cyfr arabskich:</label></div>
            <div class="col-xs-3"><!--<input type="number" class='inputInt' id="month" name="month">-->
                <select class='inputInt' id="month" name="month">
                    <option value="" disabled selected>Wybierz miesiąc</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>

        </div>

        <div class="row">
            <button type="button" id="checkEach" class="btn btn-primary btn-block" data-toggle="tooltip"
                    data-placement="left"
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

<script src="<?php echo ROOT_URL; ?>assets/js_dest/admins/addMonthAll.js" type="text/javascript">
</script>