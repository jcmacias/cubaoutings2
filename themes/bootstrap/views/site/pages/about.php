<div class="container">
    <?php
    /* @var $this SiteController */

    $this->pageTitle = Yii::app()->name . ' - About';
    $this->breadcrumbs = array(
        'About',
    );
    ?>
    <!--SECTION ABOUT US -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text"> <?php echo Yii::t('app', 'About Cubaoutings'); ?></h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            <?php echo Yii::t('app', 'Get to know who we are.'); ?>
        </h6>

    </div>
    <!--    <div class="row" style="padding-left: 169px;">-->
    <!--        --><?php //echo CHtml::image(Yii::app()->baseUrl . '/images/pic_portada/about.jpg', 'Cuba',array('class'=>'img-rounded','style'=>'width:843px;padding-top:-102px;'));?>
    <!--    </div>-->
    <!--    <hr class="featurette-divider">-->
    <div class="row">
        <div class="col-lg-7" style="/*padding-left: 260px;*/">
            <?php if (Yii::app()->getLanguage() == 'en') { ?>
                <p>
                    <b>Cubaoutings</b> is a tours company based in Cuba that mainly develops personalized sightseeing
                    tours and excursions from Varadero to Havana and the rest of the Cuban historical or natural sites.
                    Since 2012, We show people from all over the world our beautiful country with its constant changes.
                    With CubaOutings, you have the opportunity to know Cuba as a local, which is the best way to explore
                    Cuba. We give you the chance to create your own program, or just let us show you our country. We
                    have developed a group of tours covering the whole western part of Cuba, but a range of products and
                    services can be offered to tailor to your particular requirements.
                </p>
                <p>
                    <b>Mission Statement:</b>
                    We are a team of excellent tourism professionals ready to satisfy your needs regarding personalized
                    tours to interesting places throughout Cuba with a quality service, safety, comfort, while promoting
                    responsible tourism in the respect of environment, as well as cultural and religious differences.
                </p>
                <p>
                    <b>Meet our team:</b>
                    CubaOutings’ team consists of a very carefully selected group of tour guides and drivers that have
                    been working in the tourism business for years. Our team is headed by Gloria Machado León and Felix
                    Michel Navarro, both graduated from the University of Matanzas with vast experience and a favourable
                    image in the tourism industry. We only employ fully qualified tour guides with vast knowledge,
                    either of the language or any other topic, such as history, politics, cigars, rum, coffee or
                    anything that would be worth knowing.
                </p>
                <p>
                    <b>Our Service:</b>
                    We strive to make your outing in Cuba more than just a "vacation", by making every step of your
                    adventure authentic and life-changing.
                    Our team has achieved a great reputation for the services we provide. Now our clients have the
                    opportunity to experience a personalized travel around Cuba. We can make specialized programs to
                    meet your needs, whether you are independent travelers, couples or groups.<br>
                    We have comfortable and air conditioned cars of different sizes. We also give the possibility to go
                    in classic cars, and feel like being back in the 50s. All these cars are certified by the State
                    Insurance Company to guarantee security and efficiency.<br>
                    We also assure you all the support needed when traveling. We offer transfers from /to any city or
                    airport. We can arrange home stay accommodations in most of the cities. They are by far the best
                    accommodations in Cuba when it comes to providing an authentic interactive experience. Our
                    accommodations are selected for their cleanliness, comfort, convenient location, safety, local
                    atmosphere, and customer service.<br>
                    Lastly, and above all, here are we, ready to give you a hand and organize any interesting and
                    exciting activity that could fill your time in Cuba with pleasure.
                    <b>Book it now!!!!</b>
                </p>

            <?php }
            if (Yii::app()->getLanguage() == 'fr') {
                ?>
                <p>
                    <b>Cubaoutings</b> est un groupe d’organisation de circuits basé à Cuba et qui développe
                    principalement des visites guidées et des excursions personnalisées de Varadero à La Havane, ainsi
                    qu’à travers le reste des sites historiques ou naturels de Cuba. Depuis 2012, nous montrons aux gens
                    de toute part dans le monde notre beau pays avec ses changements constants. Avec CubaOutings, vous
                    avez la possibilité de connaître Cuba comme vous si vous étiez d’ici ; meilleure façon d'explorer
                    Cuba. Nous vous offrons la possibilité de créer votre propre programme, ou tout simplement
                    laissez-nous vous montrer notre pays. Nous disposons d’une panoplie de circuits couvrant toute la
                    zone occidentale de Cuba, et même temps, nous nous plions à vos exigences au cas où vous auriez de
                    préférences particulières en modification à nos offres.
                </p>
                <p>
                    <b>Notre Mission</b>
                    Nous sommes une équipe d’excellents professionnels du tourisme disposés à satisfaire vos besoins en
                    matière de visite guidée personnalisée de sites touristiques à travers Cuba avec un service de
                    qualité, garantie de sécurité, de confort, tout en promouvant un tourisme responsable dans le
                    respect de l’environnement, des différences culturelles et religieuses.
                </p>
                <p>
                    <b>Rencontrez notre équipe:</b>
                    CubaOutings se compose d'un groupe très soigneusement sélectionné de guides touristiques et de
                    chauffeurs ayant fait leur preuve dans le secteur touristique durant des années.En tête de l’équipe
                    se trouvent Gloria Machado León et Felix Michel Navarro, tous deux des spécialistes dotés d’un très
                    bon bagage et jouissant d’une bonne image. Nous n'employons que des guides qualifiés avec de vastes
                    connaissances, aussi bien de la langue que de tout autre sujet : l'histoire, la politique, les
                    cigares, le rhum, le café ou toute autre information utile.
                </p>
                <p>
                    <b>Notre Service:</b>
                    Nous nous efforçons de faire de vos sorties à Cuba plus que de simples «vacances» en les rendant en
                    en des aventures authentiques qui vous marque positivement.<br>
                    Notre équipe a acquis une grande réputation pour le service que nous offrons. Maintenant, nos
                    clients ont la possibilité de découvrir un Voyage personnalisé à travers Cuba. Nous pouvons élaborer
                    des programmes spécialisés pour répondre à vos besoins, que vous soyez des voyageurs indépendants,
                    des couples ou des groupes.<br>
                    Nous disposons de voitures confortables et climatisées de différentes tailles. Nous vous donnons
                    également la possibilité d'aller dans les voitures classiques, et vous donner la sensation de faire
                    un tour vers les années 50. Tous ces véhicules sont certifiés parla Société d'assurance publique
                    pour garantir leur sécurité et l'efficacité.<br>
                    Nous vous assurons également tout le soutien nécessaire pour votre voyage. Nous offrons le transfert
                    depuis/à toute ville ou aéroport. Nous pouvons organiser de l’hébergement dans des maisons de séjour
                    sur notre chemin durant l’excursion. C‘est d’ailleurs le meilleur type d’hébergement à Cuba quand il
                    s'agit de faire vivre une authentique et interactive expérience. Nos logements sont sélectionnés de
                    par leur propreté, leur confort, leur emplacement idéal, leur sécurité, l'atmosphère locale, et le
                    service à la clientèle.<br>
                    Enfin, et surtout, nous voici, prêts, à vous donner un coup de main et à organiser une activité
                    intéressante et passionnante qui pourrait galvaniser de plaisir votre séjourà Cuba.
                    <b>Réservez dès maintenant!!!!</b>
                </p>

            <?php }
            if (Yii::app()->getLanguage() == 'it') {
                ?>
                <p>
                    <b>Cubaoutings</b> è un tuor operator con sede a Cuba che per lo più sviluppa visite guidate
                    personalizzate da Varadero a L’Avana ed il resto dei siti storici e naturali di Cuba. Dal 2012 noi
                    mostriamo ai turisti provenienti da tutto il mondo il nostro bel paese con tutti i suoi quotidiani
                    cambiamenti. Con CO avrete l’opportunità di conoscere Cuba come se foste del posto che poi è il
                    miglior modo di esplorare Cuba. Vi daremo la possibilità di creare il vostro programma di visite
                    guidate oppure lasciateci il compito di farlo per voi. Abbiamo sviluppato numerosi tours che coprono
                    l’intera parte orientale di Cuba ed in egual modo disponiamo di prodotti e servizi per soddisfare le
                    vostre particolari richieste; un servizio “su misura” per voi.
                </p>
                <p>
                    <b>Nostra Missione</b>
                    Siamo un team di professionisti del turismo pronti a soddisfare i vostri bisogni in termini di
                    visite guidate personalizzate in posti interessanti attraverso tutta l’isola con qualità, servizio,
                    sicurezza e comfort. Al contempo promuoviamo un turismo sostenibile in termini di natura e
                    rispettoso delle differenze culturali e religiose.
                </p>
                <p>
                    <b>Conosce nostro équipe:</b>
                    Il team di CO è composto da un gruppo qualificato di guide ed autisti che hanno lavorato nel campo
                    del turismo per tanti anni. Il ns team è diretto da Gloria Machado Leòn e FMN, entrambi laureati
                    all’Università di Matanzas con lunga esperienza ed una ottima reputazione nell’industria del
                    turismo. Noi impieghiamo solo qualificate guide turistiche con una lunga esperienza sia intermini di
                    conoscenza delle lingue che dei temi turistici di Cuba come ad esempio storia, politica, sigari,
                    rum, caffe o qualunque altro per cui ne valga la pena.
                </p>
                <p>
                    <b>Nostro Servizio:</b>
                    Ci sforziamo di rendere la vostra permanenza a Cuba più di una “vacanza”, accompagnandovi passo
                    passo nella vostra avventura autentica e che cambia la vita. Il nostro team ha raggiunto una elevata
                    reputazione per tutti quei servizi che forniamo. Ora i nostri clienti avranno l’opportunità di
                    sperimentare una visita guidata personalizzata su tutta l’isola. Possiamo proporre programmi
                    personalizzati volti a soddisfare tutte le vostre richieste sia in riferimento a singoli viaggiatori
                    che coppie e gruppi.<br>
                    Abbiamo a disposizione confortevoli automobili dotate di aria condizionata e di diverse
                    grandezze.<br>
                    Diamo altresì la possibilità di viaggiare su automobili d’epoca e farvi rivivere l’emozione degli
                    anni 50. Tutte queste autovetture sono certificate da SIC per garantirvi sicurezza ed
                    efficienza.<br>
                    Inoltre vi garantiamo tutto il nostro supporto per le vostre necessità. Offriamo trasferimenti da e
                    per tutte le città e/o aereoporti. Possiamo offrirvi alloggi nella maggior parte delle città
                    dell’isola. Essi sono le migliori soluzioni ad oggi se siete alla ricerca di una esperienza
                    interattiva. I nostri alloggi sono selezionati sulla base della pulizia, comfort, convenienza,
                    sicurezza, servizio alla clientela.<br>
                    Da ultimo noi siamo qui pronti ad aiutarvi ed organizzare qualsivoglia attività in modo tale da
                    poter riempire con piacere il vostro soggiorno a Cuba.
                    <b>Prenota ora!!!</b>
                </p>

            <?php } ?>
        </div>
        <div class="about-content col-lg-5">

        </div>

    </div>
