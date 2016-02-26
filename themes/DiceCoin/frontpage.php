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
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce consectetuer risus a nunc. In rutrum. Phasellus rhoncus. Fusce wisi. Quisque tincidunt scelerisque libero. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Suspendisse nisl. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor.</p>

        <p>Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Nullam eget nisl. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Fusce consectetuer risus a nunc. Nulla pulvinar eleifend sem. Integer imperdiet lectus quis justo. Pellentesque ipsum. Maecenas libero. Aenean placerat. Maecenas libero. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Nulla non arcu lacinia neque faucibus fringilla. Maecenas libero. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Aenean vel massa quis mauris vehicula lacinia. Duis viverra diam non justo. Aliquam erat volutpat.</p>

        <p>Aliquam erat volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Maecenas sollicitudin. Etiam egestas wisi a erat. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Pellentesque arcu. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Donec iaculis gravida nulla. Phasellus faucibus molestie nisl. Etiam posuere lacus quis dolor. Nam sed tellus id magna elementum tincidunt. Aliquam ornare wisi eu metus. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Etiam neque. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim.</p>

        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ac dolor sit amet purus malesuada congue. Etiam neque. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Proin in tellus sit amet nibh dignissim sagittis. Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu. Duis viverra diam non justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Proin mattis lacinia justo. Aliquam in lorem sit amet leo accumsan lacinia. Integer lacinia. Phasellus rhoncus. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Aliquam erat volutpat. Pellentesque arcu.</p>

        <p>Aliquam ornare wisi eu metus. Phasellus et lorem id felis nonummy placerat. Nulla pulvinar eleifend sem. Mauris dictum facilisis augue. Aenean fermentum risus id tortor. Fusce suscipit libero eget elit. Praesent dapibus. Duis pulvinar. Fusce wisi. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Nulla quis diam. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Etiam quis quam. Integer vulputate sem a nibh rutrum consequat. Suspendisse nisl. Nulla quis diam.</p>
        </div>
      <div class="col-6">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce consectetuer risus a nunc. In rutrum. Phasellus rhoncus. Fusce wisi. Quisque tincidunt scelerisque libero. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Suspendisse nisl. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor.</p>

        <p>Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Nullam eget nisl. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Fusce consectetuer risus a nunc. Nulla pulvinar eleifend sem. Integer imperdiet lectus quis justo. Pellentesque ipsum. Maecenas libero. Aenean placerat. Maecenas libero. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Nulla non arcu lacinia neque faucibus fringilla. Maecenas libero. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Aenean vel massa quis mauris vehicula lacinia. Duis viverra diam non justo. Aliquam erat volutpat.</p>

        <p>Aliquam erat volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Maecenas sollicitudin. Etiam egestas wisi a erat. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Pellentesque arcu. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Donec iaculis gravida nulla. Phasellus faucibus molestie nisl. Etiam posuere lacus quis dolor. Nam sed tellus id magna elementum tincidunt. Aliquam ornare wisi eu metus. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Etiam neque. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim.</p>

        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ac dolor sit amet purus malesuada congue. Etiam neque. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Proin in tellus sit amet nibh dignissim sagittis. Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu. Duis viverra diam non justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Proin mattis lacinia justo. Aliquam in lorem sit amet leo accumsan lacinia. Integer lacinia. Phasellus rhoncus. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Aliquam erat volutpat. Pellentesque arcu.</p>

        <p>Aliquam ornare wisi eu metus. Phasellus et lorem id felis nonummy placerat. Nulla pulvinar eleifend sem. Mauris dictum facilisis augue. Aenean fermentum risus id tortor. Fusce suscipit libero eget elit. Praesent dapibus. Duis pulvinar. Fusce wisi. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Nulla quis diam. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Etiam quis quam. Integer vulputate sem a nibh rutrum consequat. Suspendisse nisl. Nulla quis diam.</p>
          </div>
          <!--// BETTING BOT -- BASICLY INVISIBLE -->
      </div>

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