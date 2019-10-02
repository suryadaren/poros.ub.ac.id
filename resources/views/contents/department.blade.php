<div id="tf-department">
    <div class="container">
        <div class="section-header">
            <h2>Department of <span class="highlight"><strong>POROS</strong></span></h2>
            <h5><em>{$website_tag}</em></h5>
            <div class="fancy"><span><img src="{assets_url()}front/img/favicon.ico" alt="..."></span></div>
        </div>
    </div>

    <div id="feature" class="gray-bg"> <!-- fullwidth gray background -->
        <div class="container"> <!-- container -->
            <div class="row" role="tabpanel"> <!-- row -->
                <div class="col-md-4 col-md-offset-1"> <!-- tab menu col 4 -->

                    <ul class="features nav nav-pills nav-stacked" role="tablist">
                        <li role="presentation" class="active"> <!-- feature tab menu #2 -->
                            <a href="#f2" aria-controls="f2" role="tab" data-toggle="tab">
                                <span class="fa fa-share-alt-square"></span>
                                {$department[1]->name}<br>
                            </a>
                        </li>
                        <li role="presentation"> <!-- feature tab menu #3 -->
                            <a href="#f3" aria-controls="f3" role="tab" data-toggle="tab">
                                <span class="fa fa-rocket"></span>
                                {$department[2]->name}<br>
                            </a>
                        </li>
                        <li role="presentation">  <!-- feature tab menu #1 -->
                            <a href="#f1" aria-controls="f1" role="tab" data-toggle="tab">
                                <span class="fa fa-laptop"></span>
                                {$department[0]->name}<br>
                            </a>
                        </li>
                    </ul>

                </div><!-- end tab menu col 4 -->

                <div class="col-md-6"> <!-- right content col 6 -->
                    <!-- Tab panes -->
                    <div class="tab-content features-content"> <!-- tab content wrapper -->
                        <div role="tabpanel" class="tab-pane fade in active" id="f1"> <!-- feature #1 content open -->
                            <h4>{$department[0]->name}</h4>
                            <p>{$department[0]->description}</p>
                            <img src="{assets_url()}front/img/tab01.png" class="img-responsive" alt="...">
                        </div>                            
                        <div role="tabpanel" class="tab-pane fade" id="f2"> <!-- feature #2 content -->
                            <h4>{$department[1]->name}</h4>
                            <p>{$department[1]->description}</p>
                            <img src="{assets_url()}front/img/tab02.png" class="img-responsive" alt="...">
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="f3"> <!-- feature #3 content -->
                            <h4>{$department[2]->name}</h4>
                            <p>{$department[2]->description}</p>
                            <img src="{assets_url()}front/img/tab03.png" class="img-responsive" alt="...">
                        </div>
                    </div> <!-- end tab content wrapper -->
                </div><!-- end right content col 6 -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </div><!-- end fullwidth gray background -->
</div>