<?php
/*
 *  © CoinDice 
 *  Demo: http://www.btcircle.com/dice
 *  Please do not copy or redistribute.
 *  More licences we sell, more products we develop in the future.  
*/


?>
<div id="container">
  <div class="header">
    <div class="menu-line">
      <div class="logo">
        <a href="<?php echo $settings['url']; ?>">
          <img src="themes/DiceCoin/images/logo.png" alt="<?php echo $settings['title']; ?>" title="<?php echo $settings['title']; ?>">
        </a>
      </div>
        <div class="menu">
          <?php if ($settings['inv_enable']==1) { ?><a href="#" onclick="javascript:return invest();">INVEST</a><?php } ?>                         
          <a href="#" onclick="javascript:return fair();">FAIR?</a>                         
          <a href="#" onclick="javascript:return account();">ACCOUNT</a>
        </div>
      </div>
  </div>
    <div id="content">
      <div class="col-6">
        </div>
      <div class="col-6">

          </div>
          <!--// BETTING BOT -- BASICLY INVISIBLE -->


           <div class="col-12">
             <a href="#" onclick="javascript:_stats_content('my_bets');return false;" id="_st_my_bets">MY BETS</a>
             <a href="#" onclick="javascript:_stats_content('all_bets');return false;" id="_st_all_bets">ALL BETS</a>
             <a href="#" onclick="javascript:_stats_content('high_rollers');return false;" id="_st_high_rollers">HIGH ROLLERS</a>

             <?php if ($settings['giveaway']==1) { ?><a href="#" class="mini" onclick="javascript:_stats_content('giveaway');return false;" id="_st_giveaway"><img src="./themes/<?php echo $settings['activeTheme']; ?>/icons/giveaway.png" style="position: relative; top: 5px; width: 35px; height: 35px;"></a><?php } ?>
             <a href="#" class="mini" onclick="javascript:_stats_content('news');return false;" id="_st_news"><img src="./themes/<?php echo $settings['activeTheme']; ?>/icons/news.png" style="position: relative; top: 5px; width: 35px; height: 35px;"></a>
             <?php if ($settings['chat_enable']==1) { ?><a href="#" class="mini" onclick="javascript:_stats_content('chat');return false;" id="_st_chat"><img src="./themes/<?php echo $settings['activeTheme']; ?>/icons/chat.png" style="position: relative; top: 5px; width: 35px; height: 35px;"></a><?php } ?>
             <?php if ($settings['bot_enable']==1) { ?><a href="#" class="mini" onclick="javascript:robotLayoutChange();return false;" id="_st_automat"><img src="./themes/<?php echo $settings['activeTheme']; ?>/icons/automat.png" style="position: relative; top: 5px; width: 35px; height: 35px;"></a><?php } ?>
             <a href="#" class="mini" onclick="javascript:_stats_content('stats');return false;" id="_st_stats"><img src="./themes/<?php echo $settings['activeTheme']; ?>/icons/stats.png" style="position: relative; top: 8px; width: 35px; height: 28px;"></a>
           </div>


           <div id="all" class="stats">
           </div>


    </div>

</div>
      <div class="footer">
        &copy; <?php echo Date('Y').' '.$settings['title']; ?>. All rights reserved.
      </div>