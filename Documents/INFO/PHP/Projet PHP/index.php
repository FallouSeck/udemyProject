<!DOCTYPE html>
<html>
    
    <head>
        <title>Contactez-me !</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initiale-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/style.css ">
        <script src="js/script.js"></>
    </head>
    
    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contactez-moi</h2>
            </div>
            <div class="row"></div>
                <div class="col-lg-12 col-lg-offset-1">
                    <form id="contact-form" method="post" role="form" action"">
                        <div class="row">

                            <div class="col-md-6">
                                <label for="firstname">Prénom<span class="blue"> *</span></label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value= >
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                    <label for="name">Nom<span class="blue"> *</span></label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Votre Nom" value=> >
                                    <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                    <label for="email">Email<span class="blue"> *</span></label>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Votre email" value= >
                                    <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                    <label for="phone">Téléphone</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value= >
                                    <p class="comments"</p>
                            </div>

                            <div class="col-md-12">
                                    <label for="message">Message<span class="blue"> *</span></label>
                                    <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4" value=></textarea>
                                    <p class="comments"</p>
                            </div>

                            <div class="col-md-12">
                                    <p class="blue"><strong>* Ces informations sont requises</strong></p>
                            </div>

                            <div class="col-md-12">
                                <input type="submit" class="button-1" value="Envoyer">
                            </div>

                        </div>


                    </form>
                </div>
        </div>
    </body>
    
</html>