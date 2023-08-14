<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>排球紀錄網站</title>
    </head>

    <body>
        <div class="wrapper">
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
            <div class="body-flex-box-container">
                <div class="body-box body-box-item-1">
                    <h4>輪轉表</h4>
                    <button type="button" class="number" id="btn4">
                        <?php echo $_POST["4"]; ?>
                    </button>
                    <button type="button" class="number" id="btn3">
                        <?php echo $_POST["3"]; ?>
                    </button>
                    <button type="button" class="number" id="btn2">
                        <?php echo $_POST["2"]; ?>
                    </button>
                    <br><br><br>
                    <button type="button" class="number" id="btn5">
                        <?php echo $_POST["5"]; ?>
                    </button>
                    <button type="button" class="number" id="btn6">
                        <?php echo $_POST["6"]; ?>
                    </button>
                    <button type="button" class="number" id="btn1">
                        <?php echo $_POST["1"]; ?>
                    </button>
                    <br><br><br>
                    <button type="button" class="number" id="btn7">
                        <?php echo $_POST["libero"]; ?>
                    </button>
                </div>
                <div class="body-box body-box-item-2">
                    <h4>發球</h4>
                    <button type="button" class="serve" id="s_success">成功</button>
                    <button type="button" class="serve" id="s_score" >得分</button>
                    <button type="button" class="serve" id="s_mistake">失誤</button>
                    <h4>接發</h4>
                    <button type="button" class="recieve" id="r_nice">好球</button>
                    <button type="button" class="recieve" id="r_mistake">失誤</button>
                </div>
                <div class="body-box body-box-item-3">
                    <h4>攻擊</h4>
                    <button type="button" class="attack" id="a_success">成功</button>
                    <button type="button" class="attack" id="a_score">得分</button>
                    <button type="button" class="attack" id="a_mistake">失誤</button>
                    <h4>防守</h4>
                    <button type="button" class="defense" id="d_nice">好球</button>
                    <button type="button" class="defense" id="d_mistake">失誤</button>
                </div>
                <div class="body-box body-box-item-4">
                    <h4>攔網</h4>
                    <button type="button" class="block" id="b_touch">擊球</button>
                    <button type="button" class="block" id="b_mistake">失誤</button><br><br>
                    <button type="button" class="block" id="b_score">得分</button>
                    <button type="button" class="block" id="b_seam">中洞</button>
                    <h4>舉球/修正</h4>
                    <button type="button" class="setting" id="se_nice">好球</button>
                    <button type="button" class="setting" id="se_mistake">失誤</button>
                </div>
                <div class="body-box body-box-item-5">
                    <h4>
                        對方失誤 <button type="button" id="other_mistake">+</button>
                    </h4>
                    <h4>
                        換人 <button type="button" id="change">+</button>
                    </h4>
                    <h4>
                        暫停 <button type="button" id="timeout">+</button>
                    </h4>
                </div>
            </div>
        </div>
        <script src="js/main.js"></script> 
        <footer>
            <p>Contact me</p>
            <p>黄相華 / Hsiang-Hua, HUANG</p>
            <p>NTNU TAHRD & CSIE</p>
            <p>-------------------------------------------------<p>
            <a href="https://www.instagram.com/hsiang_hua_/?igshid=OGQ5ZDc2ODk2ZA%3D%3D" target="_blank"><img src="instagram.png" width="30" id="instagram_image"></a>
            <a href="https://www.facebook.com/profile.php?id=100012710167273" target="_blank"><img src="facebook.png" width="30" id="facebook_image"></a>
            <a href="https://github.com/hsianghua" target="_blank"><img src="github.png" width="30" id="github_image"></a>
            <a href="https://www.linkedin.com/in/huang-hsiang-hua-46873a237" target="_blank"><img src="linkedin.png" width="30"></a>
        </footer>
    </body>

</html>

