@extends('app')

@section('footer-content')
    <div class="page-container">
        <div class="widgets">
            <div class="vc_col-md-4 widgets-column">
                <ul>
                    <li id="norebro_widget_subscribe-4" class="widget widget_norebro_widget_subscribe">
                        <div class="subscribe-widget">


                            <form id="feedburner_subscribe_5e75fd40259f5"
                                  action="https://feedburner.google.com/fb/a/mailverify" method="post"
                                  target="popupwindow"
                                  onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=', 'popupwindow', 'scrollbars=yes,width=550,height=520' );return true">
                                <div class="subscribe fullwidth text-left">
                                    <input type="text" placeholder="Enter your email" name="email"
                                           id="subsmail_5e75fd4025a97">
                                    <button class="btn btn-outline">Subscribe</button>
                                </div>
                                <div class="text-left"></div>
                                <input type="hidden" value="" name="uri">
                                <input type="hidden" name="loc" value="en_US">
                            </form>
                        </div>

                    </li>
                    <li id="norebro_widget_socialbar_subscribe-2"
                        class="widget widget_norebro_widget_socialbar_subscribe">
                        <div class="socialbar small new-tab-links">
                            <a href="http://www.facebook.com/spotlessagency/?ref=settings" target="_blank"
                               class="social outline rounded">
                                <span class="icon fa fa-facebook"></span>
                            </a>

                            <a href="http://twitter.com/Spotless_agency" target="_blank"
                               class="social outline rounded">
                                <span class="icon fa fa-twitter"></span>
                            </a>


                            <a href="http://www.instagram.com/spotlessagency/" target="_blank"
                               class="social outline rounded">
                                <span class="icon fa fa-instagram"></span>
                            </a>

                            <a href="https://www.linkedin.com/company/spotlessagency/" target="_blank"
                               class="social outline rounded">
                                <span class="icon fa fa-linkedin"></span>
                            </a>


                        </div>
                    </li>
                </ul>
            </div>
            <div class="vc_col-md-4 widgets-column">
                <ul>
                    <li id="norebro_widget_contact-2" class="widget widget_norebro_widget_contact"><h3
                            class="title widget-title">SPOTLESS CREATIVE GROUP, LLC</h3>
                        <ul class="list-box contact-module">
                            <li>
                                Phone:
                                <address><br>+1 480 999 59 06<br> +1 347 773 05 03</address>
                            </li>
                            <li>
                                Email:
                                <address><br>Hello@spotlessagency.com</address>
                            </li>
                            <li>
                                Address:
                                <address><br>610 West Broadway, Suite 201, Jackson<br>WY, 83001</address>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="vc_col-md-4 widgets-column">
                <ul>
                    <li id="norebro_widget_recent_posts-2" class="widget widget_norebro_widget_recent_posts"><h3
                            class="title widget-title">Recent Posts</h3>
                        <ul class="recent-posts-list">
                            <li class="post-item clearfix active ">


                                <a href="https://www.spotlessagency.com/blog/top-12-secrets-of-the-real-estate-industry/"
                                   class="more">
                                    <img width="150" height="150"
                                         src="/images/Untitled-new-1-150x150.jpg"
                                         class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                                         srcset="/images/Untitled-new-1-150x150.jpg 150w, /images/Untitled-new-1-200x200.jpg 200w"
                                         sizes="(max-width: 150px) 100vw, 150px"> </a>


                                <div class="content-wrap">
                                    <h4 class="text-left font-main">
                                        <a href="https://www.spotlessagency.com/blog/top-12-secrets-of-the-real-estate-industry/">
                                            Top 12 secrets of the real estate industry </a>
                                    </h4>
                                    <span class="date">18.03.2020</span>

                                    <br>

                                    <div class="subtitle">
								<span class="comments">
									<a href="https://www.spotlessagency.com/blog/top-12-secrets-of-the-real-estate-industry/">
										No comments									</a>
								</span>
                                    </div>
                                </div>
                            </li>
                            <li class="post-item clearfix ">


                                <a href="https://www.spotlessagency.com/blog/can-modern-technology-substitute-real-estate-agents/"
                                   class="more">
                                    <img width="150" height="150"
                                         src="/images/Andre_S-150x150.jpg"
                                         class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                                         srcset="/images/Andre_S-150x150.jpg 150w, /images/Andre_S-200x200.jpg 200w"
                                         sizes="(max-width: 150px) 100vw, 150px"> </a>


                                <div class="content-wrap">
                                    <h4 class="text-left font-main">
                                        <a href="https://www.spotlessagency.com/blog/can-modern-technology-substitute-real-estate-agents/">
                                            Role of a real estate agent in the technology era </a>
                                    </h4>
                                    <span class="date">12.03.2020</span>

                                    <br>

                                    <div class="subtitle">
								<span class="comments">
									<a href="https://www.spotlessagency.com/blog/can-modern-technology-substitute-real-estate-agents/">
										No comments									</a>
								</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div><!-- wrapper -->
@endsection
