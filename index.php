<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>St.Mary's Basilica Church</title>
        <link rel="icon" type="image/x-icon" href="images/bg-01.PNG">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- MATERIAL DESIGN ICONIC FONT -->
        <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
        
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <div class="wrapper">
            <div class="inner">
                <form method="post" action="request.php">     
                        <div>
                            <center><img src="images/bg-01.PNG" style="" alt="Paris"  height="100";></center>
                            <h3>St.Mary's Basilica Church Donation</h3>
                            
                        </div>
                    <label class="form-group">
                        <input type="text" class="form-control" name="name" required>
                        <span>Name :*</span>
                        <span class="border"></span>
                    </label>

                    <label class="form-group">
                        <input type="email" class="form-control" name="email" required>
                        <span for="">Email :*</span>
                        <span class="border"></span>
                    </label>

                    <label class="form-group">
                        <input type="text" class="form-control" name="mobile" pattern="\d{10}" required>
                        <span>Mobile :*</span>
                        <span class="border"></span>
                    </label>

                    <label class="form-group">
                        <textarea type="address" class="form-control" name="address" required></textarea>
                        <span>Address :*</span>
                        <span class="border"></span>
                    </label>

                    <label class="form-group">
                        <input type="text" class="form-control" name="amount" required>
                        <span>Donation Amount :*</span>
                        <span class="border"></span>
                    </label>


                   <label class="form-group" >
                        <textarea  class="form-control" name="comments" required></textarea>
                        <span>Donation Comments :</span>
                        <span class="border"></span>
                    </label>
                    <button name="save">Paynow 
                        <i class="zmdi zmdi-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>