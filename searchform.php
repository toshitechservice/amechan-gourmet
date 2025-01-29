<!-- Search Widget -->
<div class="widget-item">

	<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" class="amechan-form">
		<label for="s" class="assistive-text widget-title">絞り込み検索</label>
		<div class="search-widget-amechan">
			<input type="text" name="s" id="s" placeholder="例: ラーメン, ハンバーグ, 本町 など" value="<?php echo isset($_GET['s']) ? esc_attr($_GET['s']) : ''; ?>"/>
		</div>

		<div class="select-widget-amechan">
			<select name="price">
				<option value="" <?php echo empty($_GET['price']) ? 'selected' : ''; ?>>価格帯絞り込み</option>
				<option value="〜1999円" <?php echo (isset($_GET['price']) && $_GET['price'] === '〜1999円') ? 'selected' : ''; ?>>〜1999円</option>
				<option value="2000円〜2999円" <?php echo (isset($_GET['price']) && $_GET['price'] === '2000円〜2999円') ? 'selected' : ''; ?>>2000円〜2999円</option>
				<option value="3000円〜" <?php echo (isset($_GET['price']) && $_GET['price'] === '3000円〜') ? 'selected' : ''; ?>>3000円〜</option>
			</select>
		</div>
		<button type="submit" title="Search" class="amechan-button">検索</button>
	</form>

</div>

<!--/Search Widget -->