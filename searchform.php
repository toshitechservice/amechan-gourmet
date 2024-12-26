<!-- Search Widget -->
<div class="widget-item">

  <form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" class="amechan-form">
    <label for="s" class="assistive-text widget-title">検索</label>
    <div class="search-widget-amechan">
      <input type="text" name="s" id="s" placeholder="未入力可" value="<?php echo isset($_GET['s']) ? esc_attr($_GET['s']) : ''; ?>"/>
    </div>

    <div class="select-widget-amechan">
      <select name="price">
        <option value="" selected>価格帯絞り込み</option>
        <option value="〜1999円">〜1999円</option>
        <option value="2000円〜2999円">2000円〜2999円</option>
        <option value="3000円〜">3000円〜</option>
      </select>
    </div>
    <button type="submit" title="Search" class="amechan-button"><i class="bi bi-search"></i></button>
    <p>※価格帯選択後に検索ボタン</p>
  </form>

</div>

<!--/Search Widget -->