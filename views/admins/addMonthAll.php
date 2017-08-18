<?php

if (!isset($_SESSION['is_logged_in_admin'])) {
    header('location: ' . ROOT_PATH);
    exit();
}

//var_dump($viewmodel);
?>

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


<div id="container2">
    <div><a href="<?php echo ROOT_URL; ?>admins" class="button">wstecz</a></div>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <td colspan="4">wprowadź dane</td>
            <tr>

            <tr>
                <td colspan="2">podaj rok</td>
                <td colspan="2">w formacie cyfr arabskich:<input type="text" class='inputInt' id="year" name="year">
                </td>
            <tr>

            <tr>
                <td colspan="2">podaj miesiac</td>
                <td colspan="2">w formacie cyfr arabskich:<input type="text" class='inputInt' id="month" name="month">
                </td>
            <tr>

            <tr>
                <td colspan="4"><input type="button" id="checkEach" value="sprawdź każdy" class="button"
                                       title="sprawdź każdą krotkę oddzielnie - zajęte już pola zmienią swój kolor tła na jasnoczerwony">
                </td>
            <tr>

            <tr>
                <td>numer mieszkania</td>
                <td>ciepła woda</td>
                <td>zimna woda</td>
                <td>prąd</td>
            <tr>

                <?php foreach ($viewmodel['flatNrs'] as $flat): ?>


            <tr>
                <td> <?php echo $flat; ?> :</td>
                <td><input type='text' class='inputInt resource' data-resource='hwater' data-flat='<?php echo $flat; ?>'
                           name='<?php echo "hwater", $flat; ?>'></td>
                <td><input type='text' class='inputInt resource' data-resource='cwater' data-flat='<?php echo $flat; ?>'
                           name='<?php echo "cwater", $flat; ?>'></td>
                <td><input type='text' class='inputInt resource' data-resource='electricity'
                           data-flat='<?php echo $flat; ?>' name='<?php echo "electricity", $flat; ?>'></td>
            </tr>


            <?php endforeach ?>

        </table>
        <input type="submit" name="submit" value="zatwierdź" class="button">

    </form>
</div>


<div id="hasNotYet" style="margin-bottom: 20em;"><p class="alertParagraph">nie ma jeszcze wpisów w danym miesiacu danego
        roku</p></div>

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