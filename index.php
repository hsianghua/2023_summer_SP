<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>排球紀錄網站</title>
    </head>

    <body>
        <header>
            <nav>
                <p>Login/Logout</p>
            </nav>
        </header>
        <hr>
        <div>
            <span id="leftteam"><?php echo &_POST["home_team"]; ?></span> vs <span id="rightteam"></span>
        </div>
        <div>
            <h4>目前比分</h4>
            <button type="button" id="leftadd">+</button>
            <span id="leftscore">0</span><span> : </span><span id="rightscore">0</span>
            <button type="button" id="rightadd">+</button>
        </div>
        <div>
            <h4>局數</h4>
            <p id="set"></p>
        </div>
        <hr>
        <div>
            <h4>提示訊息</h4>
            <p id="info"></p>
        </div>
        <hr>
        <div>
            <h4>即時輪轉站位</h4>
            <button type="button" class="number" id="btn1">1</button>
            <button type="button" class="number" id="btn2">2</button>
            <button type="button" class="number" id="btn3">3</button>
            <button type="button" class="number" id="btn4">4</button>
            <button type="button" class="number" id="btn5">5</button>
            <button type="button" class="number" id="btn6">6</button>
            <button type="button" class="number" id="btn7">7</button>
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
        <script src="js/main.js"></script>
        <hr>
        <footer>
            擺上個人連結
        </footer>

        
    </body>

</html>
