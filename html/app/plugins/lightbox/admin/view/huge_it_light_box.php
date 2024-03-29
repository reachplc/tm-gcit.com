<?php $hugeit_lightbox_values = $this->model->getlightboxList(); ?>
<link rel="stylesheet" type="text/css" media="all" href="http://localhost/lightbox/wp-content/plugins/lightbox/css/admin/admin.style.css" />
<div id="post-body-heading" class="post-body-line">
	<h3>General Options</h3>
	<a onclick="document.getElementById('adminForm').submit()" class="save-lightbox-options button-primary">Save</a>		
</div>
<div id="lightbox-options-list">
	<form action="admin.php?page=huge_it_light_box&hugeit_task=save" method="post" id="adminForm" name="adminForm">
	<div class="options-block">	
            <h3>Internationalization</h3>
			<div class="has-background">
                            <label for="light_box_style">Lightbox style
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>
                                            <p>Choose the style of your popup</p>
                                        </div>
                                    </div>
                                </label>
				<select id="light_box_style" name="params[light_box_style]">	
					<option <?php if($hugeit_lightbox_values['light_box_style'] == '1'){ echo 'selected="selected"'; } ?> value="1">1</option>
					<option <?php if($hugeit_lightbox_values['light_box_style'] == '2'){ echo 'selected="selected"'; } ?> value="2">2</option>
					<option <?php if($hugeit_lightbox_values['light_box_style'] == '3'){ echo 'selected="selected"'; } ?> value="3">3</option>
					<option <?php if($hugeit_lightbox_values['light_box_style'] == '4'){ echo 'selected="selected"'; } ?> value="4">4</option>
					<option <?php if($hugeit_lightbox_values['light_box_style'] == '5'){ echo 'selected="selected"'; } ?> value="5">5</option>
				</select>
				<div id="view-style-block">
					<ul>
						<li data-id="1" class="active"><img src="<?php echo plugins_url('../../images/view1.jpg', __FILE__); ?>"></li>
						<li data-id="2"><img src="<?php echo plugins_url('../../images/view2.jpg', __FILE__); ?>"></li>
						<li data-id="3"><img src="<?php echo plugins_url('../../images/view3.jpg', __FILE__); ?>"></li>
						<li data-id="4"><img src="<?php echo plugins_url('../../images/view4.jpg', __FILE__); ?>"></li>
						<li data-id="5"><img src="<?php echo plugins_url('../../images/view5.jpg', __FILE__); ?>"></li>
					</ul>
				</div>
                            
			</div>
			<div>
                                <label for="light_box_transition">Transition type
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>
                                            <p>Set the way of opening the popup.</p>
                                        </div>
                                    </div>
                                </label>
				<select id="light_box_transition" name="params[light_box_transition]">	
					<option <?php if($hugeit_lightbox_values['light_box_transition'] == 'elastic'){ echo 'selected="selected"'; } ?> value="elastic">Elastic</option>
					<option <?php if($hugeit_lightbox_values['light_box_transition'] == 'fade'){ echo 'selected="selected"'; } ?> value="fade">Fade</option>
					<option <?php if($hugeit_lightbox_values['light_box_transition'] == 'none'){ echo 'selected="selected"'; } ?> value="none">none</option>
				</select>
			</div>	
			<div class="has-background">
                                <label for="light_box_speed">Opening speed
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>
                                            <p>Set the speed of opening the popup in milliseconds..</p>
                                        </div>
                                    </div>
                                </label>
				<input type="number" name="params[light_box_speed]" id="light_box_speed" value="<?php echo $hugeit_lightbox_values['light_box_speed']; ?>" class="text">
				<span>ms</span>
			</div>
			<div>
                                <label for="light_box_fadeout">Closing speed
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>
                                            <p>Set the speed of closing the popup in milliseconds.</p>
                                        </div>
                                    </div>
                                </label>
				<input type="number" name="params[light_box_fadeout]" id="light_box_fadeout" value="<?php echo $hugeit_lightbox_values['light_box_fadeout']; ?>" class="text">
				<span>ms</span>
			</div>
			<!-- <div class="has-background">
				<label for="light_box_href">Light box href<span class="help"></span></label>
				<input type="text" name="params[light_box_href]" id="light_box_href" value="<?php echo $hugeit_lightbox_values[light_box_href]; ?>" class="text">
				<span>px</span>
			</div> -->
			<div class="has-background">
                                <label for="light_box_title">Show the title
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>
                                            <p>Choose whether to display the content title.</p>
                                        </div>
                                    </div>
                                </label>
				<input type="hidden" value="false" name="params[light_box_title]" />
				<input type="checkbox" id="light_box_title"  <?php if($hugeit_lightbox_values['light_box_title']  == 'true'){ echo 'checked="checked"'; } ?>  name="params[light_box_title]" value="true" />
			</div>
			<!-- <div class="has-background">
				<label for="light_box_rel">Light box Rel<span class="help"></span></label>
				<input type="text" name="params[light_box_rel]" id="light_box_rel" value="<?php echo $hugeit_lightbox_values[light_box_rel]; ?>" class="text">
				<span>px</span>
			</div> -->
			<!--<div class="has-background">
				<label for="light_box_scalephotos">Scale photos<span class="help"></span></label>
				<select id="light_box_scalephotos" name="params[light_box_scalephotos]">	
					<option <?php if($hugeit_lightbox_values['light_box_scalephotos'] == 'true'){ echo 'selected="selected"'; } ?> value="true">True</option>
					<option <?php if($hugeit_lightbox_values['light_box_scalephotos'] == 'false'){ echo 'selected="selected"'; } ?> value="false">False</option>
				</select>
			</div>
			<div class="has-background">
				<label for="light_box_scrolling">Light box Scrolling<span class="help"></span></label>
				<select id="light_box_scrolling" name="params[light_box_scrolling]">	
					<option <?php if($hugeit_lightbox_values['light_box_scrolling'] == 'true'){ echo 'selected="selected"'; } ?> value="true">True</option>
					<option <?php if($hugeit_lightbox_values['light_box_scrolling'] == 'false'){ echo 'selected="selected"'; } ?> value="false">False</option>
				</select>
			</div>-->
			<div>
                                <label for="light_box_opacity">Overlay transparency
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>
                                            <p>Change the level of popup background transparency.</p>
                                        </div>
                                    </div>
                                </label>
				<div class="slider-container">
					<input name="params[light_box_opacity]" id="light_box_opacity" data-slider-highlight="true"  data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text" data-slider="true" value="<?php echo $hugeit_lightbox_values['light_box_opacity']; ?>" />
					<span><?php echo $hugeit_lightbox_values['light_box_opacity']; ?>%</span>
				</div>
			</div>
			<div class="has-background">
                                <label for="light_box_open">Auto open
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>
                                            <p>Choose for automatically opening the firs content after reloading.</p>
                                        </div>
                                    </div>
                                </label>
				<input type="hidden" value="false" name="params[light_box_open]" />
				<input type="checkbox" id="light_box_open"  <?php if($hugeit_lightbox_values['light_box_open']  == 'true'){ echo 'checked="checked"'; } ?>  name="params[light_box_open]" value="true" />
			</div>
			<!--<div class="has-background">
				<label for="light_box_returnfocus">Light box returnFocus<span class="help"></span></label>
				<select id="light_box_returnfocus" name="params[light_box_returnfocus]">	
					<option <?php if($hugeit_lightbox_values['light_box_returnfocus'] == 'true'){ echo 'selected="selected"'; } ?> value="true">True</option>
					<option <?php if($hugeit_lightbox_values['light_box_returnfocus'] == 'false'){ echo 'selected="selected"'; } ?> value="false">False</option>
				</select>
			</div>
			<div class="has-background">
				<label for="light_box_trapfocus">Light box trapFocus<span class="help"></span></label>
				<select id="light_box_trapfocus" name="params[light_box_trapfocus]">	
					<option <?php if($hugeit_lightbox_values['light_box_trapfocus'] == 'true'){ echo 'selected="selected"'; } ?> value="true">True</option>
					<option <?php if($hugeit_lightbox_values['light_box_trapfocus'] == 'false'){ echo 'selected="selected"'; } ?> value="false">False</option>
				</select>
			</div>
			<div class="has-background">
				<label for="light_box_fastiframe">Light box fastIframe<span class="help"></span></label>
				<select id="light_box_fastiframe" name="params[light_box_fastiframe]">	
					<option <?php if($hugeit_lightbox_values['light_box_fastiframe'] == 'true'){ echo 'selected="selected"'; } ?> value="true">True</option>
					<option <?php if($hugeit_lightbox_values['light_box_fastiframe'] == 'false'){ echo 'selected="selected"'; } ?> value="false">False</option>
				</select>
			</div>
			<div class="has-background">
				<label for="light_box_preloading">Light box preloading<span class="help"></span></label>
				<select id="light_box_preloading" name="params[light_box_preloading]">	
					<option <?php if($hugeit_lightbox_values['light_box_preloading'] == 'true'){ echo 'selected="selected"'; } ?> value="true">True</option>
					<option <?php if($hugeit_lightbox_values['light_box_preloading'] == 'false'){ echo 'selected="selected"'; } ?> value="false">False</option>
				</select>
			</div>-->
			<div>
                                <label for="light_box_overlayclose">Overlay close
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>
                                            <p>Choose to close the content by clicking on the overlay.</p>
                                        </div>
                                    </div>
                                </label>
				<input type="hidden" value="false" name="params[light_box_overlayclose]" />
				<input type="checkbox" id="light_box_overlayclose"  <?php if($hugeit_lightbox_values['light_box_overlayclose']  == 'true'){ echo 'checked="checked"'; } ?>  name="params[light_box_overlayclose]" value="true" />
			</div>
			<div class="has-background">
                            <label for="light_box_esckey">EscKey close
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>
                                            <p>Choose to close the content with esc button.</p>
                                        </div>
                                    </div>
                                </label>
				<input type="hidden" value="false" name="params[light_box_esckey]" />
				<input type="checkbox" id="light_box_esckey"  <?php if($hugeit_lightbox_values['light_box_esckey']  == 'true'){ echo 'checked="checked"'; } ?>  name="params[light_box_esckey]" value="true" />
			</div>
			<div>
                                <label for="light_box_arrowkey">Keyboard navigation
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>
                                            <p>Set to change the images with left and right buttons.</p>
                                        </div>
                                    </div>
                                </label>
				<input type="hidden" value="false" name="params[light_box_arrowkey]" />
				<input type="checkbox" id="light_box_arrowkey"  <?php if($hugeit_lightbox_values['light_box_arrowkey']  == 'true'){ echo 'checked="checked"'; } ?>  name="params[light_box_arrowkey]" value="true" />
			</div>
			<div class="has-background">
                                <label for="light_box_loop">Loop content
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>Loop content. If �true� give the ability to move from the last image to the first image while navigation..</p>
                                        </div>
                                    </div>
                                </label>
				<input type="hidden" value="false" name="params[light_box_loop]" />
				<input type="checkbox" id="light_box_loop"  <?php if($hugeit_lightbox_values['light_box_loop']  == 'true'){ echo 'checked="checked"'; } ?>  name="params[light_box_loop]" value="true" />
			</div>
			<!-- <div class="has-background">
				<label for="light_box_data">Light box data<span class="help"></span></label>
				<input type="text" name="params[light_box_data]" id="light_box_data" value="<?php echo $hugeit_lightbox_values[light_box_data]; ?>" class="text">
				<span>px</span>
			</div> -->
			<!-- <div class="has-background">
				<label for="light_box_classname">Light box className<span class="help"></span></label>
				<input type="text" name="params[light_box_classname]" id="light_box_classname" value="<?php echo $hugeit_lightbox_values[light_box_classname]; ?>" class="text">
				<span>px</span>
			</div> -->
			<div>
                                <label for="light_box_closebutton">Show close button
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>
                                            <p>Choose whether to display close button.</p>
                                        </div>
                                    </div>
                                </label>
				<input type="hidden" value="false" name="params[light_box_closebutton]" />
				<input type="checkbox" id="light_box_closebutton"  <?php if($hugeit_lightbox_values['light_box_closebutton']  == 'true'){ echo 'checked="checked"'; } ?>  name="params[light_box_closebutton]" value="true" />
			</div>
	</div>
	<!--<div class="options-block">
		<h3>Buttons Texts</h3>
		<div class="has-background">
			<label for="light_box_previous">Previous button text<span class="help"></span></label>
			<input type="text" name="params[light_box_previous]" id="light_box_previous" value="<?php echo $hugeit_lightbox_values[light_box_previous]; ?>" class="text">
		</div>
		<div>
			<label for="light_box_next">Next button text<span class="help"></span></label>
			<input type="text" name="params[light_box_next]" id="light_box_next" value="<?php echo $hugeit_lightbox_values[light_box_next]; ?>" class="text">
		</div>
		<div class="has-background">
			<label for="light_box_close">Close button text<span class="help"></span></label>
			<input type="text" name="params[light_box_close]" id="light_box_close" value="<?php echo $hugeit_lightbox_values[light_box_close]; ?>" class="text">
		</div>
	</div>
	-->
	<div class="options-block">
		<h3>Dimensions</h3>
		
		<div class="has-background">
                        <label for="light_box_size_fix">Popup size fix
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>Choose to fix the popup width and high.</p>
                                </div>
                            </div>
                        </label>
			<input type="hidden" value="false" name="params[light_box_size_fix]" />
			<input type="checkbox" id="light_box_size_fix"  <?php if($hugeit_lightbox_values['light_box_size_fix']  == 'true'){ echo 'checked="checked"'; } ?>  name="params[light_box_size_fix]" value="true" />
		</div>
		
		<div class="fixed-size" >
                        <label for="light_box_width">Popup width
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>Change the width of content.</p>
                                </div>
                            </div>
                        </label>
			<input type="number" name="params[light_box_width]" id="light_box_width" value="<?php echo $hugeit_lightbox_values[light_box_width]; ?>" class="text">
			<span>px</span>
		</div>
		
		<div class="has-background fixed-size">
                        <label for="light_box_height">Popup height
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>Change the high of content.</p>
                                </div>
                            </div>
                        </label>
			<input type="number" name="params[light_box_height]" id="light_box_height" value="<?php echo $hugeit_lightbox_values[light_box_height]; ?>" class="text">
			<span>px</span>
		</div>
		
		<div class="not-fixed-size">
                        <label for="light_box_maxwidth">Popup maxWidth
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>
                                            <p>Set unfix content max width.</p>
                                        </div>
                                    </div>
                                </label>
			<input type="number" name="params[light_box_maxwidth]" id="light_box_maxwidth" value="<?php echo $hugeit_lightbox_values['light_box_maxwidth']; ?>" class="text">
			<span>px</span>
		</div>
		<div class="has-background not-fixed-size">
                        <label for="light_box_maxheight">Popup maxHeight
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>Set unfix max hight.</p>
                                </div>
                            </div>
                        </label>
			<input type="number" name="params[light_box_maxheight]" id="light_box_maxheight" value="<?php echo $hugeit_lightbox_values['light_box_maxheight']; ?>" class="text">
			<span>px</span>
		</div>
		<!--<div class="has-background">
			<label for="light_box_innerwidth">Light box innerWidth<span class="help"></span></label>
			<input type="text" name="params[light_box_innerwidth]" id="light_box_innerwidth" value="<?php echo $hugeit_lightbox_values['light_box_innerwidth']; ?>" class="text">
			<span>px</span>
		</div>
		<div class="has-background">
			<label for="light_box_innerheight">Light box innerHeight<span class="help"></span></label>
			<input type="text" name="params[light_box_innerheight]" id="light_box_innerheight" value="<?php echo $hugeit_lightbox_values['light_box_innerheight']; ?>" class="text">
			<span>px</span>
		</div>-->
		<div>
                        <label for="light_box_initialwidth">Popup initial width
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>Set the initial size of opening.</p>
                                </div>
                            </div>
                        </label>
			<input type="number" name="params[light_box_initialwidth]" id="light_box_initialwidth" value="<?php echo $hugeit_lightbox_values['light_box_initialwidth']; ?>" class="text">
			<span>px</span>
		</div>
		<div class="has-background">
                        <label for="light_box_initialheight">Popup initial height
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>Set the initial high of opening.</p>
                                </div>
                            </div>
                        </label>
			<input type="number" name="params[light_box_initialheight]" id="light_box_initialheight" value="<?php echo $hugeit_lightbox_values['light_box_initialheight']; ?>" class="text">
			<span>px</span>
		</div>
	</div>
	<div class="options-block">
		<h3>Slideshow</h3>
		
		<div class="has-background">
                        <label for="light_box_slideshow">Slideshow
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>Select to enable slideshow.</p>
                                </div>
                            </div>
                        </label>
			<input type="hidden" value="false" name="params[light_box_slideshow]" />
			<input type="checkbox" id="light_box_slideshow"  <?php if($hugeit_lightbox_values['light_box_slideshow']  == 'true'){ echo 'checked="checked"'; } ?>  name="params[light_box_slideshow]" value="true" />
		</div>
		<div>
                        <label for="light_box_slideshowspeed">Slideshow interval
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>Set the time between each slide.</p>
                                </div>
                            </div>
                        </label>
			<input type="number" name="params[light_box_slideshowspeed]" id="light_box_slideshowspeed" value="<?php echo $hugeit_lightbox_values['light_box_slideshowspeed']; ?>" class="text">
			<span>ms</span>
		</div>
		<div class="has-background">
                        <label for="light_box_slideshowauto">Slideshow auto start
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>If �true� it works automatically.</p>
                                </div>
                            </div>
                        </label>
			<input type="hidden" value="false" name="params[light_box_slideshowauto]" />
			<input type="checkbox" id="light_box_slideshowauto"  <?php if($hugeit_lightbox_values['light_box_slideshowauto']  == 'true'){ echo 'checked="checked"'; } ?>  name="params[light_box_slideshowauto]" value="true" />
		</div>
		<div>
                        <label for="light_box_slideshowstart">Slideshow start button text
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>Set the text on start button.</p>
                                </div>
                            </div>
                        </label>
			<input type="text" name="params[light_box_slideshowstart]" id="light_box_slideshowstart" value="<?php echo $hugeit_lightbox_values['light_box_slideshowstart']; ?>" class="text">
		</div>
		<div class="has-background">
                        <label for="light_box_slideshowstop">Slideshow stop button text
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>Set the text of stop button.</p>
                                </div>
                            </div>
                        </label>
			<input type="text" name="params[light_box_slideshowstop]" id="light_box_slideshowstop" value="<?php echo $hugeit_lightbox_values['light_box_slideshowstop']; ?>" class="text">
		</div>
	</div>
	<div class="options-block" style="margin-top:0px;">
		<h3>Positioning</h3>
		
		<div class="has-background">
                        <label for="light_box_fixed">Fixed position
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>If �true� the popup does not change it�s position while scrolling up or down.</p>
                                </div>
                            </div>
                        </label>
			<input type="hidden" value="false" name="params[light_box_fixed]" />
			<input type="checkbox" id="light_box_fixed"  <?php if($hugeit_lightbox_values['light_box_fixed']  == 'true'){ echo 'checked="checked"'; } ?>  name="params[light_box_fixed]" value="true" />
		</div>
		<div class="has-height">
                        <label for="">Popup position
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>Set the position of popup.</p>
                                </div>
                            </div>
                        </label>
			<div>
			<table class="bws_position_table">
				<tbody>
				  <tr>
					<td><input type="radio" value="1" id="slideshow_title_top-left" name="params[slider_title_position]" <?php if($hugeit_lightbox_values['slider_title_position'] == '1'){ echo 'checked="checked"'; } ?> /></td>
					<td><input type="radio" value="2" id="slideshow_title_top-center" name="params[slider_title_position]" <?php if($hugeit_lightbox_values['slider_title_position'] == '2'){ echo 'checked="checked"'; } ?> /></td>
					<td><input type="radio" value="3" id="slideshow_title_top-right" name="params[slider_title_position]"  <?php if($hugeit_lightbox_values['slider_title_position'] == '3'){ echo 'checked="checked"'; } ?> /></td>
				  </tr>
				  <tr>
					<td><input type="radio" value="4" id="slideshow_title_middle-left" name="params[slider_title_position]" <?php if($hugeit_lightbox_values['slider_title_position'] == '4'){ echo 'checked="checked"'; } ?> /></td>
					<td><input type="radio" value="5" id="slideshow_title_middle-center" name="params[slider_title_position]" <?php if($hugeit_lightbox_values['slider_title_position'] == '5'){ echo 'checked="checked"'; } ?> /></td>
					<td><input type="radio" value="6" id="slideshow_title_middle-right" name="params[slider_title_position]" <?php if($hugeit_lightbox_values['slider_title_position'] == '6'){ echo 'checked="checked"'; } ?> /></td>
				  </tr>
				  <tr>
					<td><input type="radio" value="7" id="slideshow_title_bottom-left" name="params[slider_title_position]" <?php if($hugeit_lightbox_values['slider_title_position'] == '7'){ echo 'checked="checked"'; } ?> /></td>
					<td><input type="radio" value="8" id="slideshow_title_bottom-center" name="params[slider_title_position]" <?php if($hugeit_lightbox_values['slider_title_position'] == '8'){ echo 'checked="checked"'; } ?> /></td>
					<td><input type="radio" value="9" id="slideshow_title_bottom-right" name="params[slider_title_position]" <?php if($hugeit_lightbox_values['slider_title_position'] == '9'){ echo 'checked="checked"'; } ?> /></td>
				  </tr>
				</tbody>	
			</table>
			</div>
                        
                    
		</div>
	</div>
        <!-----------------------Lightbox Watermark html----------------------------------->
        <div class="options-block">
            <h3>Lightbox Watermark styles</h3>
            <div class="has-background">
                                <label for="light_box_title">Show Watermarket Image
                                    <div class="help">?
                                        <div class="help-block">
                                            <span class="pnt"></span>
                                            <p>Enable watermark on lightbox</p>
                                        </div>
                                    </div>
                                </label>
				<input type="hidden" value="false" name="params[watermarket_image]" />
				<input type="checkbox" id="watermarket_image"  <?php if($hugeit_lightbox_values['watermarket_image']  == 'true'){ echo 'checked="checked"'; } ?>  name="params[watermarket_image]" value="true" />
			</div>
            <div class="has-height">
                <label for="">Lightbox Watermark position
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Set the position of lightbox watermark.</p>
                        </div>
                    </div>
                </label>
                    <table class="bws_position_table">
                            <tbody>
                              <tr>
                                    <td><input type="radio" value="1" id="lightbox_watermark_position-left" name="params[lightbox_watermark_position]" <?php if($hugeit_lightbox_values['lightbox_watermark_position'] == '1'){ echo 'checked="checked"'; } ?> /></td>
                                    <td><input type="radio" value="2" id="lightbox_watermark_position-center" name="params[lightbox_watermark_position]" <?php if($hugeit_lightbox_values['lightbox_watermark_position'] == '2'){ echo 'checked="checked"'; } ?> /></td>
                                    <td><input type="radio" value="3" id="lightbox_watermark_position-right" name="params[lightbox_watermark_position]"  <?php if($hugeit_lightbox_values['lightbox_watermark_position'] == '3'){ echo 'checked="checked"'; } ?> /></td>
                              </tr>
                              <tr>
                                    <td><input type="radio" value="4" id="lightbox_watermark_position-left" name="params[lightbox_watermark_position]" <?php if($hugeit_lightbox_values['lightbox_watermark_position'] == '4'){ echo 'checked="checked"'; } ?> /></td>
                                    <td style="visibility: hidden;"><input type="radio" value="4" id="lightbox_watermark_position-left" name="params[lightbox_watermark_position]" <?php if($hugeit_lightbox_values['lightbox_watermark_position'] == '5'){ echo 'checked="checked"'; } ?> /></td>
                                    <td><input type="radio" value="6" id="lightbox_watermark_position-right" name="params[lightbox_watermark_position]" <?php if($hugeit_lightbox_values['lightbox_watermark_position'] == '6'){ echo 'checked="checked"'; } ?> /></td>
                              </tr>
                              <tr>
                                    <td><input type="radio" value="7" id="lightbox_watermark_position-left" name="params[lightbox_watermark_position]" <?php if($hugeit_lightbox_values['lightbox_watermark_position'] == '7'){ echo 'checked="checked"'; } ?> /></td>
                                    <td><input type="radio" value="8" id="lightbox_watermark_position-center" name="params[lightbox_watermark_position]" <?php if($hugeit_lightbox_values['lightbox_watermark_position'] == '8'){ echo 'checked="checked"'; } ?> /></td>
                                    <td><input type="radio" value="9" id="lightbox_watermark_position-right" name="params[lightbox_watermark_position]" <?php if($hugeit_lightbox_values['lightbox_watermark_position'] == '9'){ echo 'checked="checked"'; } ?> /></td>
                              </tr>
                            </tbody>	
                    </table>
            </div>
                        
            <div class="has-background">
                <label for="watermark_width">Lightbox Watermark width
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>Set the widtht of Lightbox watermark.</p>
                                </div>
                            </div>
                        </label>
                <input type="number" name="params[watermark_width]" id="watermark_width" value="<?php echo $hugeit_lightbox_values['watermark_width']; ?>" class="text">
                <span>px</span>
            </div>
            <div>
                <label for="watermark_transparency">Lightbox Watermark transparency
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Set the transparency of Lightbox Watermark.</p>
                        </div>
                    </div>
                </label>
                <div class="slider-container">
                    <input name="params[watermark_transparency]" id="watermark_transparency" data-slider-highlight="true"  data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text" data-slider="true" value="<?php echo $hugeit_lightbox_values['watermark_transparency']; ?>" />
                    <span><?php echo $hugeit_lightbox_values['watermark_transparency']; ?>%</span>
                </div>
            </div>
            <div class="has-background" style="height:auto;">
                <label for="watermark_image_btn">Select Watermark Image
                            <div class="help">?
                                <div class="help-block">
                                    <span class="pnt"></span>
                                    <p>Set the image of Lightbox watermark.</p>
                                </div>
                            </div>
                        </label>
                <img  src="<?php echo $hugeit_lightbox_values['watermark_img_src']; ?>" id="watermark_image" style="width:120px;height:auto;">
                <input type="button" class="button" style="margin-left: 63%;width: auto;display: inline-block;" class="wp-media-buttons-icon"  id="watermark_image_btn" value="Change Image">
                <input type="hidden" id="img_watermark_hidden" name="params[watermark_img_src]" value="<?php echo $hugeit_lightbox_values['watermark_img_src']; ?>">
        </div>
        </form>
</div>
<div id="post-body-heading" class="post-body-line">
	<a onclick="document.getElementById('adminForm').submit()" class="save-lightbox-options button-primary">Save</a>		
</div>

<script>
    /**********************Lightbox Watermark script*************************************/
    jQuery(document).ready(function(){
        var custom_uploader;
        var watermark_img_url = ""
         jQuery('#watermark_image_btn').click(function(e) {
            e.preventDefault();

            //If the uploader object has already been created, reopen the dialog
            if (custom_uploader) {
                    custom_uploader.open();
                    return;
            }

            //Extend the wp.media object
            custom_uploader = wp.media.frames.file_frame = wp.media({
                    title: 'Choose file',
                    button: {
                            text: 'Choose file'
                    },
                    multiple: false
            });

            //When a file is selected, grab the URL and set it as the text field's value
            custom_uploader.on('select', function() {
                    attachment = custom_uploader.state().get('selection').first().toJSON();
                    jQuery("#watermark_image").attr("src",attachment.url);
                    jQuery('#img_watermark_hidden').attr('value',attachment.url);   
            });
            custom_uploader.open();
        });
    });

                                                                                        </script>