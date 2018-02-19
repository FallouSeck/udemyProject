<!DOCTYPE html>
<html>
<head>
    <title>CV Fadel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavBar">
                <ul class="nav navbar-nav">
                    <li><a href="#about">Moi</a></li>
                    <li><a href="#skills">Compétences</a></li>
                    <li><a href="#experience">Expérience</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#recommandations">Recommandations</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <section id="about" class="container-fluid">
        <div class="col-xs-8 col-md-4 profile-picture">
            <img src="images/moi.jpg" alt="Fadel" class="img-circle">
        </div>
        <div class="heading">
            <h1>Hello c'est moi Fadel</h1>
            <h3>Développeur Web</h3>
            <a href="docs/CV_Fadel.doc" class="button1">Télécharger CV</a>
        </div>
    </section>

    <section id="skills">
        <div class="blue-divider"></div>
        <div class="heading">
            <h2>Compétences</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>HTML 85%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>CSS 85%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            <h5>JAVASCRIPT 90%</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>JQUERY 85%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            <h5>BOOTSTRAP 80%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                            <h5>ANGULAR 75%</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experience">
        <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Expérience Professionelle</h2>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>GOOGLE</h3>
                                <h4>Développeur Web Sénior</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time"></small>2013-2015</p>
                            </div>
                            <div class="timeline-body">
                                <p>Ajout de la possibilité d'écouter une traduction dans Google Translate</p>
                                <p>Développement de Google Suggest en mode Offline</p>
                                <p>Nouveau design du player de Youtube adapté au mobile</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>FACEBOOK</h3>
                                <h4>Développeur Web</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time"></small>2010-2013</p>
                            </div>
                            <div class="timeline-body">
                                <p>Développement du bouton Share pour les applis Web mobile</p>
                                <p>Lancement automatique des vidéos en mode mute depuis la Timeline</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>TWITTER</h3>
                                <h4>Développeur Web Junior</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time"></small>2007-2010</p>
                            </div>
                            <div class="timeline-body">
                                <p>Création et Développement du Retweet pour l'appli Web</p>
                                <p>Intégration des vidéos sur les applis web mobile</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </section>

    <section id="education">
        <div class="container">
            <div class="blue-divider"></div>
            <div class="heading">
                <h2>Education</h2>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="education-block">
                        <h5>2002 - 2006</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Ecole Polytechnique Paris</h3>
                        <h4>Diplôme d'ingénieur informatique</h4>
                        <div class="blue-divider"></div>
                        <p>Intelligence Artificielle</p>
                        <p>Système d'informations</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="education-block">
                        <h5>2007</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Apprendre-a-coder.com</h3>
                        <h4>Formation online "Développeur Web"</h4>
                        <div class="blue-divider"></div>
                        <p>HTML/CSS, Javascript, JQuery</p>
                        <p>Responsive Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Portfolio</h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a class="thumbnail" href="http://www.facebook.com" target="_blank">
                        <img src="images/facebook-share.png" alt="facebook share">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="thumbnail" href="http://www.google.com" target="_blank">
                        <img src="images/google-translate.png" alt="google translate">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="thumbnail" href="http://www.twitter.com" target="_blank">
                        <img src="images/twitter-video.png" alt="twitter video">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a class="thumbnail" href="http://www.google.com" target="_blank">
                        <img src="images/youtube.png" alt="youtube">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="thumbnail" href="http://www.twitter.com" target="_blank">
                        <img src="images/twitter-retweet.png" alt="twitter retweet">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="thumbnail" href="http://www.facebook.com" target="_blank">
                        <img src="images/facebook-video.png" alt="facebook video">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="recommandations">
        <div class="container">
            <div class="blue-divider"></div>
            <div class="heading">
                <h2>Recommandations</h2>
            </div>
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h3>"Fadel t'es le meilleur! Merci pour tout..."</h3>
                        <h4>Larry Page, Google Co-Founder</h4>
                    </div>
                    <div class="item">
                        <h3>"Merci Fadel de m'avoir appris à coder... Tout ça c'est grâce à toi!"</h3>
                        <h4>Mark Zuckerberg, Facebook Founder and CEO</h4>
                    </div>
                    <div class="item">
                        <h3>"L'esprit le plus créatif que j'ai vu de toute ma vie..."</h3>
                        <h4>Jack Dorsey, Twitter Founder and CEO</h4>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
             <div class="divider"></div>
             <div class="heading">
                 <h2>Contact</h2>
             </div>

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                     <form id="contact-form" method="post" action="" role="form">
                         <div class="row">
                             <div class="col-md-6">
                                 <label for="firstname">Prénom <span class="yellow">*</span></label>
                                 <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom">
                                 <p class="comments"></p>
                             </div>
                             <div class="col-md-6">
                                 <label for="name">Nom <span class="yellow">*</span></label>
                                 <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
                                 <p class="comments"></p>
                             </div>
                             <div class="col-md-6">
                                 <label for="email">Email <span class="yellow">*</span></label>
                                 <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email">
                                 <p class="comments"></p>
                             </div>
                             <div class="col-md-6">
                                 <label for="phone">Téléphone</label>
                                 <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone">
                                 <p class="comments"></p>
                             </div>
                             <div class="col-md-12">
                                 <label for="message">Message <span class="yellow">*</span></label>
                                 <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                                 <p class="comments"></p>
                             </div>
                             <div class="col-md-12">
                                 <p class="yellow"><strong>* Ces informations sont requises.</strong></p>
                             </div>
                             <div class="col-md-12">
                                 <input type="submit" class="button1" value="Envoyer">
                             </div>
                         </div>
                     </form>
                 </div>
            </div>
         </div>
    </section>

    <footer class="text-center">
        <a href="#about">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <h5>© 2016 APPRENDRE-A-CODER.COM</h5>
    </footer>

</body>
</html>
