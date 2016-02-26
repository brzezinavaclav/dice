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

    <link rel="stylesheet" href="css/main.css">

    <!-- Google Analytics -->
    <script src="//www.google-analytics.com/analytics.js" async=""></script><script>
        (function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-46758042-1', 'dicecoin.io');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
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
                <a href="https://dicecoin.io/stats">Stats</a>
                <a href="https://dicecoin.io/faq">FAQ</a>
                <a href="https://dicecoin.io/affiliate">Affiliate</a>
                <a href="https://dicecoin.io/verify">Verification</a>
                <a href="https://dicecoin.io/">Play</a>
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
                                    <input id="amount" class="input" name="amount" placeholder="Input Bet" required="" autofocus="" type="text">
                                    <div class="choise">
                                        <div class="block-content">
                                            <div class="mbet blue b2x" id="bet_2x">2x</div>
                                            <div class="mbet blue" id="bet_min">Bet Min</div>
                                            <div class="mbet blue" id="bet_max">Bet Max</div>
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
        <span class="buttons-group-glued">
            <a id="deposit" class="button deposit deposit-block">Deposit</a>
            <a id="faucet" class="button faucet deposit-block">Faucet</a>
        </span>
                    <a id="withdraw" class="button withdraw withdraw-block">Withdraw</a>
                    <a id="history" class="button history"><span class="glyphicon glyphicon-align-justify"></span><span id="history_unread" class="unread" style="display:none"></span></a>
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
                    <div id="livebets" class="results"><div style="" class="default-row win"><table><tbody><tr><td class="first color status">WIN</td><td class="fourth"><a href="/verify/bet/7A08P1q">1.1x</a></td><td class="fifth">382 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="symbol-btc"></i>0.009999</td><td class="color seventh"><i class="symbol-btc"></i>0.0009999</td></tr></tbody></table></div><div style="" class="default-row win"><table><tbody><tr><td class="first color status">WIN</td><td class="fourth"><a href="/verify/bet/qlaYk6V">1.1x</a></td><td class="fifth">1&nbsp;628 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="symbol-btc"></i>0.009999</td><td class="color seventh"><i class="symbol-btc"></i>0.0009999</td></tr></tbody></table></div><div style="" class="default-row lose"><table><tbody><tr><td class="first color status">LOSE</td><td class="fourth"><a href="/verify/bet/0e2j0oV">1.1x</a></td><td class="fifth">9&nbsp;975 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="symbol-btc"></i>0.0009999</td><td class="color seventh"><i class="symbol-btc"></i>-0.0009999</td></tr></tbody></table></div><div style="" class="default-row win"><table><tbody><tr><td class="first color status">WIN</td><td class="fourth"><a href="/verify/bet/3aRmG11">1.1x</a></td><td class="fifth">8&nbsp;188 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="symbol-btc"></i>0.00009999</td><td class="color seventh"><i class="symbol-btc"></i>0.00000999</td></tr></tbody></table></div><div style="" class="default-row win"><table><tbody><tr><td class="first color status">WIN</td><td class="fourth"><a href="/verify/bet/5VM4g1A">1.1x</a></td><td class="fifth">7&nbsp;807 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="symbol-btc"></i>0.00009999</td><td class="color seventh"><i class="symbol-btc"></i>0.00000999</td></tr></tbody></table></div><div style="" class="default-row win"><table><tbody><tr><td class="first color status">WIN</td><td class="fourth"><a href="/verify/bet/6a3rv1Y">1.1x</a></td><td class="fifth">3&nbsp;977 &lt; 9&nbsp;000</td><td class="third">90%</td><td class="sixth"><i class="symbol-btc"></i>0.00009999</td><td class="color seventh"><i class="symbol-btc"></i>0.00000999</td></tr></tbody></table></div>










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
                        <p class="nodata">No bets yet.</p>
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
</div>

<div id="ads"></div><div style="" class="chat-trigger">Open Chat<div style="" class="chat-badge">6</div></div><div style="display: none; width: 350px; height: 400px; top: 319px; left: 0px;" class="chat-container ui-draggable ui-resizable">   <div class="chat-header ui-draggable-handle">       <div class="chat-title">Dicecoin Chat</div>       <div class="chat-close"><i class="fa fa-times"></i></div>   </div>   <div class="chat-history"><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/LPV9vZ">AlgoRythm:</a></div><div class="chat-message">4K bets!</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/LPV9vZ">AlgoRythm:</a></div><div class="chat-message">and about 0 profit</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/LPV9vZ">AlgoRythm:</a></div><div class="chat-message">I am bad at this</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ipynezeba">Ipynezeba</a> won 223,030 DOGE! <a href="/verify/bet/wGaQVQQ">wGaQVQQ</a> <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/zmBNaP">Uvydywoje:</a></div><div class="chat-message">I can put on the site Bitcoin (dicecoin)?</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/zmBNaP">Uvydywoje:</a></div><div class="chat-message">how does that?</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/LPV9vZ">AlgoRythm:</a></div><div class="chat-message">Yes, click "Deposit", and then enter your bitcoin address</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/LM2gvD">lahcencompaq:</a></div><div class="chat-message">GOOD</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/zmBNaP">Uvydywoje:</a></div><div class="chat-message">anyone know the people who are profiting from the site ....? To learn strategies?</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/zmBNaP">Uvydywoje:</a></div><div class="chat-message">people like Idaromaza (9 btc today), or Ex Hig!<br>4.6 BTC in profit</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/zmBNaP">Uvydywoje:</a></div><div class="chat-message">????????</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/LPV9vZ">AlgoRythm:</a></div><div class="chat-message">no</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/LPV9vZ">AlgoRythm:</a></div><div class="chat-message">I just keep losing XD</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/LPV9vZ">AlgoRythm:</a></div><div class="chat-message">Do the auto bet thing tho and vary your bets</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/LPV9vZ">AlgoRythm:</a></div><div class="chat-message">set max losses and readjust</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/zmBNaP">Uvydywoje:</a></div><div class="chat-message">this is <img class="emojione" alt="🙊" src="//cdn.jsdelivr.net/emojione/assets/png/1F64A.png?v=1.2.4">gica loss ... and hit ... every time we lose more the tendency to win the next is higher ...</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/zmBNaP">Uvydywoje:</a></div><div class="chat-message">so the x2 x4 button .... and so on .... bad You have more things!</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/z0eXEp">Ijarukafu:</a></div><div class="chat-message">Новый супер кран. <img class="emojione" alt="🙊" src="//cdn.jsdelivr.net/emojione/assets/png/1F64A.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/dykb5j">wallemoi:</a></div><div class="chat-message">its rigged</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/J5VvgQ">Yziyij:</a></div><div class="chat-message">its not actually</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ipynezeba">Ipynezeba</a> won 223,030 DOGE! <a href="/verify/bet/Glo7rEv">Glo7rEv</a> <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/zRO9Ol">Egymuligy:</a></div><div class="chat-message">salut</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/zRO9Ol">Egymuligy:</a></div><div class="chat-message">hiiii</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><a href="/user/stats/zbDqm0">haithem00216:</a></div><div class="chat-message">hi</div></div><div class="chat-entry"><div class="chat-time">02/24/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message">Hi, haithem00216! <img class="emojione" alt="😄" src="//cdn.jsdelivr.net/emojione/assets/png/1F604.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/zp7Q1e">Epizubep:</a></div><div class="chat-message">sauce</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/Jea2Zr">wizgan00:</a></div><div class="chat-message">hiiiiiiiii</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/Jea2Zr">wizgan00:</a></div><div class="chat-message">??</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/LM2AD3">Ipynezeba:</a></div><div class="chat-message">Hi.</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message">Hi, Ipynezeba! <img class="emojione" alt="😄" src="//cdn.jsdelivr.net/emojione/assets/png/1F604.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/L8mnxw">Ajewad:</a></div><div class="chat-message">ajewad lol</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ipynezeba">Ipynezeba</a> got the biggest bet bonus of 1,000 DOGE! <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Rozexzoo">Rozexzoo</a> got the biggest bet bonus of 0.001 BTC! <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/gugumaster">gugumaster</a> got the biggest bet bonus of 0.1 LTC! <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ipynezeba">Ipynezeba</a> got the largest volume bonus of 1,000 DOGE! <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ejozimabu">Ejozimabu</a> got the largest volume bonus of 0.1 LTC! <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Rozexzoo">Rozexzoo</a> got the largest volume bonus of 0.001 BTC! <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ajewad">Ajewad</a> won 0.31399 BTC! <a href="/verify/bet/wGaQx8P">wGaQx8P</a> <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ipynezeba">Ipynezeba</a> won 324,400 DOGE! <a href="/verify/bet/wGaQ4xY">wGaQ4xY</a> <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ipynezeba">Ipynezeba</a> won 202,750 DOGE! <a href="/verify/bet/Glo7eVk">Glo7eVk</a> <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/LPV9vZ">AlgoRythm:</a></div><div class="chat-message">Wtf: 23, wins: 9</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><img class="emojione" alt="😄" src="//cdn.jsdelivr.net/emojione/assets/png/1F604.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/LPV9vZ">AlgoRythm:</a></div><div class="chat-message">23 bets*</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/LPV9vZ">AlgoRythm:</a></div><div class="chat-message">shut up dicebot</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/LPV9vZ">AlgoRythm:</a></div><div class="chat-message">I like you less and less\</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/LPV9vZ">AlgoRythm:</a></div><div class="chat-message">You're literally laughing at me</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/d1a78v">Uzikehatig:</a></div><div class="chat-message">taco</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/dlBY5L">Seancarter2014:</a></div><div class="chat-message">burgers?</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/LM2AD3">Ipynezeba:</a></div><div class="chat-message">Right.</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ipynezeba">Ipynezeba</a> won 506,880 DOGE! <a href="/verify/bet/1alQPbg">1alQPbg</a> <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/J3a251">Abyvyt:</a></div><div class="chat-message">Hi</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message">Hi, Abyvyt! <img class="emojione" alt="😄" src="//cdn.jsdelivr.net/emojione/assets/png/1F604.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Oqotysiji">Oqotysiji</a> won 0.25952 BTC! <a href="/verify/bet/kQ5BWmB">kQ5BWmB</a> <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/zo8V7Q">Ofabejajug:</a></div><div class="chat-message">H</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/JZWxmD">Asayaz:</a></div><div class="chat-message">K</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/JjVN0W">feaudive:</a></div><div class="chat-message">M</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/zmBNY6">Aqoxisadyj:</a></div><div class="chat-message">please  help me I want 10000 satoshi  <img class="emojione" alt="🙊" src="//cdn.jsdelivr.net/emojione/assets/png/1F64A.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/zmBNY6">Aqoxisadyj:</a></div><div class="chat-message"><img class="emojione" alt="🙊" src="//cdn.jsdelivr.net/emojione/assets/png/1F64A.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/zmBNY6">Aqoxisadyj:</a></div><div class="chat-message"><img class="emojione" alt="🙊" src="//cdn.jsdelivr.net/emojione/assets/png/1F64A.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/zmBNY6">Aqoxisadyj:</a></div><div class="chat-message"><img class="emojione" alt="🙊" src="//cdn.jsdelivr.net/emojione/assets/png/1F64A.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/zmBNY6">Aqoxisadyj:</a></div><div class="chat-message"><img class="emojione" alt="🙊" src="//cdn.jsdelivr.net/emojione/assets/png/1F64A.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/JjVN0W">feaudive:</a></div><div class="chat-message">bitcoin adress ?</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/zA9xvp">slevin:</a></div><div class="chat-message"><img class="emojione" alt="🙊" src="//cdn.jsdelivr.net/emojione/assets/png/1F64A.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/zA9xvp">slevin:</a></div><div class="chat-message">hi</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/LwGnOQ">Amirmohmad:</a></div><div class="chat-message">HI</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message">Hi, Amirmohmad! <img class="emojione" alt="😄" src="//cdn.jsdelivr.net/emojione/assets/png/1F604.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/zg8vPK">Ejivigefi:</a></div><div class="chat-message">oi</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/zg8vPK">Ejivigefi:</a></div><div class="chat-message">oi</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><img class="emojione" alt="😆" src="//cdn.jsdelivr.net/emojione/assets/png/1F606.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/JjVN0W">a_poor_boy:</a></div><div class="chat-message">need money please</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/JjVN0W">a_poor_boy:</a></div><div class="chat-message"><img class="emojione" alt="🙊" src="//cdn.jsdelivr.net/emojione/assets/png/1F64A.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/zbDqm0">haithem00216:</a></div><div class="chat-message"><img class="emojione" alt="🙊" src="//cdn.jsdelivr.net/emojione/assets/png/1F64A.png?v=1.2.4"> this site when you bet big amount you lose after 1000 time when you bet big amount you lose</div></div><div class="chat-entry"><div class="chat-time">02/25/16</div><div class="chat-sender"><a href="/user/stats/zbDqm0">haithem00216:</a></div><div class="chat-message">with 75% of win chance i got 5 loses whats fu ck  site</div></div><div class="chat-entry"><div class="chat-time">01:02:03</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ejozimabu">Ejozimabu</a> got the biggest bet bonus of 0.1 LTC! <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">01:02:04</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/revilo">revilo</a> got the biggest bet bonus of 0.001 BTC! <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">01:02:05</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ipynezeba">Ipynezeba</a> got the biggest bet bonus of 1,000 DOGE! <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">01:02:05</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ejozimabu">Ejozimabu</a> got the largest volume bonus of 0.1 LTC! <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">01:02:06</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ipynezeba">Ipynezeba</a> got the largest volume bonus of 1,000 DOGE! <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">01:02:06</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Oqotysiji">Oqotysiji</a> got the largest volume bonus of 0.001 BTC! <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">01:28:33</div><div class="chat-sender"><a href="/user/stats/Jea238">Ylojomato:</a></div><div class="chat-message">ff</div></div><div class="chat-entry"><div class="chat-time">01:30:45</div><div class="chat-sender"><a href="/user/stats/Jea238">Ylojomato:</a></div><div class="chat-message"><img class="emojione" alt="🙊" src="//cdn.jsdelivr.net/emojione/assets/png/1F64A.png?v=1.2.4">   Get 2x Bitcoin on your invest  new site</div></div><div class="chat-entry"><div class="chat-time">01:31:00</div><div class="chat-sender"><a href="/user/stats/Jea238">Ylojomato:</a></div><div class="chat-message"><img class="emojione" alt="🙊" src="//cdn.jsdelivr.net/emojione/assets/png/1F64A.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">01:31:08</div><div class="chat-sender"><a href="/user/stats/Jea238">Ylojomato:</a></div><div class="chat-message"><img class="emojione" alt="🙊" src="//cdn.jsdelivr.net/emojione/assets/png/1F64A.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">01:31:23</div><div class="chat-sender"><a href="/user/stats/Jea238">Ylojomato:</a></div><div class="chat-message">www-riecoin-net</div></div><div class="chat-entry"><div class="chat-time">02:59:41</div><div class="chat-sender"><a href="/user/stats/zVrVEm">guilin:</a></div><div class="chat-message">mosi mosi</div></div><div class="chat-entry"><div class="chat-time">06:41:48</div><div class="chat-sender"><a href="/user/stats/zrWqAR">Ocowecocu:</a></div><div class="chat-message">hi. i just want to ask if there is a player vs player game option here?</div></div><div class="chat-entry"><div class="chat-time">06:41:48</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message">Hi, Ocowecocu! <img class="emojione" alt="😄" src="//cdn.jsdelivr.net/emojione/assets/png/1F604.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">06:42:21</div><div class="chat-sender"><a href="/user/stats/zrWqAR">Ocowecocu:</a></div><div class="chat-message">hi dicebot.</div></div><div class="chat-entry"><div class="chat-time">07:00:19</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Oqotysiji">Oqotysiji</a> won 0.20652 BTC! <a href="/verify/bet/bDO4ggk">bDO4ggk</a> <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">07:53:30</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Oqotysiji">Oqotysiji</a> won 0.25344 BTC! <a href="/verify/bet/BORqwk8">BORqwk8</a> <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">12:34:28</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><a href="/user/stats/Ogypafod">Ogypafod</a> won 0.25259 BTC! <a href="/verify/bet/W1bjopj">W1bjopj</a> <img class="emojione" alt="👍" src="//cdn.jsdelivr.net/emojione/assets/png/1F44D.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">13:18:20</div><div class="chat-sender"><a href="/user/stats/zmBNaP">Uvydywoje:</a></div><div class="chat-message">as?</div></div><div class="chat-entry"><div class="chat-time">14:03:04</div><div class="chat-sender"><a href="/user/stats/LPVrj0">TurknZ:</a></div><div class="chat-message">Hi</div></div><div class="chat-entry"><div class="chat-time">14:03:04</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message">Hi, TurknZ! <img class="emojione" alt="😄" src="//cdn.jsdelivr.net/emojione/assets/png/1F604.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">14:03:30</div><div class="chat-sender"><a href="/user/stats/LPVrj0">TurknZ:</a></div><div class="chat-message">i started 0.01 ltc now i have 0 <img class="emojione" alt="😃" src="//cdn.jsdelivr.net/emojione/assets/png/1F603.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">14:09:06</div><div class="chat-sender"><a href="/user/stats/JO8P2j">Utyculiw:</a></div><div class="chat-message">hi</div></div><div class="chat-entry"><div class="chat-time">14:09:06</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message">Hi, Utyculiw! <img class="emojione" alt="😄" src="//cdn.jsdelivr.net/emojione/assets/png/1F604.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">14:09:43</div><div class="chat-sender"><a href="/user/stats/LPVrj0">TurknZ:</a></div><div class="chat-message">hi</div></div><div class="chat-entry"><div class="chat-time">14:09:43</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message">Hi, TurknZ! <img class="emojione" alt="😄" src="//cdn.jsdelivr.net/emojione/assets/png/1F604.png?v=1.2.4"></div></div><div class="chat-entry"><div class="chat-time">14:24:20</div><div class="chat-sender"><a href="/user/stats/LPVrj0">TurknZ:</a></div><div class="chat-message">I'm litecoin winner!</div></div><div class="chat-entry"><div class="chat-time">14:24:22</div><div class="chat-sender"><a href="/user/stats/LPVrj0">TurknZ:</a></div><div class="chat-message">woho</div></div><div class="chat-entry"><div class="chat-notice">Hi Iyudawivi! Welcome to Dicecoin. Please be respectful and enjoy chatting to each other! <img class="emojione" alt="😇" src="//cdn.jsdelivr.net/emojione/assets/png/1F607.png?v=1.2.4"><br>Rules: be polite, no begging, no spamming, and always use English. Anyone violates any of these rules may be subject to the ban.</div></div><div class="chat-entry chat-unread"><div class="chat-time">19:04:06</div><div class="chat-sender"><a href="/user/stats/Jea2Zr">bits10:</a></div><div class="chat-message">hi</div></div><div class="chat-entry chat-unread"><div class="chat-time">19:04:07</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message">Hi, bits10! <img class="emojione" alt="😄" src="//cdn.jsdelivr.net/emojione/assets/png/1F604.png?v=1.2.4"></div></div><div class="chat-entry chat-unread"><div class="chat-time">19:05:03</div><div class="chat-sender"><a href="/user/stats/zv906k">Olaber:</a></div><div class="chat-message">ak</div></div><div class="chat-entry chat-unread"><div class="chat-time">19:05:03</div><div class="chat-sender"><span class="chat-sender-dicebot">dicebot:</span></div><div class="chat-message"><img class="emojione" alt="😂" src="//cdn.jsdelivr.net/emojione/assets/png/1F602.png?v=1.2.4"></div></div><div class="chat-entry chat-unread"><div class="chat-time">19:05:08</div><div class="chat-sender"><a href="/user/stats/Jea2Zr">bits10:</a></div><div class="chat-message">hhhhhhh 0.0000000 btc</div></div><div class="chat-entry chat-unread"><div class="chat-time">19:05:57</div><div class="chat-sender"><a href="/user/stats/zv906k">Olaber:</a></div><div class="chat-message">hhhhhhhh9999999999999999999999999999</div></div></div>   <div class="chat-input"><textarea></textarea></div>   <div class="chat-status">Users online: <span class="chat-online">75</span></div><div style="z-index: 90;" class="ui-resizable-handle ui-resizable-e"></div><div style="z-index: 90;" class="ui-resizable-handle ui-resizable-s"></div><div style="z-index: 90;" class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div></div></body></html>