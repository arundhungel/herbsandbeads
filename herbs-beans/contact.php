<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php include 'includes/head.php'; ?>


    </head>
    <body class="contact">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="center">
            <!-- Header Starts -->
            <?php include('includes/header.php') ?>
            <!-- Header Ends -->

            <!-- Nav Starts -->
           
           <?php include 'includes/nav.php'; ?>
        <!-- Nav Ends -->

        <!-- Banner Starts -->

            <div class="banner">

                <div>

                    <h3>Drop us a Message :</h3>
                    <form>
                        <div class="clearfix">
                            <i><ins>*</ins> <span>Name :</span></i> 
                            <input type="text" name="Full name:" placeholder="Full name :"> 
                            
                        </div>
                        <div class="clearfix">
                             <i><ins>*</ins> <span>Email :</span></i>
                            <input type="text" name="E-mail:" placeholder="E-mail :">
                            
                        </div>
                       
                        
                        <div class="clearfix">
                            <i><ins>*</ins> <span>Messages :</span></i> 
                            <textarea placeholder="Message :" rows="6"></textarea>
                        </div>
                        
                        <div>
                            <input type="submit" class="btn" value="Submit" >
                        </div>
                        

                    </form>
                </div>
                <div>
                    <h3>Location :</h3>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.0492659251966!2d85.31181918400584!3d27.711201211890817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fde7596d7b%3A0xb8cd51a6fd6feb99!2sHerbs+And+Beads+Store!5e0!3m2!1sen!2snp!4v1468900295694" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                 </div>
           
            </div>

        <!-- Banner Ends -->

            <!-- Footer Starts -->
            <?php include('includes/footer.php') ?>

            </div>
            <!-- Footer Ends -->
        

        <?php include 'includes/end-script.php'; ?>

    </body>
</html>
