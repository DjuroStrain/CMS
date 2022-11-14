<?php
    get_header();

    $sImageUrl = get_template_directory_uri().'/img/home-bg.jpg';
    echo '
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('.$sImageUrl.')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
            <h1>  Predmeti </h1>
            <span class="subheading"></span>
            </div>
        </div>
        </div>
    </div>
    </header>';
    
    echo '<h2 class="text-center"> 1. Godina </h2>
         <h3 class="text-center"s> I semestar </h3>';
    echo daj_semestre('prvi_semestar');
    echo '<h2 class="text-center"> 1. Godina </h2>
         <h3 class="text-center"s> II semestar </h3>';
     echo daj_semestre('drugi_semestar');
         echo '<h2 class="text-center"> 2. Godina </h2>
         <h3 class="text-center"s> III semestar </h3>';
     echo daj_semestre('treci_semestar');
    echo '<h2 class="text-center"> 2. Godina </h2>
         <h3 class="text-center"s> IV semestar </h3>';
     echo daj_semestre('cetvrti_semestar');;
    echo '<h2 class="text-center"> 3. Godina </h2>
         <h3 class="text-center"s> V semestar </h3>';
     echo daj_semestre('peti_semestar');

    echo '<h2 class="text-center"> 3. Godina </h2>
         <h3 class="text-center"s> VI semestar </h3>';
     echo daj_semestre('sesti_semestar');

    

    get_footer();
?>