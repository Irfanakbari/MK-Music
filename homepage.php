<?php
include 'data.php';
?>
<div class="parallax"></div>
<div class="container hehe">
    <div class="row row-cols-md-2 row-cols-sm-1">
        <div class="col-md-12 col-sm-12">
            <h3 class="onetitle">Recommended Music</h3>
        </div>
    </div>
    <div class="row recom row-cols-2 row-cols-sm-4 row-cols-md-5 g-5">
        <?php foreach ($data as $key => $value) : ?>
            <div class="col">
                <div id="<?= $value['mp3'] ?>" class="card bestmusic"><img style="background-size:cover;" height="150px" src="<?= $value['cover'] ?>" class="card-img-top" alt="...">
                    <div class="card-body" style=" padding-bottom:5px;">
                        <h5 class="card-title"> <?= $value['judul'] ?></h5>
                        <p class="card-text" style="color:blue;font-size:14px;white-space:normal;overflow: hidden;text-overflow:ellipsis;"><?= $value['name'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<br />
<div class="container slidertop huhu">
    <div class="row">
        <div class="col-md-6">
            <h3 class="onetitle">Music Video</h3>
        </div>
    </div>
    <div class="row slide row-cols-1 row-cols-sm-3">
        <div class="col">
            <div class="card">
                <iframe class="card-image-top" width="320" height="180" src="<?= $data[4]['yt'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title"><?= $data[4]['name'] ?> - <?= $data[4]['judul'] ?></h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <iframe class="card-image-top" width="320" height="180" src="<?= $data[7]['yt'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title"><?= $data[7]['name'] ?> - <?= $data[7]['judul'] ?></h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <iframe class="card-image-top" width="320" height="180" src="<?= $data[5]['yt'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title"><?= $data[5]['name'] ?> - <?= $data[5]['judul'] ?></h5>
                </div>
            </div>
        </div>


    </div>
</div>
<div class="listmusic container">
    <h5 class="onetitle">List Musik</h5>
    <ul style="width:100%">
        <?php $id = 1; ?>
        <?php foreach ($data as $key => $value) : ?>
            <li>
                <div id="list-<?= $id ?>" class="musicview"><img class="msccv" src="<?= $value['cover'] ?>" alt="" />
                    <div class="musicinfo">
                        <h5 class="ngabtitle"><?= $value['name'] ?> - <?= $value['judul'] ?></h5>
                        <p><?= $value['vokalis'] ?></p>
                    </div>
                </div>
            </li>
            <?php $id++; ?>
        <?php endforeach; ?>
    </ul>
</div>
<br><br>
<div class="container" id="ourTeam">
    <div class="row">
        <div class="col-md-6">
            <h3 class="onetitle">Our Team</h3>
            <h6 style="color: white;">Move your mouse over the image below:</h6>
            <br>
        </div>
    </div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 g-5">
        <?php $data = array('Chindy Birgita Sihotang', 'Yogi Piranda Limbong', 'Jimmi Eduard Simangunsong', 'Irfan Akbari Habibi', 'Cheliza Sriayu Simarsoit'); ?>
        <?php $nim = array('201401111', '201401121', '201401106', '201401086', '201401121') ?>
        <?php $img = array('chindy.jpeg', 'yogi.jpeg', 'jimmi.jpeg', 'ftt.jpg', 'cea.jpeg') ?>
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="col ">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="assets/img/<?= $img[$i] ?>" alt="Avatar" style="">
                        </div>
                        <div class="flip-card-back">
                            <h2><?= $data[$i] ?></h2>
                            <p><?= $nim[$i] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
        <div class="col ">
            <div class="flip-card">
                <div class="flip-card-inners">
                    <div class="flip-card-front">
                        <img src="assets/img/estetik.jpeg" alt="Avatar" style="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <footer id='playbar' class="fixed-bottom">
        <div id='buttons'>
            <button id='prev'>
                <i class="fas fa-backward"></i>
            </button>
            <button id='play'>
                <i class="fas fa-play"></i>
            </button>
            <button id='next'>
                <i class="fas fa-forward"></i>
            </button>
        </div>

        <div class="progress">
            <div class="progress-bar" style="" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </footer>
    <footer id='playbars' class="fixed-bottom">
        <div id='buttons'>
            <button id='prev2'>
                <i class="fas fa-backward"></i>
            </button>
            <button id='play2'>
                <i class="fas fa-play"></i>
            </button>
            <button id='next2'>
                <i class="fas fa-forward"></i>
            </button>
        </div>

        <div class="progress progresss">
            <div class="progress-bar progress-bars" style="" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </footer>
    <script src="assets/js/player.js"></script>
    <script>
        // document ready
        $(document).ready(function() {
            setTimeout(function() {
                $('#loader-wrapper').fadeOut(700);
            }, 1500);
        });
    </script>