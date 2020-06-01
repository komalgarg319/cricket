<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">


    <div class="content">
        <div class="title m-b-md">
            Team List Using Match Fixture
        </div>
        <div class="links">
            <?php

                if(isset($team1) && isset($team2) && isset($match_id)){
                    ?>
                    <table border="1px solid #000;">
                        <thead>
                        <tr><th>First team</th><th>Second team</th><th></th></tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $team1['team_name']; ?></td>
                            <td><?php echo $team2['team_name']; ?></td>
                            <td>
                                <?php  echo "<a href='points?team1=$team1[id]&team2=$team2[id]&match_id=$match_id' >Set Points to both team players for match - ".$match_id."</a>"; ?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <?php

                }else{
                    echo 'Match Fixture not run correctly. Please try again.';
                }
            ?>
        </div>
        </div>

    </div>
</div>
</body>
</html>
