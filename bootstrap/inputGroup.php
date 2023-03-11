

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <title>Bootstrap Buttons</title>

        <style type="text/css">
            
        </style>
    </head>

    <body>
        
        <div class="container">
            
           <form method="POST">
            
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" name="twitter" class="form-control" placeholder="Usuário"/>
                </div>

                </br>
                
                <div class="input-group input-group-lg" >
                    <input type="email" name="email" class="form-control" placeholder="E-mail"/>
                    <div class="input-group-append">
                        <span class="input-group-text">@gmail.com</span>
                    </div>
                </div>

                <br/>

                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text">R$</span>
                    </div>
                    <input type="text" name="money" class="form-control" placeholder="$$$"/>
                    <div class="input-group-append">
                        <span class="input-group-text">,00</span>
                    </div>
                </div>

           </form>

        </div>

        <?php 
            // if(!empty($_POST['twitter'])){
            //     $twitter = $_POST['twitter'];
            //     $url = "https://twitter.com/".$twitter;
            //     echo "Seu twitter: ".$url;
            //     header('Location: '.$url);
            // }
            // else{
            //     echo "-->Twetter inválido!";
            // }
        ?> 

        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>