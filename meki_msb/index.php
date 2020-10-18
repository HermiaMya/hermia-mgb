<?php
require ('db.php');
$sql = "SELECT * FROM `msg` ORDER BY id DESC ";

$rows = read($pdo,$sql);
?>
<HTML>
    <head>
        <title>留言板</title>
        <meta charset='utf-8' />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >


            <style>
            .add,.list{width:800px;margin:0 auto;}
            textarea
            {
                margin-top: 30px;
                border: 0px;
                resize:none;
                outline: none;
                font-weight: initial;
                font-family: "Arial";
                color: 	#FFA07A;
                font-size: medium;
                padding-left: 15px;
                padding-top: 10px;
                width:100%;
                height:170px;
                margin-bottom: 12px;
                background: #FAF0E6;
                -moz-border-radius: 12px;
                -webkit-border-radius: 12px;
                border-radius: 12px;
                box-shadow: #FFE4C4 0px 0px 50px 2px inset;
                }
            .username{
                width: 225px;
                height: 30px;
                padding-left: 16px;
                float:left;
                background: #FAF0E6;
                font-weight: initial;
                font-family: "Arial";
                color: #FFB6C1;
                font-size: small;
                border: 0px;
                resize: none;
                outline: none;
                box-shadow: #FAEBD7 0px 0px 10px 5px inset;
                -moz-border-radius: 5px;
                -webkit-border-radius: 5px;
                border-radius: 5px
                }
            .submit{
                width: 150px;
                height: 40px;
                color: #7B68EE;
                float: right;
                border: none;
                outline:none;
                font-weight: bold;
                font-size: small;
                font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro",Osaka, "メイリオ", Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
                background: #E6E6FA;
                box-shadow: 3px 4px 5px 1px #D8BFD8 ;
                -moz-border-radius: 5px;
                -webkit-border-radius: 5px;
                border-radius: 5px

            }
            .submit:hover{
                background: azure;
                color: cornflowerblue;
                box-shadow: 3px 4px 5px 1px #B0E0E6;
            }
            .msg
            {
                width: 790px;
                height: 105px;
                background: #FFE4E1;
                color: #D87093;
                font-family: "Comic Sans MS";
                font-size: small;
                position: relative;
                -moz-border-radius: 12px;
                -webkit-border-radius: 12px;
                border-radius: 12px;
                margin-top: 20px;
                padding-left: 15px;
                padding-top: 5px;
            }
            .msg:before {
                content: "";
                width: 0;
                height: 0;
                right: 100%;
                top: 25px;
                position: absolute;
                border-top: 10px solid transparent;
                border-right: 23px solid #FFE4E1;
                border-bottom: 10px solid transparent;
            }
        </style>
        <audio  autoplay="autoplay" loop="loop" controls="controls" style="height: 0;">
            <iframe style="display: none" allow="autoplay" src="MANYO%20-%20祈り.mp3"></iframe>
        </audio>

    </head>
    <body background="back4.jpg">

    <nav class="navbar navbar-light" style="background-color: #F0F8FF; box-shadow: 3px 4px 5px 1px #E0FFFF	" >
        <!-- Navbar content -->
        <a class="navbar-brand" href="#">
            <img src="meki.jpg" width="113" height="39" class="d-inline-block align-top" alt="">
        </a>

        </div>
    </nav>

    </div>

        <div class='add'>
            <form action="save.php" method="post">
            <textarea name="content" onfocus="if(value=='在这里对Meki说点什么叭~(๑> ₃ <)') {value=' ' }" onblur="if(value==' ') {value='在这里对Meki说点什么叭~(๑> ₃ <)'}">在这里对Meki说点什么叭~(๑> ₃ <)</textarea>
            <input name="username" class='username' type="text" value="あなたの名前は?" onfocus="if(this.value == 'あなたの名前は?')this.value='';" onblur="if(this.value == '')this.value='あなたの名前は?';">
                <input class='submit' type="submit" value="ฅ(๑ ̀ㅅ ́๑)ฅ提出する~" />
            <div style='clear: both'></div>
            </form>
        </div>

        <div class='list'>
            <?php
            foreach($rows as $key=>$msg){
                ?>
            <div class='msg'>
                <p><?php echo $msg['username'];?></p>
                <p><?php echo $msg['content'];?></p>
            </div>
                <?php
                }
            ?>
    </body>
</HTML>