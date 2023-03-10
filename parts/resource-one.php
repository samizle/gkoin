<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if(!IS_AJAX) {die("<div style='width: 100%; height: 100%; position: fixed; background: #212833; left: 0; top: 0;'><div style='width: 70%; margin: 150px auto 0 auto; background: #fff; text-align:center; padding: 80px 100px; border-radius: 20px; font-family: Verdana; box-shadow: 0 0 0 3px rgba(255,255,255,0.2);'><h3 style='color: #000; text-transform: uppercase; margin: 0;'>Huh.. wait a second!</h3><h1 style='margin: 5px 0 0 0; color: #fc4349; text-transform: uppercase; letter-spacing: 1px;'>Nosey little mouse, aren't you?</h1><p style='font-size: 1em; color: #555;'>There is nothing interesting here, no point waisting your time.</p></div></div>");}
?>
<div class="connected-player-wrapper">	
	<div class="connected-player-content">
		<div class="label connected-success animated bounceIn">プレーヤーが接続されました</div>
		<div class="row small-margin">	
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
	</div>
</div>
<div class="resource-select-wrapper">	
	<div class="resource-one-wrapper">
		<div class="animated bounceIn animation-delay-600">
			<div class="label">ツムツムコインの数</div>
		</div>
		<div class="row small-margin">	
			<div class="col-6 small-padding">	
				<div class="animated bounceIn animation-delay-800">
					<div class="resource-select-item resource-select-item-one resource-select-item-1">
						<img src="img/r-item-1.png" class="resource-select-icon" />
						<div class="resource-item-value resource-item-one-value resource-item-value-1"></div>
						<div class="resource-item-label">ツムツムコイン</div>
					</div>
				</div>
			</div>
			<div class="col-6 small-padding">	
				<div class="animated bounceIn animation-delay-1000">
					<div class="resource-select-item resource-select-item-one resource-select-item-2">
						<img src="img/r-item-1.png" class="resource-select-icon" />
						<div class="resource-item-value resource-item-one-value resource-item-value-2"></div>
						<div class="resource-item-label">ツムツムコイン</div>
					</div>
				</div>
			</div>
			<div class="col-6 small-padding">	
				<div class="animated bounceIn animation-delay-1200">
					<div class="resource-select-item resource-select-item-one resource-select-item-3">
						<img src="img/r-item-1.png" class="resource-select-icon" />
						<div class="resource-item-value resource-item-one-value resource-item-value-3"></div>
						<div class="resource-item-label">ツムツムコイン</div>
					</div>
				</div>
			</div>	
			<div class="col-6 small-padding">	
				<div class="animated bounceIn animation-delay-1400">
					<div class="resource-select-item resource-select-item-one resource-select-item-4">
						<img src="img/r-item-1.png" class="resource-select-icon" />
						<div class="resource-item-value resource-item-one-value resource-item-value-4"></div>
						<div class="resource-item-label">ツムツムコイン</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>