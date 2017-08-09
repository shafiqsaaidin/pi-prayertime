<?php 
    $url = file_get_contents('zone.json');

    $json = json_decode($url, true);

    $johor = $json['JOHOR'];
    $kedah = $json['KEDAH'];
    $kelantan = $json['KELANTAN'];
    $melaka = $json['MELAKA'];
    $n9 = $json['NEGERI_SEMBILAN'];
    $pahang = $json['PAHANG'];
    $perlis = $json['PERLIS'];
    $penang = $json['PULAU_PINANG'];
    $perak = $json['PERAK'];
    $sabah = $json['SABAH'];
    $selangor = $json['SELANGOR'];
    $kl = $json['KUALA LUMPUR'];
    $putrajaya = $json['PUTRAJAYA'];
    $sarawak = $json['SARAWAK'];
    $terengganu = $json['TERENGGANU'];
    $labuan = $json['LABUAN'];

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            .warna {
                color: blue;
                font-size: 18px;
                font-weight: 200;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Senarai Kod Kawasan</h1>
                <p>Laman ini menyenaraikan Kod kawasan yang terdapat di seluruh negeri di Malaysia.</p>
            </div>
            <h2>JOHOR</h2>
            <ul class="list-group">
                <?php foreach($johor as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul>
            <h2>KEDAH</h2>
            <ul class="list-group">
                <?php foreach($kedah as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul>
            <h2>KELANTAN</h2>
            <ul class="list-group">
                <?php foreach($kelantan as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul>
            <h2>MELAKA</h2>
            <ul class="list-group">
                <?php foreach($melaka as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul> 
            <h2>NEGERI SEMBILAN</h2>
            <ul class="list-group">
                <?php foreach($n9 as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul> 
            <h2>PAHANG</h2>
            <ul class="list-group">
                <?php foreach($pahang as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul> 
            <h2>PERLIS</h2>
            <ul class="list-group">
                <?php foreach($perlis as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul> 
            <h2>PULAU PINANG</h2>
            <ul class="list-group">
                <?php foreach($penang as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul> 
            <h2>PERAK</h2>
            <ul class="list-group">
                <?php foreach($perak as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul> 
            <h2>SABAH</h2>
            <ul class="list-group">
                <?php foreach($sabah as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul> 
            <h2>SELANGOR</h2>
            <ul class="list-group">
                <?php foreach($selangor as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul> 
            <h2>KUALA LUMPUR</h2>
            <ul class="list-group">
                <?php foreach($kl as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul> 
            <h2>PUTRAJAYA</h2>
            <ul class="list-group">
                <?php foreach($putrajaya as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul> 
            <h2>SARAWAK</h2>
            <ul class="list-group">
                <?php foreach($sarawak as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul>
            <h2>TERENGGANU</h2>
            <ul class="list-group">
                <?php foreach($terengganu as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            <h2>LABUAN</h2>
            <ul class="list-group">
                <?php foreach($labuan as $x => $y): ?>
                    <li class="list-group-item"><?php echo "<span class='warna'>".$x."</span>"."-------".$y; ?></li>
                <?php endforeach ?>
            </ul>             
        </div>
    </body>
</html>