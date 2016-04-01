<?php include_once "header.php"; ?>

        <!-- Page Header 
        <div class="row">
            <div class="col-lg-12">
                <h1  style="text-align:center; color: #222121; font-family:Tale ; color:#3c8dbc;" >Login</h1>
            </div>
        </div>
        /.row -->

        <!-- Projects Row -->


        <div class="col-md-6 portfolio-item" style="width:100%">
            <h3 style="text-align:left; font-family:Tale;">
                Nearby
            </h3>
            <?php
            foreach ($offers as $offer):
            ?>
            <div class="box box-primary">
                <div class="offers">
                    <p class="offersText" style="display:inline;"><?=$offer->desc?></p>
                    <p style="float:right; font-size:20px; margin-right:10px;"><?=$offer->name?></p><br />
                    <p class="offersText" style="font-size:15px;"> Valid until <?=$offer->expires?></p>
                    <p class="offersText" style="font-size:15px;"> Available for <?=$offer->usagetimes?> times!</p>
                </div>
            </div><!-- /.box -->
            <?php
            endforeach;
            ?>

        </div>
        <div class="col-md-6 portfolio-item" style="width:100%">
            <h3 style="text-align:left; font-family:Tale;">
                Exclusive Offers
            </h3>
            <div class="box box-primary">
                <div class="offers">
                    <p class="offersText" style="display:inline;">2 Pepsi + 1 for Free</p>
                    <p style="float:right; font-size:20px; margin-right:10px;"> Carrefour</p><br />
                    <p class="offersText" style="font-size:15px;"> 15 mins ago</p>
                    <p class="offersText" style="font-size:15px;"> Code: 5xx32</p>
                </div>
            </div><!-- /.box -->
            <div class="box box-primary">
                <div class="offers">
                    <p class="offersText" style="display:inline;">Sony Bravia LCD</p>
                    <p style="float:right; font-size:20px; margin-right:10px;"> Ragab Sons</p><br />
                    <p class="offersText" style="font-size:15px;"> 1 day ago</p>
                    <p class="offersText" style="font-size:15px;"> Code: 95x32</p>
                </div>
            </div>


        </div>
       
        <p style="text-align:center; margin-top:18px; margin-bottom:15px;">Copyright &copy; MMW</p> 

<?php include_once "footer.php"; ?>