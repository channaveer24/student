<?php include("header.php");
session_start(); ?>
<style>
    .table th,
    .table td {
        padding: 5px 10px
    }
</style>

<style type="text/css">
    <?php for ($k = 2; $k < 5; $k++) { ?>

        #que<?php echo ($k) ?>
            {
            display: none;
        }


    <?php } ?>
</style>

<body>
    <title>Welcome</title>
    <?php include("connect-db.php"); 
    ?>


    
    <style type="text/css">
        @font-face {
            font-family: "PlayfairDisplayItalic";
            src: url("assets/PlayfairDisplayItalic.ttf");
        }
    </style>


    <style type="text/css">
        .active_adv {
            background-color: #8585ad;
        }

        #app_m {
            color: white;
        }

        .number {
            display: grid;
            grid-template-rows: repeat(3, 50px);
            grid-template-columns: repeat(4, 2fr);
            grid-auto-rows: 50px;
            grid-gap: 1em;
            text-align: center;
            border-color: black;
            align-items: center;
        }

        .num-item {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #363a3f;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
            margin-right: auto;
            margin-left: auto;
            margin-top: 20px;
        }

        .card-body {
            display: none; 
        }

        .card-bodys {
            flex: 1 1 auto;
            padding: 1.25rem;
        }
    </style>



    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
            <div class="main-card mb-3 card" style="width: 1140px ">
                        <div class="card-bodys">

                            <table class="mb-0 table table-bordered" style="text-align:center ">

                                <tr>
                                    <th>Quize</th>
                                    <th>Stream</th>
                                    <th>Max Marks</th>
                                    <th>Date</th>
                                </tr>


                                <tr>
                                    <td>
                                        <?php echo ($quize_info['title']); ?>
                                    </td>
                                    <td>
                                        <?php echo ($quize_info['stream']); ?>
                                    </td>
                                    <td>
                                        <?php echo ($quize_info['max_marks']); ?>
                                    </td>
                                    <td>
                                        <?php echo (date_ch($quize_info['date'])); ?>
                                    </td>
                                </tr>



                            </table>

                            <div style="text-align: center;">
                                <button class="mt-1 btn btn-primary" onclick="startQuiz()">Start Quiz</button>
                            </div>
                        </div>
                    </div>

                <div class="col-lg-9">
                    <div class="item item-1">

                    
                        <div class="main-card mb-3 card">
                            <div class="card-body" id="qiz">

                                <h1 style=" text-align: center; ">The Question part</h1>

                                <?php for ($i = 1; $i < 5; $i++) { ?>
                                    <div id="que<?php echo ($i); ?>" style=" text-align: start; ">
                                        <table class=" table">
                                            <tr>
                                                <td>
                                                    <h3>
                                                        <?php echo ($i); ?>.) what is the capital of India?

                                                    </h3>
                                                </td>
                                            </tr>
                                            <br>
                                            <tr>
                                                <td>
                                                    <input type="radio" name="answ<?php echo ($i); ?>" id="answ<?php echo ($i); ?>" value="A"> Delhi
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="radio" name="answ<?php echo ($i); ?>" value="B"> Mumbai
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="radio" name="answ<?php echo ($i); ?>" value="C"> Kolkata
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="radio" name="answ<?php echo ($i); ?>" value="D"> Chennai
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="radio" name="answ<?php echo ($i); ?>" value="E"> Chennai
                                                </td>
                                            </tr>
                                        </table>

                                        <div style="text-align: center;">
                                            <a class="mt-1 btn btn-warning" onclick="pre_id(<?php echo ($i); ?>,<?php echo ($i-1); ?>);">Prvious</a>
                                            <a class="mt-1 btn btn-success" onclick="nxt_id(<?php echo ($i); ?>,<?php echo ($i+1); ?>);">Next</a>
                                            
                                        </div>

                                    </div>
                                <?php } ?>

                                

                            </div>
                        </div>
                    </div>
                </div>


                <script>

                    function nxt_id(m,n)
                    {
                        $("#que"+m).hide();
                        $("#que"+n).show();
                    }


                    function pre_id(m,n)
                    {
                        $("#que"+m).hide();
                        $("#que"+n).show();
                    }


                </script>

                <div class="col-lg-3">
                    <div class="item item-2">
                        <div class="main-card mb-3 card">
                            <div class="card-body" id="qize">
                                <h3 style=" text-align: center; "> Question Number</h3>
                                <br>
                                
                                <div class="number">
                                <?php for($i = 1; $i < 5; $i++){ ?>
                                    <div class="num-item question-link" data-question="1"><a><?php echo ($i); ?></a></div>
                                    <?php } ?>
                                </div>

                                
                                <br>
                                <div style="text-align: center;">
                                    <input type="submit" name="submit" class="mt-1 btn btn-secondary" value="Final Submit" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

            
    <script type="text/javascript">
    
    function enterFullScreen() {
        var elem = document.documentElement;
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.mozRequestFullScreen) { /* Firefox */
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) { /* IE/Edge */
            elem.msRequestFullscreen();
        }
    }

   
    function startQuiz() {

        var quizCardBody = document.getElementById('qiz');
            quizCardBody.style.display = 'block';
        var quizeCardBody = document.getElementById('qize');
            quizeCardBody.style.display = 'block';
        var cardBody = document.querySelector('.card-bodys');
    if (cardBody) {
        cardBody.style.display = 'none';
    }
        enterFullScreen();
        document.addEventListener('visibilitychange', handleVisibilityChange);
    }

   
    function handleVisibilityChange() {
        if (document.visibilityState === 'visible') {
            alert("Quiz has ended.");
            // window.location.href = 'result.php';
        }
    }

    function handleFullScreenChange() {
        if (!document.fullscreenElement && !document.webkitFullscreenElement &&
            !document.mozFullScreenElement && !document.msFullscreenElement) {
            alert("Quiz has ended. Thank you for participating!");
            // window.location.href = 'result.php';

        }
    }

    document.addEventListener('fullscreenchange', handleFullScreenChange);
    document.addEventListener('webkitfullscreenchange', handleFullScreenChange);
    document.addEventListener('mozfullscreenchange', handleFullScreenChange);
    document.addEventListener('MSFullscreenChange', handleFullScreenChange);
    document.addEventListener('visibilityvhange', handleVisibilityChange);

</script>

    <script type="text/javascript">

        $(document).ready(function () {
            $('#mas_exp').addClass('mm-active');
        });

    </script>


 