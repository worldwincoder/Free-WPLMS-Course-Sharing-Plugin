<?php
/*
Plugin Name: WPLMS Course Sharing
Plugin URI: https://worldwincoder.com
Description: Share your WPLMS course on social media and engage more customers. 
Version: 1.0.0
Author: WorldWin Coder Pvt. Ltd.
Author URI: https://worldwincoder.com/wplms-course-sharing/
License: GPLv2 or later
 */



if ( !function_exists( 'course_sharing_on_social_media') ):
	function course_sharing_on_social_media(){
	    $page = get_page_by_title( $page_title, $output, $post_type );
	    $current_page_link = get_permalink($page->ID);
	    ?>

	   <div id="share-wrap" class="share-popup-con popup" style="position: fixed; inset: 0px; z-index: 2147483647; overflow: hidden; outline: 0px; background: rgba(255, 255, 255, 0.8);">
	        <div id="share-course-main-wrapper" style="max-width: 450px;height: 250px;width: 100%;background: white;position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);border: 1px solid #f2f2f2;">
	            <div class="share-close-class" style="border-bottom: 1px solid #d5d5d5;padding-bottom: 10px;display: inline-flex;width: 100%;">
	                <div style="text-align: left;width: 50%;">
	                    <span style=" padding-top: 15px;display: block;padding-left: 15px;font-family: inherit;">Share</span>
	                </div>
	                <div style="width: 50%;text-align: end;">
	                    <i class="fa fa-close closeshare" style="font-size: 40px;color: #666666;margin-right: 15px;margin-top: 5px; cursor: pointer;"></i>
	                </div>
	            </div>
	            <div class="share-icon-class" style="display: flex;padding-top: 43px;width: 100%;">
	                <div style="    width: 25%;    text-align: -webkit-center;    display: block;">    
	                    <div style="background-color:#25D366;border-radius:50px;width: 50px;height: 50px;text-align:center;">
	                        <a class="sharebyatag" href="https://wa.me/?text=<?php echo $current_page_link;?>" target="_blank">
	                            <i class="fa fa-whatsapp" style="font-size: 35px;color:#fff;padding-top: 7px;cursor: pointer;"></i>
	                        </a>
	                    </div>
	                    <div>
	                         <span>WhatsApp</span>
	                    </div>
	                </div>
	                <div style="   width: 25%;   text-align: -webkit-center;    display: block;">
	                    <div style="background-color:#3b5998;border-radius:50px;width: 50px;height: 50px;text-align:center;">
	                        <a class="sharebyatag" href="https://www.facebook.com/sharer.php?u=<?php echo $current_page_link;?>" target="_blank">
	                            <i class="vicon vicon-facebook" style="font-size: 30px;color:#fff;position: absolute;margin-top: 10px;margin-left: -14px;cursor: pointer;"></i>
	                        </a>
	                    </div>
	                    <div>
	                         <span>Facebook</span>
	                    </div>
	                </div>
	                <div style=" width: 25%; text-align: -webkit-center;   display: block;">
	                    <div style="background-color:#0e76a8;border-radius:50px;width: 50px;height: 50px;text-align:center;">
	                        <a class="sharebyatag" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $current_page_link;?>" target="_blank">
	                          <i class="fa fa-linkedin" style="font-size: 28px;color:#fff;padding-top: 10px;cursor: pointer;"></i>
	                        </a>     
	                    </div>
	                    <div>
	                        <span>LinkedIn</span>
	                    </div>
	                </div>
	                <div style="width: 25%; text-align: -webkit-center; display: block;">
	                    <div style="background-color:#888888;border-radius:50px;width: 50px;height: 50px;text-align:center;">
	                        <a class="sharebyatag" href="mailto:?subject=I wanted you to see this course &amp;body=Check out this site <?php echo $current_page_link;?>" title="Share by Email">
	                          <i class="fa fa-envelope" style="font-size: 28px;color:#fff;padding-top: 10px;cursor: pointer;"></i> 
	                        </a>     
	                    </div>
	                    <div>
	                        <span>Email</span>
	                    </div>
	                </div>
	            </div>
	            <div style="padding: 4% 5%;">
	                <div style="border: 1px solid #d5d5d5;width: 100%;display: inline-flex; padding: 5px 0px;">
	                    <input type="text" name="" id="sharelinktext" value="<?php echo $current_page_link;?>" readonly="" style="border: 0;width: 85%;">
	                    <span class="copylinkurl" style=" color: #c82e29;font-weight: 600;text-align: right;display: block;width: 13%;padding-top: 5px;font-family: inherit;cursor: pointer;">Copy</span>
	                </div>
	            </div>
	        </div>
	    </div>

	    <script type="text/javascript">
	        jQuery( document ).ready(function() {

	            jQuery('.single-course h1.course_element_text').append('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share sharecourse" viewBox="0 0 16 16"><path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/></svg>');
	            jQuery(document).on('click', '.sharecourse', function(event){
	                jQuery('#share-wrap').show();
	            });
	            jQuery(document).on('click', '.closeshare,.sharebyatag', function(event){
	                jQuery('#share-wrap').hide();
	            });

	            jQuery(document).on('click', '.copylinkurl', function(event){
	                var copyText = document.getElementById("sharelinktext");
	                copyText.select();
	                copyText.setSelectionRange(0, 99999)
	                document.execCommand("copy");
	                jQuery(this).html('Copied');
	                jQuery(this).css('color','green');
	            });
	        });    
	    </script>
	    <style type="text/css">
	        .single-course h1.course_element_text {
	            display: block;
	        }
	        svg.bi.bi-share.sharecourse {
	            width: 30px;
	            height: 30px;
	            margin-left: 25px;
	            margin-top: 5px;
	            cursor: pointer;
	        }
	        #share-wrap{
	            display: none;
	        }
	    </style>
	    <?php    
	}
endif;
add_action( 'wplms_after_course_description', 'course_sharing_on_social_media', 10 );
?>