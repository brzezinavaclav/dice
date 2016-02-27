    <link href="//fonts.googleapis.com/css?family=Lora:700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/emojione/1.3.0/assets/css/emojione.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="https://dicecoin.io/images/favicon.png">

    <!--[if IE]>
    <link rel="icon" href="https://dicecoin.io/images/favicon.ico" type="image/x-icon" />
    <![endif]-->


<body>
<div class="wrapper">
    <div class="mainCanteiner">
        <div class="header adaptive-block">
            <div class="logo">
                <a href="http://<?php echo $settings['url']; ?>">
                    <img src="themes/DiceCoin2/images/logo.png" alt="<?php echo $settings['title']; ?>" title="<?php echo $settings['title']; ?>">
                </a>
            </div>
            <div class="user-menu">
                <?php if ($settings['inv_enable']==1) { ?><a href="#" onclick="javascript:return invest();">INVEST</a><?php } ?>
                <a href="#" onclick="javascript:return fair();">FAIR?</a>
                <a href="#" onclick="javascript:return account();">ACCOUNT</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="winner-alert">
            <div class="winner-text">We Have New Winner!</div>
            <div class="winner-amount">
                <i class="fa fa-btc"></i><span>0.197</span>
            </div>
            <div class="winner-player">Player
                <span><a href="#">Ajewad</a> won</span>
            </div>
        </div>
        <div class="content main adaptive-block">
            <div id="tab_bet">
                <div class="main-ui-row">
                    <ul role="tablist" class="nav nav-tabs">
                        <li role="presentation" class="tab active"><a href="#manual" aria-controls="manual" role="tab" data-toggle="tab">Manual bet</a></li>
                        <li role="presentation" class="tab"><a href="#automatic" aria-controls="automatic" role="tab" data-toggle="tab">Automatic bet</a></li>
                    </ul>
                </div>
                <div class="total-info">
                    <div class="game-info">
                        <div class="tab-content">
                            <div class="select info-block">
                                <div class="block-content value">
                                    <table>
                                        <thead>
                                        <tr>
                                            <td>Game</td>
                                            <td class="second">Chance</td>
                                            <td class="third">Payout</td>
                                            <td>Max bet</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr data-threshold="5000" data-min-bet="100" data-max-bet="530000000">
                                            <td>&lt;5,000</td>
                                            <td class="second">50<span class="mini">%</span></td>
                                            <td class="third">1.98<span class="mini">x</span></td>
                                            <td>5.3</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="drop-icon"></div>
                                </div>
                                <div class="variants">
                                    <div class="block-content">
                                        <div class="variant">
                                            <table>
                                                <tbody>
                                                <tr data-threshold="10" data-min-bet="100" data-max-bet="525000">
                                                    <td>&lt;10</td>
                                                    <td class="second">0.1<span class="mini">%</span></td>
                                                    <td class="third">990<span class="mini">x</span></td>
                                                    <td>0.00525</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="variant">
                                            <table>
                                                <tbody>
                                                <tr data-threshold="100" data-min-bet="100" data-max-bet="5300000">
                                                    <td>&lt;100</td>
                                                    <td class="second">1<span class="mini">%</span></td>
                                                    <td class="third">99<span class="mini">x</span></td>
                                                    <td>0.053</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane active" id="manual">
                                    <div class="play-block">
                                        <input  id="bt_wager" class="input"  placeholder="Input Bet" required="" autofocus="" type="text"  value="0.00000000">
                                        <div class="choise">
                                            <div class="block-content">
                                                <div class="mbet blue b2x"><a href="#" onclick="javascript:clickdouble();return false;" class="bt_button double rightSep">2x</a></div>
                                                <div class="mbet blue" id="bet_max"><a href="#" onclick="javascript:maxProfit();return false;" class="bt_button max">Bet Max</a></div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                <a href="#" onclick="javascript:place($('#bt_wager').val(),$('#betTb_multiplier').val(),false);return false;" id="betBtn" class="button roll-dice">ROLL DICE</a>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="automatic">
                                <form action="#" id="auto_form">
                                    <div class="auto-play-block">
                                        <div class="row">
                                            <input id="start_bet" class="input" name="amount" placeholder="Start Bet" required="" autofocus="" type="text">
                                            <input id="loss_multiplier" class="input" name="amount" placeholder="Loss multiplier" required="" type="text">
                                            <input id="max_bet" class="input" name="amount" placeholder="Max bet" type="text">
                                        </div>
                                        <div class="row">
                                            <input id="num_bets" class="input" name="amount" placeholder="Number of bets" type="text">
                                            <input id="target_profit" class="input" name="amount" placeholder="Target profit" type="text">
                                            <input id="max_loss" class="input" name="amount" placeholder="Max loss" type="text">
                                        </div>
                                    </div>
                                    <button id="auto_start" type="submit" class="button roll-dice" onclick="ga('send', 'event', 'Bet', 'click', 'Auto-bet placed', 1)"><span>Start</span> <i class="fa fa-spin fa-spinner" style="display: none"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="player-info">
                        <div class="player-table">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="label">Login:</div>
                                </div>
                                <div class="col-xs-8">
                                    <span class="blue"><a href="#" id="login">Iyudawivi</a></span>
                                    <a href="#" id="change_login" title="Change login"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="label">Password:</div>
                                </div>
                                <div class="col-xs-8">
                                    <span id="password">PapeFHdwl7knx8</span>
                                    <a href="#" id="reset_password" title="Reset password"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="label">Bets:</div>
                                </div>
                                <div class="col-xs-8">
                                    <span id="bets">0</span> - <span class="green" id="wins">0</span> / <span class="red" id="loses">0</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="label">Your balance:</div>
                                </div>
                                <div class="col-xs-8">
                                    <i class="fa fa-btc"></i><strong id="balance" data-balance="">0</strong>
                                </div>
                            </div>
                            <div data-original-title="Awaiting 1 confirmation(s)" id="pending_balance" class="row unconfirmed" title="" data-toggle="tooltip" data-placement="top" style="display:none" "="">
                            <div class="col-xs-4">
                                <div class="label">Pending balance:</div>
                            </div>
                            <div class="col-xs-8">
                                <i class="fa fa-btc"></i><strong id="unconfirmed_balance">0</strong>
                            </div>
                        </div>
                    </div>

                    <div class="buttons-group player-group">
                        <a class="button deposit deposit-block" href="#" onclick="javascript:return deposit();">DEPOSIT</a>
                        <a class="button withdraw withdraw-block" href="#" onclick="javascript:return withdraw();">WITHDRAW</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="data" id="tab_bets" role="tabpanel">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="tab active"><a href="#recent_bets" aria-controls="recent_bets" role="tab" data-toggle="tab">Recent bets</a></li>
                <li role="presentation" class="tab"><a href="#my_bets" aria-controls="my_bets" role="tab" data-toggle="tab">My bets</a></li>
            </ul>

            <div class="tabs tab-content">
                <div id="recent_bets" role="tabpanel" class="tab-pane fade active in">
                    <div class="default-row headingrow">
                        <table>
                            <thead>
                            <tr>
                                <td class="first">Result</td>
                                <td class="fourth">Payout</td>
                                <td class="fifth">Game</td>
                                <td class="third">Chance</td>
                                <td class="sixth">Bet</td>
                                <td class="seventh">Profit</td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="livebets" class="results">
                        <div style="" class="default-row win">
                            <table>
                                <tbody><tr><td class="first color status">WIN</td><td class="fourth"><a href="#">1.1x</a></td><td class="fifth">382 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="fa fa-btc"></i>0.009999</td><td class="color seventh"><i class="fa fa-btc"></i>0.0009999</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="" class="default-row win">
                            <table>
                                <tbody>
                                    <tr><td class="first color status">WIN</td><td class="fourth"><a href="#">1.1x</a></td><td class="fifth">1&nbsp;628 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="fa fa-btc"></i>0.009999</td><td class="color seventh"><i class="fa fa-btc"></i>0.0009999</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="" class="default-row lose">
                            <table>
                                <tbody>
                                    <tr><td class="first color status">LOSE</td><td class="fourth"><a href="#">1.1x</a></td><td class="fifth">9&nbsp;975 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="fa fa-btc"></i>0.0009999</td><td class="color seventh"><i class="fa fa-btc"></i>-0.0009999</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="" class="default-row win">
                            <table>
                                <tbody>
                                <tr><td class="first color status">WIN</td><td class="fourth"><a href="#">1.1x</a></td><td class="fifth">8&nbsp;188 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="fa fa-btc"></i>0.00009999</td><td class="color seventh"><i class="fa fa-btc"></i>0.00000999</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="" class="default-row win">
                            <table>
                                <tbody>
                                <tr><td class="first color status">WIN</td><td class="fourth"><a href="#">1.1x</a></td><td class="fifth">8&nbsp;188 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="fa fa-btc"></i>0.00009999</td><td class="color seventh"><i class="fa fa-btc"></i>0.00000999</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="my_bets" role="tabpanel" class="tab-pane fade">
                    <div class="default-row headingrow">
                        <table>
                            <thead>
                            <tr>
                                <td class="first">Result</td>
                                <td class="fourth">Payout</td>
                                <td class="fifth">Game</td>
                                <td class="third">Chance</td>
                                <td class="sixth">Bet</td>
                                <td class="seventh">Profit</td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="result" class="results">
                        <div style="" class="default-row win">
                            <table>
                                <tbody>
                                <tr><td class="first color status">WIN</td><td class="fourth"><a href="#">1.1x</a></td><td class="fifth">8&nbsp;188 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="fa fa-btc"></i>0.00009999</td><td class="color seventh"><i class="fa fa-btc"></i>0.00000999</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        </div>
    </div>
