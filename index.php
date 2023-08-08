<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>排球紀錄網站</title>
    </head>

    <body>
        <div class="header-flex-box-container">
            <div class="header-box header-box-item-1">
                <div>
                    <span id="leftteam">
                        <?php echo $_POST["home_team"]; ?>
                    </span> vs 
                    <span id="rightteam">
                        <?php echo $_POST["away_team"]; ?>
                    </span>
                </div>
                <div>
                    <h4>目前比分</h4>
                    <button type="button" id="leftadd">+</button>
                    <span id="leftscore">0</span><span id="score"> : </span><span id="rightscore">0</span>
                    <button type="button" id="rightadd">+</button>
                </div>
                <div>
                    <h4>局數</h4>
                    <p id="set"></p>
                    <span id="set_hide">
                        <?php 
                            $num = $_POST["set_num"];
                            if ($num == "three_set") echo "3";
                            else echo "5";
                        ?>
                    </span>
                </div>
            </div>
            <div class="header-box header-box-item-2">
                <div>
                    <h4>提示訊息</h4>
                    <p id="info_change"></p>
                    <p id="info_timeout"></p>
                    <p id="info"></p>
                </div>
            </div>
            <div class="header-box header-box-item-3">
                <div>
                    <p>Login/Logout</p>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <h4>輪轉表</h4>
            <button type="button" class="number" id="btn1">
                <?php echo $_POST["1"]; ?>
            </button>
            <button type="button" class="number" id="btn2">
                <?php echo $_POST["2"]; ?>
            </button>
            <button type="button" class="number" id="btn3">
                <?php echo $_POST["3"]; ?>
            </button>
            <button type="button" class="number" id="btn4">
                <?php echo $_POST["4"]; ?>
            </button>
            <button type="button" class="number" id="btn5">
                <?php echo $_POST["5"]; ?>
            </button>
            <button type="button" class="number" id="btn6">
                <?php echo $_POST["6"]; ?>
            </button>
            <button type="button" class="number" id="btn7">
                <?php echo $_POST["libero"]; ?>
            </button>
        </div>

        <hr>
        <div>
            <h4>發球</h4>
            <button type="button" class="serve" id="s_success">成功</button>
            <button type="button" class="serve" id="s_score" >得分</button>
            <button type="button" class="serve" id="s_mistake">失誤</button>
        </div>
        <div>
            <h4>接發</h4>
            <button type="button" class="recieve" id="r_nice">好球</button>
            <button type="button" class="recieve" id="r_mistake">失誤</button>
        </div>
        <div>
            <h4>攻擊</h4>
            <button type="button" class="attack" id="a_success">成功</button>
            <button type="button" class="attack" id="a_score">得分</button>
            <button type="button" class="attack" id="a_mistake">失誤</button>
        </div>
        <div>
            <h4>防守</h4>
            <button type="button" class="defense" id="d_nice">好球</button>
            <button type="button" class="defense" id="d_mistake">失誤</button>
        </div>
        <div>
            <h4>攔網</h4>
            <button type="button" class="block" id="b_touch">擊球</button>
            <button type="button" class="block" id="b_mistake">失誤</button>
            <button type="button" class="block" id="b_score">得分</button>
            <button type="button" class="block" id="b_seam">中洞</button>
        </div>
        <div>
            <h4>舉球/修正</h4>
            <button type="button" class="setting" id="se_nice">好球</button>
            <button type="button" class="setting" id="se_mistake">失誤</button>
        </div>

        <hr>
        <div>
            <span>換人</span>
            <button type="button" id="change">+</button><br>
            <span>暫停</span>
            <button type="button" id="timeout">+</button>
        </div>
        <hr>
        <script src="js/main.js"></script>
        <footer>
            擺上個人連結
        </footer>

        
    </body>

</html>

