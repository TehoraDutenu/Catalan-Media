 <?php
 /*
  * Template Name: Rugby League
  */
 
 get_header(); ?>
 
 <main class="rl-main container">
     <div class="row">

         <!-- Contenu principal -->
         <div class="col-md-9">

            <div class="gb-stadium">
                <img class="brutus img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/rugby-league/brutus.webp" alt="Image Brutus">
            </div>

             <div class="rl_p_1">
                <h3>Scrum on down</h3>
                <p class="p_1 multi-column">
                    We're Rugby League crazy here at Catalan Media, and so is the south-west corner of France.
                    Catalans Dragons and Toulouse Olympique are the big names in the game around here and we follow them all the way.
                    There are thousands of men, women and children playing Rugby League in this area and many thousands more flying in every week to watch their team compete over here.
                    Let Catalan Media be your guide to the game in France.
                </p>
             </div>

             <div class="rl_p_2">
                <h3>The Greatest Game</h3>
                <p class="p_2 multi-column">
                    THERE are lots of reasons why people come to visit this beautiful part of France - sunshine, mountains, beaches, great food and wines etc, but there’s also a lesser-known attraction that brings thousands of visitors each year, particularly from the north of England… Rugby League.
                    Rugby à Treize (Rugby for thirteen) as the French call it, is the lesser known code of the oval ball game. It is very popular in Wigan, Leeds and Hull but few are aware that it is also played in Perpignan, Carcassonne and Toulouse.
                    The Catalans Dragons are a professional side who play at the top level of the game - the English Super League. Based at the Stade Gilbert Brutus, they regularly attract thousands of fans from England to watch matches in Perpignan, along with a passionate crowd of vocal locals.
                </p>

                <div class="rl-slide-1 big devices">
                    <?php
                        echo apply_shortcodes('[smartslider3 slider="3"]');
                    ?>
                </div>
                <p class="p_2 multi-column">
                    Every other Saturday, supporters from Warrington, St Helens and Castleford fill the bars and cafes of Perpignan and assemble at Le Castillet before marching to the ground to watch the match. Then the following week, the club charters a plane and flies to England for the return fixtures.
                    Toulouse are hoping to play in Super League next year too, so more supporters should be heading this way very soon.
                    There are dozens of semi-professional and amateur clubs in this region. Lezignan, Villeneuve, St Esteve, Palau, Limoux, Albi and Avignon all compete in the French Elite One championship and there are numerous junior and women’s teams all playing within the foothills of the Pyrenees.
                    Rugby League has been played in France since 1934 when the game split from Rugby Union and changed some rules including cutting the number of players in the team from 15 to 13.
                </p>
 
                <hr>
                
                <p class="p_2 multi-column">
                    The game grew dramatically and was in danger of overtaking Union as the dominant code in France until the outbreak of the second world war when the ruling Vichy Government, in collaboration with the Nazis, banned the sport and confiscated all of its assets.
                    There was a resurgence after the war but the game never fully recovered and it is now mainly played in the southern corners of France.
                    There is a French national team (nickname Les Chanticleers “The Singing Cockerels”) made up entirely of players from this region and a national governing body, the Federation Française de Rugby à XIII.
                </p>
            </div>
        </div>
        
        <!-- Sidebar à droite -->
        <div class="col-md-3 rl-page-sb">
            <div class="rl-sb-frame">
                <?php include get_template_directory() . '/rl-sidebar.php'; ?>
            </div>
        </div>
    </div>
	
	<!-- .row -->

    <div class="dragons">
        <img class="dragons-pic img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/rugby-league/dragons.webp" alt="Dragons Catalans">
    </div>

</main><!-- .rl-main -->
 
 <?php get_footer(); ?>
 
