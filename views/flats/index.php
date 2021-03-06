<?php
if (!isset($_SESSION['is_logged_in'])) {
    header('location: ' . ROOT_PATH);
    exit();
}

require_once('assets/php/Roman.php');

function drawTable($picture, $resource)
{

    echo "<br/><div><img src='" . ROOT_PATH . "assets/img_dist/flats/resources/" . $picture . ".png' class='resource img-thumbnail'></div><div class='tableContainer'><table class='table'><thead><tr>";

    echo "<th>miesiąc</th>";
    $month = (string)date("n");

    $monthsInYear = 12;

    for ($i = 0; $i < $monthsInYear; $i++) {

        echo "<th>" . Numbers_Roman::toNumeral($month) . "</th>";

        if ($month <= 11) {
            $month++;
        } elseif ($month === 12) {
            $month = 1;
        }
    }

    echo "</tr></thead><tbody><tr>";

    echo "<th scope='row'>stan</th>";
    for ($i = 0; $i < $monthsInYear; $i++) {
        echo "<th>" . $resource[$i] . "</th>";
    }

    echo "</tr></tbody></table></div>";
}

?>


<a href="#" id="scrollup" class="button scroll"><i class="fa fa-hand-o-up fa-2x" aria-hidden="true"></i></a>
<a href="#" id="scrolldown" class="button scroll"><i class="fa fa-hand-o-down fa-2x" aria-hidden="true"></i></a>


<div>

    <div class="dropdown ">
        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuMyData"
                data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            <a href="#myData">Moje dane</a>
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuMyData">
            <a class="dropdown-item" href="#counters">stan liczników wg. miesięcy</a>
            <a class="dropdown-item" href="#calculations">zużycie - obliczenia</a>
        </div>
    </div>


    <div class="dropdown ">
        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuShame"
                data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            <a href="#shame">Kącik wstydu</a>
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuShame">
            <a class="dropdown-item" href="#trash">ośmiecony trawnik</a>
            <a class="dropdown-item" href="#cart">pozostawiony wózek</a>
        </div>
    </div>

</div>


