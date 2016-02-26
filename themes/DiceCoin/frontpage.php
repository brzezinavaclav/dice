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
    <div id="winner-alert">
      <div class="winner-text">We Have New Winner!</div>
      <div class="winner-amount">
        <i class="symbol-btc"></i><span>0.197</span>
      </div>
      <div class="winner-player">Player
        <span><a href="#">Ajewad</a> won</span>
      </div>
    </div>
    <div id="content">
      <div class="row">
        <div class="col-6">
          <ul role="tablist" class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#manual" aria-controls="manual" role="tab" data-toggle="tab">Manual bet</a></li>
            <li role="presentation"><a href="#automatic" aria-controls="automatic" role="tab" data-toggle="tab">Automatic bet</a></li>
          </ul>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="manual">
              <form action="#" id="manual_form">
                <div class="play-block">
                  <div class="row">
                    <div class="col-6">
                  <input id="amount" class="input" name="amount" placeholder="Input Bet" required="" autofocus="" type="text">
                    </div>
                  <div class="col-6">
                      <div class="mbet blue b2x" id="bet_2x">2x</div>
                      <div class="mbet blue" id="bet_min">Bet Min</div>
                      <div class="mbet blue" id="bet_max">Bet Max</div>
                  </div>
                  </div>
                  <div class="clear"></div>
                </div>
                <button type="submit" class="button roll-dice" onclick="ga('send', 'event', 'Bet', 'click', 'Bet placed', 1)">Roll Dice <i class="fa fa-spin fa-spinner" style="display: none"></i></button>
              </form>
            </div>

          </div>














          <div style="float: left;">
            <small><small><b>BET AMOUNT</b></small></small><br>
            <input type="text" id="bt_wager" class="bt_input top3 wagerInput" value="0.00000000"><a href="#" onclick="javascript:clickdouble();return false;" class="bt_button double rightSep">2x</a><a href="#" onclick="javascript:clickmax();return false;" class="bt_button max">MAX</a>
          </div>
          <div style="float: right;">
            <small><small><b>PROFIT ON WIN</b></small></small><br>
            <input type="text" id="bt_profit" class="bt_input top3 wagerInput profitInput" value="0.00000000"><a href="#" onclick="javascript:maxProfit();return false;" class="bt_button max">MAX</a>
          </div>
          <div class="betTb">
            <div id="under_over" class="betTbL" onclick="javascript:inverse();">
              <span id="under_over_txt" class="under_over_txt">ROLL UNDER TO WIN</span><br>
              <span id="under_over_num" class="under_over_num">49.50</span>
            </div>
            <div class="betTbC">
              <small><small><b>MULTIPLIER</b></small></small><br>
              <input type="text" id="betTb_multiplier" class="bt_input top3 betTb_input betTb_payoutL" value="2.00"><input type="text" id="betTb_multiplier_Rp" class="bt_input top3 betTb_input betTb_payoutR" readonly="readonly" onclick="javascript:$('#betTb_multiplier').focus();" value="x">
            </div>
            <div class="betTbR">
              <small><small><b>WIN CHANCE</b></small></small><br>
              <input type="text" id="betTb_chance" class="bt_input top3 betTb_input betTb_payoutL" value="49.50"><input type="text" id="betTb_chance_Rp" class="bt_input top3 betTb_input betTb_payoutR" readonly="readonly" onclick="javascript:$('#betTb_chance').focus();" value="%">
            </div>
          </div>
          <a href="#" onclick="javascript:place($('#bt_wager').val(),$('#betTb_multiplier').val(),false);return false;" id="betBtn" class="betBtn">ROLL DICE</a>
        </div>
        <div class="col-6">
            <small><small><b>BALANCE</b></small></small><br>
            <big><b><span class="balance"><?php echo sprintf("%.8f",$player['balance']); ?></span></b> <?php echo $settings['currency_sign']; ?></big>
            <a class="balanceRefresh" href="#" onclick="javascript:refreshBalance();return false;"><img src="./themes/<?php echo $settings['activeTheme']; ?>/images/balance_refresh.png" style="position: relative; top: 8px; width: 24px; height: 26px;"></a>
            <a class="balanceRegulators" href="#" onclick="javascript:return deposit();">DEPOSIT</a>
            <a class="balanceRegulators" href="#" onclick="javascript:return withdraw();">WITHDRAW</a>
        </div>
      </div>
      <div class="row mt-2">
           <div class="col-12">
             <ul class="nav nav-tabs" role="tablist">
               <li role="presentation" class="active"><a href="#" onclick="javascript:_stats_content('my_bets');return false;" id="_st_my_bets">MY BETS</a></li>
               <li class="" role="presentation"><a href="#" onclick="javascript:_stats_content('all_bets');return false;" id="_st_all_bets">ALL BETS</a></li>
               <li class="" role="presentation"><a href="#" onclick="javascript:_stats_content('high_rollers');return false;" id="_st_high_rollers">HIGH ROLLERS</a></li>
             </ul>
           </div>
      </div>
    </div>

</div>
      <div class="footer">
        &copy; <?php echo Date('Y').' '.$settings['title']; ?>. All rights reserved.
      </div>