<html><head>
    <title>Bitcoin Dice Game — Dicecoin.io</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Provably fair dice — play instantly with Bitcoins. 1% House Edge. No registration required. Bitcoin faucet — earn free Bitcoins.">

    <link href="//fonts.googleapis.com/css?family=Lora:700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/emojione/1.3.0/assets/css/emojione.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="https://dicecoin.io/images/favicon.png">

    <!--[if IE]>
    <link rel="icon" href="https://dicecoin.io/images/favicon.ico" type="image/x-icon" />
    <![endif]-->

    <link rel="stylesheet" href="dicecoin.min.css">

</head>
<body>
<div class="wrapper">
    <div class="mainCanteiner">
        <div class="header adaptive-block">
            <div class="logo">
                <a href="https://dicecoin.io/">
                    <img src="https://dicecoin.io/images/logo.png" alt="Dicecoin" title="Dicecoin">
                </a>
            </div>
            <div class="user-menu">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">
                        <span id="symbol">BTC</span>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="https://dicecoin.io/index/symbol/LTC">LTC</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="https://dicecoin.io/index/symbol/DOGE">DOGE</a></li>
                    </ul>
                </div>
                <?php if ($settings['inv_enable']==1) { ?><a href="#" onclick="javascript:return invest();">INVEST</a><?php } ?>
                <a href="#" onclick="javascript:return fair();">FAIR?</a>
                <a href="#" onclick="javascript:return account();">ACCOUNT</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="winner-alert">
            <div class="winner-text">We Have New Winner!</div>
            <div class="winner-amount">
                <i class="symbol-btc"></i><span>0.197</span>
            </div>
            <div class="winner-player">Player
                <span><a href="https://dicecoin.io/user/stats/L8mnxw" onclick="ga('send', 'event', 'Profile', 'click', 'Who is the winner?', 1)">Ajewad</a> won</span>
            </div>
        </div>
        <div class="content main adaptive-block">
            <div class="main-ui-row">
                <ul role="tablist" class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="#manual" aria-controls="manual" role="tab" data-toggle="tab">Manual bet</a></li>
                    <li class="" role="presentation"><a href="#automatic" aria-controls="automatic" role="tab" data-toggle="tab">Automatic bet</a></li>
                </ul>
            </div>

            <div class="total-info">
                <div class="game-info">

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="manual">
                            <form action="#" id="manual_form">
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
                                <button type="submit" class="button roll-dice" onclick="ga('send', 'event', 'Bet', 'click', 'Bet placed', 1)">Roll Dice <i class="fa fa-spin fa-spinner" style="display: none"></i></button>
                            </form>
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
                                <div class="label">Your balance:</div>
                            </div>
                            <div class="col-xs-8">
                                <i class="symbol-btc"></i><strong id="balance" data-balance="">0</strong>
                            </div>
                        </div>
                        <div data-original-title="Awaiting 1 confirmation(s)" id="pending_balance" class="row unconfirmed" title="" data-toggle="tooltip" data-placement="top" style="display:none" "="">
                        <div class="col-xs-4">
                            <div class="label">Pending balance:</div>
                        </div>
                        <div class="col-xs-8">
                            <i class="symbol-btc"></i><strong id="unconfirmed_balance">0</strong>
                        </div>
                    </div>
                </div>

                <div class="buttons-group player-group">
                    <a class="button deposit deposit-block" href="#" onclick="javascript:return deposit();">DEPOSIT</a>
                    <a class="button withdraw withdraw-block" href="#" onclick="javascript:return withdraw();">WITHDRAW</a>
                </div>
            </div>

        </div>

        <div class="data" role="tabpanel">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#recent_bets" aria-controls="recent_bets" role="tab" data-toggle="tab">Recent bets</a></li>
                <li class="" role="presentation"><a href="#my_bets" aria-controls="my_bets" role="tab" data-toggle="tab">My bets</a></li>
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
                                <tbody><tr><td class="first color status">WIN</td><td class="fourth"><a href="/verify/bet/7A08P1q">1.1x</a></td><td class="fifth">382 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="symbol-btc"></i>0.009999</td><td class="color seventh"><i class="symbol-btc"></i>0.0009999</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="" class="default-row win">
                            <table>
                                <tbody>
                                    <tr><td class="first color status">WIN</td><td class="fourth"><a href="/verify/bet/qlaYk6V">1.1x</a></td><td class="fifth">1&nbsp;628 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="symbol-btc"></i>0.009999</td><td class="color seventh"><i class="symbol-btc"></i>0.0009999</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="" class="default-row lose">
                            <table>
                                <tbody>
                                    <tr><td class="first color status">LOSE</td><td class="fourth"><a href="/verify/bet/0e2j0oV">1.1x</a></td><td class="fifth">9&nbsp;975 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="symbol-btc"></i>0.0009999</td><td class="color seventh"><i class="symbol-btc"></i>-0.0009999</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="" class="default-row win">
                            <table>
                                <tbody>
                                <tr><td class="first color status">WIN</td><td class="fourth"><a href="/verify/bet/3aRmG11">1.1x</a></td><td class="fifth">8&nbsp;188 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="symbol-btc"></i>0.00009999</td><td class="color seventh"><i class="symbol-btc"></i>0.00000999</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="" class="default-row win">
                            <table>
                                <tbody>
                                <tr><td class="first color status">WIN</td><td class="fourth"><a href="/verify/bet/3aRmG11">1.1x</a></td><td class="fifth">8&nbsp;188 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="symbol-btc"></i>0.00009999</td><td class="color seventh"><i class="symbol-btc"></i>0.00000999</td></tr>
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
                        <table>
                            <tbody><tr><td class="first color status">WIN</td><td class="fourth"><a href="/verify/bet/7A08P1q">1.1x</a></td><td class="fifth">382 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="symbol-btc"></i>0.009999</td><td class="color seventh"><i class="symbol-btc"></i>0.0009999</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
<div class="footer">
    <div class="copyright">Copyright ©2013—2016 Dicecoin.</div>
    <div class="links">
        <a href="https://dicecoin.io/user/login">Login</a>
        <a href="mailto:contact@dicecoin.io">Contact</a>
        <a href="https://bitcointalk.org/index.php?topic=463273.0">Bitcointalk</a>
        <a href="https://www.facebook.com/Dicecoin-1032219373505393/">Facebook</a>
        <a href="https://dicecoin.io/terms">Terms of Use</a>
    </div>
    <div class="clear"></div>
</div>
</body>
</html>