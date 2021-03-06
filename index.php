<!Doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Memory Game</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <!-- Start Game Overlay -->
        
        <div class="control-button">
            <span class="start">Start Game</span>
        </div>
        
        <!-- Win Game Overlay -->
        
         <div class="control-button win">
             <div class="container">
                <span class="cong">Congratulations :)</span>
                <div id="yourScore">You Scored: <span id="score">0</span></div>
             </div>
        </div>
        
        <!-- Game Code -->
        <div class="info-container">
            <div class="name">
                Name: <span></span>
            </div>
            <div class="tries">
                Worng Tries: <span>0</span>
            </div>
        </div>
        <div class="game-container">
            <div class="game-block" data-tech="boy1">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/boy1.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="boy1">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/boy1.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="boy2">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/boy2.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="boy2">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/boy2.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="girl1">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/girl1.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="girl1">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/girl1.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="girl2">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/girl2.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="girl2">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/girl2.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="man1">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/man1.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="man1">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/man1.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="man2">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/man2.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="man2">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/man2.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="woman1">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/woman1.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="woman1">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/woman1.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="woman2">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/woman2.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="woman2">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/woman2.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="grandman">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/grandman.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="grandman">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/grandman.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="grandwoman">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/grandwoman.png"/>
                </div>
            </div>
            <div class="game-block" data-tech="grandwoman">
                <div class="face front"></div>
                <div class="face back">
                    <img src="images/grandwoman.png"/>
                </div>
            </div>
        </div>
        <div class="copyright">Powered by Fares Khalid</div>
        <audio id="success" src="sounds/success.mp3" preload="auto"></audio>
        <audio id="fail" src="sounds/fail.mp3" preload="auto"></audio>
        <script src="js/plugins.js"></script>
    </body>
</html>
