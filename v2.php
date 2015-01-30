<pre style="display:none;"><?php echo $_POST['syscfgFromFirstPage'] ?></pre>

<?php
	$drop_area_text = '
		<span>
			Drop your SYSCFG.TXT file here
			<br />or simply load it from a folder
			<br />
			<br />
			<input type="file" id="files" name="files[]" class="loadFile"/>
		</span>
	';
	$load_scripts = array("mobiusv2.js", "FileSaver.js", "estetica.js");
?>
<?php include('includes/header.php'); ?>
<?php include('includes/news.php'); ?>

		<div class="topBarContainer" data-minFw=59>
			<div class="container_12">
				<div class="topBar grid_12">
					<div class="button">Generate SYSCFG.TXT</div>
				</div>
			</div>
		</div><!-- .topBarContainer -->

		<div class="wrapper">
			
			<div class="container_12" data-minFw=59>
				<div class="grid_6">
					<h1 class="primo">Video&mdash;1</h1>

					<h2>Resolution</h2>

					<div class="radioTabs" title="1">
						<input type="radio" id="videoMode1-0" name="1" value=0 maxval=3 minval=0 />
						<label for="videoMode1-0">1080<br/><span class="big">Wide</span><br/><span class="small">30fps</span></label>
						
						<input type="radio" id="videoMode1-1" name="1" value=1 />
						<label for="videoMode1-1">1080<br/><span class="big">Narrow</span><br/><span class="small">30fps</span></label>
						
						<input type="radio" id="videoMode1-2" name="1" value=2 />
						<label for="videoMode1-2">720<br/><span class="big">Wide</span><br/><span class="small">30fps</span></label>
						
						<input type="radio" id="videoMode1-3" name="1" value=3 />
						<label for="videoMode1-3">720<br/><span class="big">Narrow</span><br/><span class="small">30fps</span></label>
						
						<input type="radio" id="videoMode1-4" name="1" value=4 />
						<label for="videoMode1-4">720<br/><span class="big">Narrow</span><br/><span class="small">60fps</span></label>
					</div><!-- radioTabs -->
					
					<h2>Picture rotation</h2>

					<div class="radioTabs">
						<input type="radio" id="video1Flip-0" name="video1Flip" value=0 />
						<label for="video1Flip-0">&nbsp;&nbsp;0°&nbsp;</label>
						
						<input type="radio" id="video1Flip-1" name="video1Flip" value=1 />
						<label for="video1Flip-1">180°</label>
					</div><!-- radioTabs -->

				</div><!-- grid_6 Video 1-->
				<div class="grid_6">
					<h1 class="primo">Video&mdash;2</h1>

					<h2>Resolution</h2>
					<div class="radioTabs" title="3">
						<input type="radio" id="videoMode2-0" name="3" value=0 maxval=3 minval=0 />
						<label for="videoMode2-0">1080<br/><span class="big">Wide</span><br/><span class="small">30fps</span></label>
						
						<input type="radio" id="videoMode2-1" name="3" value=1 />
						<label for="videoMode2-1">1080<br/><span class="big">Narrow</span><br/><span class="small">30fps</span></label>
						
						<input type="radio" id="videoMode2-2" name="3" value=2 />
						<label for="videoMode2-2">720<br/><span class="big">Wide</span><br/><span class="small">30fps</span></label>
						
						<input type="radio" id="videoMode2-3" name="3" value=3 />
						<label for="videoMode2-3">720<br/><span class="big">Narrow</span><br/><span class="small">30fps</span></label>
						
						<input type="radio" id="videoMode2-4" name="3" value=4 />
						<label for="videoMode2-4">720<br/><span class="big">Narrow</span><br/><span class="small">60fps</span></label>
					</div><!-- radioTabs -->

					<h2>Picture rotation</h2>

					<div class="radioTabs">
						<input type="radio" id="video2Flip-0" name="video2Flip" value=0 />
						<label for="video2Flip-0">&nbsp;&nbsp;0°&nbsp;</label>
						
						<input type="radio" id="video2Flip-1" name="video2Flip" value=1 />
						<label for="video2Flip-1">180°</label>
					</div><!-- radioTabs -->
				</div><!-- grid_6 Video 2-->
				
				<div class="clear"></div>

				<div class="grid_12">
					<h1>Photo Mode</h1>
				</div><!-- grid_12 -->
				
				<div class="clear"></div>
				
				<div class="grid_4">
					
					<h2>Resolution</h2>
					<div class="radioTabs" title="5">
						<input type="radio" id="photoMode-0" name="5" value=0 /><label for="photoMode-0">2304x1536</label>
						<input type="radio" id="photoMode-1" name="5" value=1 /><label for="photoMode-1">1920x1080</label>
						<input type="radio" id="photoMode-2" name="5" value=2 /><label for="photoMode-2">1280x720</label>
					</div>
				</div><!-- grid_4 -->

				<div class="grid_8">
					<h2>Timelapse interval</h2>
					<div class="radioTabs" title="6">
						<input type="radio" id="timeLapse-0" name="6" value=0 /><label for="timeLapse-0">Off</label>
						<input type="radio" id="timeLapse-1" name="6" value=1 /><label for="timeLapse-1">0,25 sec</label>
						<input type="radio" id="timeLapse-2" name="6" value=2 /><label for="timeLapse-2">0,5 sec</label>
						<input type="radio" id="timeLapse-3" name="6" value=3 /><label for="timeLapse-3">1 sec</label>
						<input type="radio" id="timeLapse-4" name="6" value=4 /><label for="timeLapse-4">2 sec</label>
						<input type="radio" id="timeLapse-5" name="6" value=5 /><label for="timeLapse-5">5 sec</label>
						<input type="radio" id="timeLapse-6" name="6" value=6 /><label for="timeLapse-6">10 sec</label>
						<input type="radio" id="timeLapse-7" name="6" value=7 /><label for="timeLapse-7">30 sec</label>
						<input type="radio" id="timeLapse-8" name="6" value=8 /><label for="timeLapse-8">60 sec</label>
					</div>
				</div><!-- grid_8 -->

				<div class="clear"></div>

				<div class="grid_12">
					<h2>Picture rotation</h2>
					<div class="radioTabs" title="7">
						<input type="radio" id="photoFlip-0" name="7" value=0 /><label for="photoFlip-0">0°</label>
						<input type="radio" id="photoFlip-1" name="7" value=1 /><label for="photoFlip-1">180°</label>
					</div>
				</div><!-- grid_12 -->

				<div class="clear"></div>

				<div class="grid_12">
					<h1>Recording settings</h1>
				</div>

				<div class="clear"></div>

				<div class="grid_6">
					<h2>Movie cycle time</h2>
					<div class="radioTabs" title="8">
						<input type="radio" id="movieCycle-0" name="8" value=0 /><label for="movieCycle-0">3 min</label>
						<input type="radio" id="movieCycle-1" name="8" value=1 /><label for="movieCycle-1">5 min</label>
						<input type="radio" id="movieCycle-2" name="8" value=2 /><label for="movieCycle-2">10 min</label>
						<input type="radio" id="movieCycle-3" name="8" value=3 /><label for="movieCycle-3">15 min</label>
						<input type="radio" id="movieCycle-4" name="8" value=4 /><label for="movieCycle-4">Max to 4Gb</label>
					</div>
				</div><!-- grid_6 -->
				<div class="grid_3">
					<h2>Movie loop recording</h2>
					<div class="radioTabs" title="9">
						<input type="radio" id="movieLoop-0" name="9" value=0 /><label for="movieLoop-0">Off</label>
						<input type="radio" id="movieLoop-1" name="9" value=1 /><label for="movieLoop-1">On</label>
					</div>
				</div><!-- grid_3 -->
				<div class="grid_3">
					<h2>Time stamp</h2>
					<div class="radioTabs" title="10">
						<input type="radio" id="timeStamp-0" name="10" value=0 /><label for="timeStamp-0">Off</label>
						<input type="radio" id="timeStamp-1" name="10" value=1 /><label for="timeStamp-1">On</label>
					</div>
				</div><!-- grid_3 -->
				
				<div class="clear"></div>

				<div class="grid_3">
					<h2>Movie quality</h2>
					<div class="radioTabs" title="13">
						<input type="radio" id="movieQuality-0" name="13" value=0 /><label for="movieQuality-0">Super</label>
						<input type="radio" id="movieQuality-1" name="13" value=1 /><label for="movieQuality-1">Standard</label>
						<input type="radio" id="movieQuality-2" name="13" value=2 /><label for="movieQuality-2">Low</label>
					</div>
				</div><!-- grid_3 -->
				<div class="grid_3">
					<h2>Wide dynamic range</h2>
					<div class="radioTabs" title="14" >
						<input type="radio" id="WDR-0" name="14" value=0 /><label for="WDR-0">Off</label>
						<input type="radio" id="WDR-1" name="14" value=1 /><label for="WDR-1">On</label>
						<input type="radio" id="WDR-2" name="14" value=2 data-minFw=117 /><label for="WDR-2">Low-light</label>
					</div>
				</div><!-- grid_3 -->
				<div class="grid_3">
					<h2>Record sound</h2>
					<div class="radioTabs" title="11">
						<input type="radio" id="movieSound-0" name="11" value=0 /><label for="movieSound-0">Off</label>
						<input type="radio" id="movieSound-1" name="11" value=1 /><label for="movieSound-1">On</label>
					</div>
				</div><!-- grid_3 -->
				<div class="grid_3">
					<h2>Update date/time</h2>
					<div class="radioTabs" title="dateTime" data-tip="This will write the timestamp ">
						<input type="radio" id="dateTime-0" name="dateTime" value=0 checked/><label for="dateTime-0">No</label>
						<input type="radio" id="dateTime-1" name="dateTime" value=1 /><label for="dateTime-1">Now</label>
						<input type="radio" id="dateTime-2" name="dateTime" value=2 /><label for="dateTime-2">In 2 min</label>
					</div>
				</div><!-- grid_3 -->

				<div class="clear"></div>

				<!-- name=12 is reserved to the movie flip parameter, which is combined in a previous set of buttons -->
				<div class="grid_12">
					<h1>Hardware settings</h1>
				</div><!-- grid_12 -->

				<div class="clear"></div>

				<div class="grid_6">
					<h2>Power off when external power is disconnected</h2>
					<div class="radioTabs" title="19">
						<input type="radio" id="externalPowerOff-0" name="19" value=0 /><label for="externalPowerOff-0">Immediately</label>
						<input type="radio" id="externalPowerOff-1" name="19" value=1 /><label for="externalPowerOff-1">Delay</label>
						<input type="radio" id="externalPowerOff-2" name="19" value=2 /><label for="externalPowerOff-2">Record to low battery power off</label>
					</div>
				</div>
				
				<div class="grid_2">	
					<h2>Power on</h2>
					<div class="radioTabs" title="15">
						<input type="radio" id="powerOn-0" name="15" value=0 /><label for="powerOn-0">Delay</label>
						<input type="radio" id="powerOn-1" name="15" value=1 /><label for="powerOn-1">Fast</label>
					</div>
				</div><!-- grid_2 -->

				<div class="grid_4">
					<h2>Auto power off</h2>
					<div class="radioTabs" title="16">
						<input type="radio" id="powerOff-0" name="16" value=0 /><label for="powerOff-0">Off</label>
						<input type="radio" id="powerOff-1" name="16" value=1 /><label for="powerOff-1">30 sec</label>
						<input type="radio" id="powerOff-2" name="16" value=2 /><label for="powerOff-2">1 min</label>
						<input type="radio" id="powerOff-3" name="16" value=3 /><label for="powerOff-3">2 min</label>
					</div>
				</div><!-- grid_4 -->

				<div class="clear"></div>

				<div class="grid_3">
					<h2>Auto Record with external power</h2>
					<div class="radioTabs" title="17">
						<input type="radio" id="extPowerRecord-0" name="17" value=0 /><label for="extPowerRecord-0">Off</label>
						<input type="radio" id="extPowerRecord-1" name="17" value=1 /><label for="extPowerRecord-1">On</label>
					</div>
				</div><!-- grid_2 -->

				<div class="grid_3">
					<h2>One Power Button to Auto Record</h2>
					<div class="radioTabs" title="18">
						<input type="radio" id="autoRecord-0" name="18" value=0 /><label for="autoRecord-0">Off</label>
						<input type="radio" id="autoRecord-1" name="18" value=1 /><label for="autoRecord-1">On</label>
					</div>
				</div><!-- grid_2 -->

				<div class="grid_3">
					<h2><br/>Charge from USB Host</h2>
					<div class="radioTabs" title="21">
						<input type="radio" id="USBcharge-0" name="21" value=0 /><label for="USBcharge-0">On</label>
						<input type="radio" id="USBcharge-1" name="21" value=1 /><label for="USBcharge-1">Off</label>
					</div>
				</div><!-- grid_2 -->

				<div class="grid_3">
					<h2><br/>Camera lens</h2>
					<div class="radioTabs" title="22">
						<input type="radio" id="lens-0" name="22" value=0 /><label for="lens-0">lens A</label>
						<input type="radio" id="lens-1" name="22" value=1 /><label for="lens-1">lens B</label>
					</div>
				</div><!-- grid_2 -->
				
				<div class="clear"></div>

				<div class="grid_3">
					<h2>Recording LED</h2>
					<div class="radioTabs" title="20">
						<input type="radio" id="recLED-0" name="20" value=0 /><label for="recLED-0">Off</label>
						<input type="radio" id="recLED-1" name="20" value=1 /><label for="recLED-1">On</label>
					</div>
				</div><!-- grid_2 -->

				<div class="grid_3">
					<h2>TV out</h2>
					<div class="radioTabs" title="24">
						<input type="radio" id="TVout-0" name="24" value=0 /><label for="TVout-0">NTSC</label>
						<input type="radio" id="TVout-1" name="24" value=1 /><label for="TVout-1">PAL</label>
					</div>
				</div><!-- grid_2 -->

				<div class="grid_3">
					<h2>TV display ratio</h2>
					<div class="radioTabs" title="25">
						<input type="radio" id="TVratio-0" name="25" value=0 /><label for="TVratio-0">4:3</label>
						<input type="radio" id="TVratio-1" name="25" value=1 /><label for="TVratio-1">16:9</label>
					</div>
				</div><!-- grid_2 -->

				<div class="grid_3">
					<h2>Light frequency</h2>
					<div class="radioTabs" title="23">
						<input type="radio" id="50Hz" name="23" value=0 /><label for="50Hz">50Hz</label>
						<input type="radio" id="60Hz" name="23" value=1 /><label for="60Hz">60Hz</label>
					</div>
				</div><!-- grid_2 -->

				<div class="clear"></div>

			</div><!-- container_12 firmware 59 --> 
			<div class="container_12" data-minFw=113>
				<div class="grid_12">
					<h1>Motion detection settings</h1>
				</div>

				<div class="clear"></div>

				<div class="grid_2">
					<h2>Enable</h2>
					<div class="radioTabs" title="26">
						<input type="radio" id="motionDetect-0" name="26" value=0 /><label for="motionDetect-0">Off</label>
						<input type="radio" id="motionDetect-1" name="26" value=1 /><label for="motionDetect-1">On</label>
					</div>
				</div><!-- grid_4 -->

				<div class="grid_4">
					<h2>Timeout</h2>
					<div class="radioTabs" title="27">
						<input type="radio" id="motionTimeout-0" name="27" value=0 /><label for="motionTimeout-0">5 sec</label>
						<input type="radio" id="motionTimeout-1" name="27" value=1 /><label for="motionTimeout-1">15 sec</label>
						<input type="radio" id="motionTimeout-2" name="27" value=2 /><label for="motionTimeout-2">30 sec</label>
						<input type="radio" id="motionTimeout-3" name="27" value=3 /><label for="motionTimeout-3">60 sec</label>
					</div>
				</div><!-- grid_4 -->

				<div class="grid_6">
					<h2>Sensitivity</h2>
					<div class="radioTabs" title="28">
						<input type="radio" id="motionSens-0" name="28" value=0 /><label for="motionSens-0">high</label>
						<input type="radio" id="motionSens-1" name="28" value=1 /><label for="motionSens-1">normal</label>
						<input type="radio" id="motionSens-2" name="28" value=2 /><label for="motionSens-2">low</label>
					</div>
				</div><!-- grid_6 -->

				<div class="clear"></div>

				<div class="grid_12">
					<h1>Picture settings</h1>
				</div>

				<div class="clear"></div>

				<div class="grid_12">
					<h2>White balance</h2>
					<div class="radioTabs" title="29">
						<input type="radio" id="WB-0" name="29" value=0 /><label for="WB-0">Auto</label>
						<input type="radio" id="WB-1" name="29" value=1 /><label for="WB-1">Sunny</label>
						<input type="radio" id="WB-2" name="29" value=2 /><label for="WB-2">Cloudy</label>
						<input type="radio" id="WB-3" name="29" value=3 /><label for="WB-3">Tungsten</label>
						<input type="radio" id="WB-4" name="29" value=4 /><label for="WB-4">Fluorescent</label>
						<input type="radio" id="WB-5" name="29" value=5 /><label for="WB-5">Custom 1</label>
						<input type="radio" id="WB-6" name="29" value=6 /><label for="WB-6">Custom 2</label>
						<input type="radio" id="WB-7" name="29" value=7 /><label for="WB-7">Custom 3</label>
					</div>
				</div><!-- grid_12 -->

				<div class="grid_4">
					<h2>Custom 1</h2>

					<div class="numberInputs">
						<input type="number" class="wb-red" name="30" min="100" max="999">
						<input type="number" class="wb-green" name="31" min="100" max="999">
						<input type="number" class="wb-blue" name="32" min="100" max="999">
					</div>
				</div><!-- grid_4 -->

				<div class="grid_4">
					<h2>Custom 2</h2>

					<div class="numberInputs">
						<input type="number" class="wb-red" name="33" min="100" max="999">
						<input type="number" class="wb-green" name="34" min="100" max="999">
						<input type="number" class="wb-blue" name="35" min="100" max="999">
					</div>
				</div><!-- grid_4 -->

				<div class="grid_4">
					<h2>Custom 3</h2>

					<div class="numberInputs">
						<input type="number" class="wb-red" name="36" min="100" max="999">
						<input type="number" class="wb-green" name="37" min="100" max="999">
						<input type="number" class="wb-blue" name="38" min="100" max="999">
					</div>
				</div><!-- grid_4 -->

				<div class="clear"></div>

				<div class="grid_12">
					<h2>Color effect</h2>
					<div class="radioTabs" title="39">
						<input type="radio" id="color-0" name="39" value=0 /><label for="color-0">Standard</label>
						<input type="radio" id="color-1" name="39" value=1 /><label for="color-1">Mono</label>
						<input type="radio" id="color-2" name="39" value=2 /><label for="color-2">Sepia</label>
						<input type="radio" id="color-3" name="39" value=3 /><label for="color-3">Cool</label>
						<input type="radio" id="color-4" name="39" value=4 /><label for="color-4">Cooler</label>
						<input type="radio" id="color-5" name="39" value=5 /><label for="color-5">Warm</label>
						<input type="radio" id="color-6" name="39" value=6 /><label for="color-6">Warmer</label>
						<input type="radio" id="color-7" name="39" value=7 /><label for="color-7">Vivid</label>
					</div>
				</div><!-- grid_12 -->

				<div class="clear"></div>			

				<div class="grid_3">
					<h2>Exposure</h2>
					<div class="numberInputs">
						<input type="number" name="40" min="-128" max="128">
						<!-- <input type="range" name="exposure" min="-128" max="128"> -->
					</div>
				</div>

				<div class="grid_3">
					<h2>Contrast</h2>
					<div class="numberInputs">
						<input type="number" name="41" min="-128" max="128">
					</div>
				</div>

				<div class="grid_3">
					<h2>Saturation</h2>
					<div class="numberInputs">
						<input type="number" name="42" min="-128" max="128">
					</div>
				</div>

				<div class="grid_3">
					<h2>Sharpness</h2>
					<div class="numberInputs">
						<input type="number" name="43" min="-128" max="128">
					</div>
				</div>
				
				<div class="clear"></div>
			</div><!-- container_12 firmware 113-->
		</div><!-- .wrapper -->
<?php include('includes/footer.php'); ?>