<div class="container">
    <br/>

    <h2 id="myData"><span class="hiddenMoustache">●▬▬▬▬๑</span> MOJE DANE <span class="hiddenMoustache">๑▬▬▬▬▬●</span>
    </h2>


    <h4 id="counters"><b>۩ STAN LICZNIKÓW WG. MIESIĘCY ۩</b></h4>

    <br/>

    <b>ciepła woda [m<sup>3</sup>]</b>
    <?php drawTable("hot", $viewmodel['hwater']); ?>

    <b>zimna woda [m<sup>3</sup>]</b>
    <?php drawTable("cold", $viewmodel['cwater']); ?>

    <b>prąd [kWh]</b>;
    <?php drawTable("thunder", $viewmodel['electricity']); ?>

    <br/>

    <h4 id="calculations"><b> ۩ OBLICZENIA ۩</b></h4>

    <table class='table'>
        <tbody>

        <tr>
            <td class='left'><b>cena metra sześciennego ciepłej wody</b>:</td>
            <td>36.00 zł/m<sup>3</sup></td>
        </tr>

        <tr>
            <td class='left'><b>cena metra sześciennego zimnej wody</b>:</td>
            <td>11.50 zł/m<sup>3</sup></td>
        </tr>

        <tr>
            <td class='left'><b>cena kilowatogodziny prądu</b>:</td>
            <td>0.77zł/kWh</td>
        </tr>

        <tr>
            <td class='left'><b>zużycie ciepłej wody w tym miesiącu</b>:</td>
            <td><?php echo $viewmodel['last_month_usage']['hwater']; ?> m<sup>3</sup></td>
        </tr>

        <tr>
            <td class='left'><b>zużycie zimnej wody w tym miesiącu</b>:</td>
            <td><?php echo $viewmodel['last_month_usage']['cwater']; ?> m<sup>3</sup></td>
        </tr>

        <tr>
            <td class='left'><b>zużycie prądu w tym miesiącu</b>:</td>
            <td><?php echo $viewmodel['last_month_usage']['electricity']; ?> kWh</td>
        </tr>

        <tr>
            <td class='left'><b>Twój koszt zużycia ciepłej wody wynosi</b>:</td>
            <td><?php echo $viewmodel['last_month_usage']['hwater']; ?> * <?php echo $viewmodel['prices']['hwater']; ?>
                zł/m<sup>3</sup>
                = <?php echo($viewmodel['last_month_usage']['hwater'] * $viewmodel['prices']['hwater']); ?> zł
            </td>
        </tr>

        <tr>
            <td class='left'><b>Twój koszt zużycia zimnej wody wynosi</b>:</td>
            <td><?php echo $viewmodel['last_month_usage']['cwater']; ?> * <?php echo $viewmodel['prices']['cwater']; ?>
                zł/m<sup>3</sup>
                = <?php echo($viewmodel['last_month_usage']['cwater'] * $viewmodel['prices']['cwater']); ?> zł
            </td>
        </tr>

        <tr>
            <td class='left'><b>Twój koszt zużycia prądu wynosi</b>:</td>
            <td><?php echo $viewmodel['last_month_usage']['electricity']; ?> kWh
                * <?php echo $viewmodel['prices']['electricity']; ?> zł/kWh
                = <?php echo($viewmodel['last_month_usage']['electricity'] * $viewmodel['prices']['electricity']); ?> zł
            </td>
        </tr>

        <tr>
            <td class='left'><b>Razem do zapłacenia</b>:</td>
            <td><?php echo($viewmodel['last_month_usage']['hwater'] * $viewmodel['prices']['hwater']); ?> zł
                + <?php echo($viewmodel['last_month_usage']['cwater'] * $viewmodel['prices']['cwater']); ?> zł
                + <?php echo($viewmodel['last_month_usage']['electricity'] * $viewmodel['prices']['electricity']); ?> zł
                = <?php echo(($viewmodel['last_month_usage']['hwater'] * $viewmodel['prices']['hwater']) + ($viewmodel['last_month_usage']['cwater'] * $viewmodel['prices']['cwater']) + ($viewmodel['last_month_usage']['electricity'] * $viewmodel['prices']['electricity'])); ?>
                zł
            </td>
        </tr>

        </tbody>
    </table>

    <br>

    <h2 id="shame"><b><span class="hiddenMoustache">●▬▬▬▬๑</span> KĄCIK WSTYDU <span
                    class="hiddenMoustache">๑▬▬▬▬▬●</span></b></h2>


    <h4 id="trash">۩ OŚMIECONY TRAWNIK ۩</h4>
    <br>
    <p class="text-justify">Cras rhoncus, augue ut feugiat commodo, mauris dui vestibulum tortor, ac pharetra est ligula
        vitae ipsum.
        Phasellus id iaculis lectus, ac efficitur dolor. Nam aliquet porttitor est, ut lobortis nisl. Etiam augue mi,
        luctus ut finibus at, eleifend et nulla. Vestibulum luctus urna est, id ornare ex malesuada id. Nam tincidunt
        mauris a finibus aliquam. Aliquam nunc massa, rhoncus congue odio eu, luctus maximus orci. Maecenas a iaculis
        dui, ac vehicula lacus. Vestibulum neque ipsum, finibus nec vestibulum ut, tempor nec purus. Morbi vulputate
        lobortis enim, et sodales urna rhoncus malesuada. Fusce dignissim risus ac tempus luctus. Vivamus sed pharetra
        neque. Praesent eget felis vulputate, tempus augue ut, fringilla nulla.</p>
    <br>
    <br>
    <br>
    <img src="<?php echo ROOT_URL; ?>assets/img_dist/flats/shame/trash.jpg" class="img-fluid img-thumbnail">
    <br>

    <h4 id="cart">۩ WÓZEK ۩</h4>
    <br>
    <p class="text-justify">Proin sagittis pulvinar placerat. Integer facilisis ante quam, sit amet fringilla orci
        luctus vitae. Sed
        convallis sapien ut velit vestibulum, ac lobortis sapien cursus. Nulla hendrerit dui nisi, nec aliquam ligula
        luctus at. Vivamus blandit sem sit amet diam scelerisque, a facilisis neque venenatis. Duis vestibulum eros id
        urna hendrerit, ut tempor lacus elementum. Aenean dignissim, nibh non volutpat tempor, urna sem sodales justo,
        nec imperdiet diam sem vitae libero. Etiam ornare nec nisl vitae sollicitudin. Phasellus elementum eu erat vel
        posuere. Ut viverra sem odio. Vivamus tempus arcu vitae dictum auctor. Vestibulum mollis nisl eu bibendum
        accumsan. Quisque tincidunt nec neque nec facilisis.</p>
    <br>

    <br>
    <br>
    <img src="<?php echo ROOT_URL; ?>assets/img_dist/flats/shame/cart.png" class="img-fluid img-thumbnail">
    <br>
</div>


<script src="<?php echo ROOT_URL; ?>assets/js_dest/flats/index.js" type="text/javascript"></script>




