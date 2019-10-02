<div id="tf-blog">
    <div class="container"> <!-- container -->
        <div class="section-header">
            <h2>Latest from the <span class="highlight"><strong>Blog</strong></span></h2>
            <h5><em>We design and build functional and beautiful websites</em></h5>
            <div class="fancy"><span><a href="{base_url()}blog/page"><img src="{assets_url()}front/img/favicon.ico" alt="..."></a></span></div>
        </div>
    </div>

    <div id="blog-post" class="gray-bg"> <!-- fullwidth gray background -->
        <div class="container"><!-- container -->

            <div class="row"> <!-- row -->
                {foreach from=$blog item=blg}
                <div class="col-md-6"> <!-- Left content col 6 -->

                    <div class="post-wrap"> <!-- Post Wrapper -->
                        <div class="media post"> <!-- post wrap -->
                            <div class="media-left"> 
                                <a href="{base_url()}blog/detail/{$blg->id}"> <!-- link to your post single page -->
                                  <img class="media-object" src="http://placehold.it/120x150" alt="..."> <!-- Your Post Image -->
                              </a>
                          </div>
                          <div class="media-body">
                            <p class="small">{$blg->created_at}</p>
                            <a href="{base_url()}blog/detail/{$blg->id}">
                                <h5 class="media-heading"><strong>{$blg->title}</strong></h5>
                            </a>
                            <p>{$blg->description} </p>
                        </div>
                    </div><!-- end post wrap -->
                    
                    <div class="post-meta"> <!-- Meta details -->
                        <ul class="list-inline metas pull-left"> <!-- post metas -->
                            <li><a href="">by {$blg->id_user->name}</a></li> <!-- meta author -->
                            <li><a href="{base_url()}blog/detail/{$blg->id}">20 Comments</a></li> <!-- meta comments -->
                            <li><a href="{base_url()}blog/detail/{$blg->id}">Read More</a></li> <!-- read more link -->
                        </ul>
                        <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                            <li><a href="" style="pointer-events: none; cursor: default;"><i class="fa fa-heart"></i></a> {$blg->like}</li> <!-- like button -->
                            <li><i class="fa fa-eye"></i> {$blg->views}</li> <!-- no. of views -->
                        </ul>
                    </div><!-- end Meta details --> 
                </div><!-- end Post Wrapper -->

            </div> <!-- end Left content col 6 -->
            {continue}

            {/foreach}

        </div><!-- end row -->

        <div class="text-center">
            <a href="{base_url()}blog/page" class="btn btn-primary tf-btn color">View More</a>
        </div>                
    </div><!-- end container -->
</div> <!-- end fullwidth gray background -->
</div>