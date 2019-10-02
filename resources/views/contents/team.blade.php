<div id="tf-member">
    <div class="container"> <!-- container -->
        <div class="section-header">
            <h2>Awesome People Behind <span class="highlight"><strong>POROS '17</strong></span></h2>
            <h5><em>{$website_tag}</em></h5>
            <div class="fancy"><span><img src="{assets_url()}front/img/favicon.ico" alt="..."></span></div>
        </div>

        <div id="team" class="owl-carousel owl-theme text-center"> <!-- team carousel wrapper -->

            {foreach from=$official item=ofc}
            <div class="item"><!-- Team #1 -->
                <div class="hover-bg"> <!-- Team Wrapper -->
                    <div class="hover-text off"> <!-- Hover Description -->
                        <p>{$ofc->quote}</p>
                    </div><!-- End Hover Description -->
                    <img src="{assets_url()}uploads/images/{$ofc->id_user->photo}" alt="official-photo" class="img-responsive"> <!-- Team Image -->
                    <div class="team-detail text-center">
                        <h3>{$ofc->id_user->name}</h3>
                        <p class="text-uppercase">{$ofc->position}</p>
                        <ul class="list-inline social"> 
                            <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                            <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                            <li><a href="#" class="fa fa-github"></a></li> <!-- github plus link here -->
                        </ul>
                    </div>
                </div><!-- End Team Wrapper -->
            </div><!-- End Team #1 -->
            {/foreach}

        </div> <!-- end team carousel wrapper -->

    </div> <!-- container -->
</div>