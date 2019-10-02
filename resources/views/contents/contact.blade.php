<div id="tf-contact">
    <div class="container"> <!-- container -->
        <div class="section-header">
            <h2>Message To <span class="highlight"><strong>POROS</strong></span></h2>
            <h5><em>{$website_tag}</em></h5>
            <div class="fancy"><span><a href="{base_url()}home"><img src="{assets_url()}front/img/favicon.ico" alt="..."></a></span></div>
        </div>
    </div><!-- end container -->

    <div class="container"><!-- container -->
        <div class="row"> <!-- outer row -->
            <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                <div class="row"> <!-- nested row -->

                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">  
                        <div class="contact-detail">
                            <i class="fa fa-map-marker"></i>
                            <h4>{$poros_address}</h4> <!-- address -->
                        </div>
                    </div>
                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">
                        <div class="contact-detail">
                            <i class="fa fa-envelope-o"></i>
                            <h4>{$poros_email}</h4><!-- email add -->
                        </div>
                    </div>

                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">
                        <div class="contact-detail">
                            <i class="fa fa-phone"></i>
                            <h4>{$poros_mobile}</h4> <!-- phone no. -->
                        </div>
                    </div>

                </div> <!-- end nested row -->
            </div> <!-- end col 10 with offset 1 to centered -->
        </div><!-- end outer row -->

        <div class="row text-center"> <!-- contact form outer row with centered text-->
            <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                <form action="{base_url()}message/add_message" method="post" class="form-group"> <!-- form wrapper -->

                    <div class="row"> <!-- nested inner row -->

                        <!-- Input your id -->
                        <div class="col-md-6">
                            <div class="form-group"> <!-- Your email input -->
                                <input name="id_user" type="hidden" autocomplete="off" class="form-control" value="{$u_session['id']}">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <!-- Input your email -->
                        <div class="col-md-6">
                            <div class="form-group"> <!-- Your email input -->
                                <input name="email" type="hidden" autocomplete="off" class="form-control" value="{$u_session['email']}">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <!-- Input your Phone no. -->
                        <div class="col-md-6">
                            <div class="form-group"> <!-- Your email input -->
                                <input name="mobile" type="hidden" autocomplete="off" class="form-control" value="{$u_session['mobile']}">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                    </div><!-- end nested inner row -->

                    <!-- Message Text area -->
                    <div class="form-group"> <!-- Your email input -->
                        <textarea name="message" class="form-control" rows="7" placeholder="Tell Us Something..." required data-validation-required-message="Please enter a message." {if $u_logged_in != 'true'} disabled {/if}></textarea>
                        <p class="help-block text-danger"></p>
                        <div id="success"></div>
                    </div>
                    <input type="submit" class="btn btn-primary tf-btn color" value="Send Message">
                </form><!-- end form wrapper -->
            </div><!-- end col 10 with offset 1 to centered -->
        </div> <!-- end contact form outer row with centered text-->
    </div><!-- end container -->
</div>