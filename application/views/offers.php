<?php
include_once "header.php";
?>

           

        <!-- Page Header 
        <div class="row">
            <div class="col-lg-12">
                <h1  style="text-align:center; color: #222121; font-family:Tale ; color:#3c8dbc;" >Login</h1>
            </div>
        </div>
        /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 portfolio-item">
                <h3 style="text-align:left; font-family:Tale;">
                    Add Offer
                </h3>
                <div class="box box-primary">
                   <form role="form" name="offer" onsubmit="return ValidatePlaceOffer();" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                 <div style="height:34px; display:inline; margin-right:5px; font-family:Helvetica; ">Offer title </div>
                                 <input type="text" name="name" class="form-control" id="till" name="name" placeholder="Enter title of the offer" style="display:inline; width:30%">
                                <span id="intervalValid"></span> 
                            </div>
                            
                            <div class="form-group">
                                <div style="height:34px; display:inline; margin-right:5px; font-family:Helvetica; ">Offer Details </div>
                                <input type="text" name="description" class="form-control" id="details" name="details" placeholder="Enter offer details" style="width:70%; display:inline;">
                                <span id="detailsValid"></span> 
                               
                            </div>
                            <div class="form-group">
                                 <div style="height:34px; display:inline; margin-right:5px; font-family:Helvetica; ">Valid till </div>
                                 <input type="text" name="expires" class="form-control" id="till" placeholder="Enter time interval" style="display:inline; width:30%">
                                <span id="intervalValid"></span> 
                            </div>
                            
                            <div class="form-group">
                                 <div style="height:34px; display:inline; margin-right:5px; font-family:Helvetica; ">Usage Times </div>
                                 <input type="text" name="usagetimes" class="form-control" id="till" placeholder="Enter number of usages" style="display:inline; width:30%">
                                <span id="intervalValid"></span> 
                            </div>
                            
                            <div class="dropdown" style="display:inline">
                                    <button class="btn btn-default dropdown-toggle" name="unitDropdown" type="button" id="dropdownMenu" data-toggle="dropdown" aria-expanded="true">
                                    <span id="timeType">Hours/Days</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="Unit('Hours')">Hours</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="Unit('Days')">Days</a></li>
                                </ul>
                                <span id="intervalChooseValid"></span> 
                            </div>
                            <input type="submit" class="btn btn-success" value="Submit" style=" display:block; margin-top:10px;" name="addoffer">  
                           
                           
                           
                        </div><!-- /.box-body -->
                       
                    </form>
                </div><!-- /.box -->
               

            </div>
            
            </div>
        <?php
        if (!empty($offers))
        {
            ?>
        <div class="col-md-6 portfolio-item" style="width:100%">
            <h3 style="text-align:left; font-family:Tale;">
                Your Current Offers
            </h3>
            <form action="" method="post">
            <?php foreach ($offers as $offer):
                
            
            ?>
            <div class="box box-primary">
                <div class="offers">
                    <p class="offersText" style="display:inline;"><?=$offer->desc?></p>
                    <p style="float:right; font-size:20px; margin-right:10px;"> <?=$offer->name?></p><br />
                    <p class="offersText" style="font-size:15px;"> Valid until: <?=$offer->expires?></p>
                    <p class="offersText" style="font-size:15px;"> Valid for: <?=$offer->usagetimes?> times</p>
                    <p class="offersText" style="font-size:15px;"><input type="checkbox" name="checkID[]" value="<?=$offer->id?>"> Delete</p>
                </div>
            </div><!-- /.box -->        
             <?php
             endforeach;   
             ?>
            <input type="submit" value="Delete selected offers?" name="deleteoffers">
            </form>
        </div>
       <?php
        }
        else
        {
          ?>
        <div class="col-md-6 portfolio-item" style="width:100%">
            <h3 style="text-align:left; font-family:Tale;">
                You currently have no offers! Add some!
            </h3>
        </div>
        <?php
        }
        ?>
        <p style="text-align:center; margin-top:18px; margin-bottom:15px;">Copyright &copy; MMW</p>      
    </div>
    <!-- /.container -->

    
<?php
include_once "footer.php";
?>