<div class="footer">
    <div class="copyright">&copy; <?php echo Date('Y').' '.$settings['title']; ?>. All rights reserved.</div>
    <div class="links">
        <a href="https://dicecoin.io/user/login">Login</a>
        <a href="mailto:contact@dicecoin.io">Contact</a>
        <a href="https://bitcointalk.org/index.php?topic=463273.0">Bitcointalk</a>
        <a href="https://www.facebook.com/Dicecoin-1032219373505393/">Facebook</a>
        <a href="https://dicecoin.io/terms">Terms of Use</a>
    </div>
    <div class="clear"></div>
</div>
<script>
    (function() {

        'use strict';

        /**
         * tabs
         *
         * @description The Tabs component.
         * @param {Object} options The options hash
         */
        var tabs = function(options) {

            var el = document.querySelector(options.el);
            var tabNavigationLinks = el.querySelectorAll(options.tabNavigationLinks);
            var tabContentContainers = el.querySelectorAll(options.tabContentContainers);
            var activeIndex = 0;
            var initCalled = false;

            /**
             * init
             *
             * @description Initializes the component by removing the no-js class from
             *   the component, and attaching event listeners to each of the nav items.
             *   Returns nothing.
             */
            var init = function() {
                if (!initCalled) {
                    initCalled = true;
                    for (var i = 0; i < tabNavigationLinks.length; i++) {
                        var link = tabNavigationLinks[i];
                        handleClick(link, i);
                    }
                }
            };

            /**
             * handleClick
             *
             * @description Handles click event listeners on each of the links in the
             *   tab navigation. Returns nothing.
             * @param {HTMLElement} link The link to listen for events on
             * @param {Number} index The index of that link
             */
            var handleClick = function(link, index) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    goToTab(index);
                });
            };

            /**
             * goToTab
             *
             * @description Goes to a specific tab based on index. Returns nothing.
             * @param {Number} index The index of the tab to go to
             */
            var goToTab = function(index) {
                if (index !== activeIndex && index >= 0 && index <= tabNavigationLinks.length) {
                    tabNavigationLinks[activeIndex].classList.remove('active');
                    tabNavigationLinks[index].classList.add('active');
                    tabContentContainers[activeIndex].classList.remove('active');
                    tabContentContainers[activeIndex].classList.remove('in');
                    tabContentContainers[index].classList.add('active');
                    tabContentContainers[index].classList.add('in');
                    activeIndex = index;
                }
            };

            /**
             * Returns init and goToTab
             */
            return {
                init: init,
                goToTab: goToTab
            };

        };

        /**
         * Attach to global namespace
         */
        window.tabs = tabs;

    })();
    var tabBet = tabs({
        el: '#tab_bet',
        tabNavigationLinks: '.tab',
        tabContentContainers: '.tab-pane'
    });
    tabBet.init();

    var tabBets = tabs({
        el: '#tab_bets',
        tabNavigationLinks: '.tab',
        tabContentContainers: '.tab-pane'
    });
    tabBets.init();
</script>