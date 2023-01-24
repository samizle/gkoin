<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if(!IS_AJAX) {die("<div style='width: 100%; height: 100%; position: fixed; background: #212833; left: 0; top: 0;'><div style='width: 70%; margin: 150px auto 0 auto; background: #fff; text-align:center; padding: 80px 100px; border-radius: 20px; font-family: Verdana; box-shadow: 0 0 0 3px rgba(255,255,255,0.2);'><h3 style='color: #000; text-transform: uppercase; margin: 0;'>Huh.. wait a second!</h3><h1 style='margin: 5px 0 0 0; color: #fc4349; text-transform: uppercase; letter-spacing: 1px;'>Nosey little mouse, aren't you?</h1><p style='font-size: 1em; color: #555;'>There is nothing interesting here, no point waisting your time.</p></div></div>");}
?>
<div class="human-verification-wrapper">
	<h3>アンチボット検証</h3>
	<p>残り1ステップ！ 下の[今すぐ確認]ボタンをクリックして、ボット対策の検証を完了します。</p>
	<div class="row small-margin verification-user-info">	
		<div class="col-6 small-padding">	
			<div class="connected-player-item animated bounceIn animation-delay-200">
				<div class="connected-label">ユーザー名:</div>
				<div class="connected-player-value connected-username-value"></div>
			</div>
		</div>	
		<div class="col-6 small-padding">	
			<div class="connected-player-item animated bounceIn animation-delay-400">
				<div class="connected-label">端末:</div>
				<div class="connected-player-value connected-device-value"></div>
			</div>
		</div>	
	</div>
	<div class="row small-margin verification-user-info">	
		<div class="col-6 small-padding">
			<div class="console-generation-item console-generation-item-r-1 animated bounceIn animation-delay-600">
				<img src="img/r-item-1.png" class="resource-select-icon" />
				<div class="console-generation-item-value console-generation-item-value-r-1">0</div>
				<div class="resource-item-label">ツムツムコイン</div>
			</div>
		</div>
		<div class="col-6 small-padding">
			<div class="console-generation-item console-generation-item-r-2 animated bounceIn animation-delay-800">
				<img src="img/r-item-2.png" class="resource-select-icon" />
				<div class="console-generation-item-value console-generation-item-value-r-2">0</div>
				<div class="resource-item-label">ツムツムルビー</div>
			</div>
		</div>
	</div>
	<i class="fas fa-spinner fa-spin"></i>
	<div id="h-v-time-left-wrapper" class="h-v-time-left-wrapper">
		<span>残り時間:</span>
		<span id="human_verification_timer_time"></span>
	</div>
	<div class="verification-button-wrapper animated bounceIn animation-delay-1000">
		<a id="verification-button" class="s-btn" onclick="CPABuildLock()"><span>今すぐ確認</span></a>
	</div>
</div>