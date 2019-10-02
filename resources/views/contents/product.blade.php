<div id="tf-product">
    <div class="container">
        <div class="section-header">
            <h2>Product of <span class="highlight"><strong>POROS</strong></span></h2>
            <h5><em>{$website_tag}</em></h5>
            <div class="fancy"><span><img src="{assets_url()}front/img/favicon.ico" alt="..."></span></div>
        </div>

        <div class="text-center">
            <ul class="list-inline cat"> <!-- Portfolio Filter Categories -->
                <li><a href="#" data-filter="*" class="active">All</a></li>
                <li><a href="#" data-filter=".1">UI/UX</a></li>
                <li><a href="#" data-filter=".2">Android</a></li>
                <li><a href="#" data-filter=".3">OS</a></li>
                <li><a href="#" data-filter=".4">Security</a></li>
                <li><a href="#" data-filter=".5">Webiste</a></li>
            </ul><!-- End Portfolio Filter Categories -->
        </div>

    </div><!-- End Container -->

    <div class="container"> <!-- container -->
     <div id="itemsWorkThree" class="row text-center"> <!-- Portfolio Wrapper Row -->

        {foreach from=$product item=pdc}
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 brand {$pdc->id_div->id}"> <!-- Works #1 col 3 -->
            <div class="box"> 
                <div class="hover-bg">
                    <div class="hover-text off">
                        <a title="{$pdc->name}" href="{assets_url()}uploads/images/{$pdc->photo}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{assets_url()}uploads/images/{$pdc->photo}">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a onclick="window.open('{$pdc->link}')"><i class="fa fa-chain"></i></a> <!-- change # with your url to link it to another page -->
                    </div> 
                    <img src="{assets_url()}uploads/images/{$pdc->photo}" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                </div>
                <h5>{$pdc->name}<br><small><em>{$pdc->id_div->name}</em></small></h5>
            </div>
        </div><!-- end Works #1 col 3 -->
        {/foreach}

    </div>
</div>
</div>