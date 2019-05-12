<!DOCTYPE html>
<html lang="en" style="margin: 0;">
<head style="margin: 0;">
    <meta charset="UTF-8" style="margin: 0;">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" style="margin: 0;">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" style="margin: 0;">
</head>
<body style="margin:0;font-family:'Poppins', sans-serif;background-color:#fbfafc;">
<p style="margin: 0;">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet" style="margin: 0;">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" style="margin: 0;"></p>
<title style="margin: 0;">Document</title>


<div id="wrapper" style="margin: 0;">
    <section class="header" style="margin:0;display:grid;grid-template-columns:auto auto;font-family:'Poppins', sans-serif;background-color:#0086c3;width:100%;"><div class="header1" style="margin:0;display:flex;background-color:#0086c3;width:100%;margin-left:20%;">
            <img src="{{asset ('images/no-photo.jpg')}}" class="headerImg" alt="picture" style="margin:0;margin-top:75px;margin-bottom:75px;width:100px;margin-right:30px;border-radius:50%;"><div class="header--image--text" style="margin:0;color:white;display:flex;flex-direction:column;justify-content:center;">
                <h1 style="margin:0;font-size:40px;align-items:center;">{{$user->name}}</h1>
                <h2 style="margin: 0;">Medior developer</h2>
            </div>


        </div>
        <div class="header2" style="margin:0;margin-left:10%;display:flex;flex-direction:column;color:white;line-height:30px;">
            <img src="%7B%7Basset('images/weconnect.png')%7D%7D" id="weconnectLogo" alt="Weconnect logo" style="margin:0;margin-top:75px;margin-bottom:20px;width:200px;"><div class="header-text" style="margin: 0;">
                <p style="margin: 0;">joeri@site.nu</p>
                <p style="margin: 0;">+31 629 383 940</p>
            </div>
        </div>

    </section>
    <div class="col-md-5">
        <a href="{{route('pdf')}}" class="btn btn-primary">Download</a>
    </div>
    <section class="upm" style="margin:0;margin-right:335px;margin-left:10%;display:grid;grid-template-columns:auto auto auto;grid-gap:34px;"><div class="upmItems uren" style="margin:0;padding:40px 90px;background-color:#fff;margin-top:50px;margin-bottom:50px;width:250px;">
            <div class="insideUpm" style="margin: 0;">
                <div class="upmIcon" style="margin: 0;">
                    <i class="far fa-clock fa-5x" style="margin:0;display:inline-block;float:right;color:#0086c3;"></i>
                </div>
                <div class="upmText" style="margin: 0;">
                    <h2 style="margin:0;font-size:40px;color:#0086c3;">120 h</h2>
                    <p style="margin: 0;">Uren gewerkt</p>
                </div>
            </div>
        </div>

        <div class="upmItems projecten" style="margin:0;padding:40px 90px;background-color:#fff;margin-top:50px;margin-bottom:50px;width:250px;">
            <div class="upmIcon" style="margin: 0;">
                <i class="far fa-folder fa-5x" style="margin:0;display:inline-block;float:right;color:#0086c3;"></i>
            </div>
            <h2 style="margin:0;font-size:40px;color:#0086c3;">120 h</h2>
            <p style="margin: 0;">Uren gewerkt</p>
        </div>

        <div class="upmItems maanden" style="margin:0;padding:40px 90px;background-color:#fff;margin-top:50px;margin-bottom:50px;width:250px;">
            <div class="upmIcon" style="margin: 0;">
                <i class="far fa-calendar-alt fa-5x" style="margin:0;display:inline-block;float:right;color:#0086c3;"></i>
            </div>
            <h2 style="margin:0;font-size:40px;color:#0086c3;">120 h</h2>
            <p style="margin: 0;">Uren gewerkt</p>
        </div>

    </section>




    <section class="skills--section" style="margin: 0;"><div class="skillsWrapper" style="margin:0;padding-top:20px;padding-bottom:20px;margin-right:339px;margin-left:10%;border-bottom:2px solid #e8e8ea;">

            <div class="skillsText" style="margin:0;width:430px;float:left;font-size:49px;">
                <p style="margin: 0;">Skills</p>
            </div>

            <div class="skills--grid--Wrapper" style="margin:0;display:grid;grid-template-columns:auto auto;grid-column-gap:41px;padding-top:17px;padding-left:44px;">

                <div class="skills-grid-item" style="margin:0;float:right;width:430px;border-bottom:1px solid #e8e8ea;margin-bottom:20px;padding-bottom:20px;">
                    <ul style="margin:0;padding:0;list-style-type:none;">
                        <li style="margin:0;font-size:25px;color:#0086c3;display:inline;float:right;">HTML</li>
                        <li style="margin:0;font-size:25px;color:#a7a8ab;display:inline;">460 h</li>
                    </ul>
                </div>

                <div class="skills-grid-item" style="margin:0;float:right;width:430px;border-bottom:1px solid #e8e8ea;margin-bottom:20px;padding-bottom:20px;">
                    <ul style="margin:0;padding:0;list-style-type:none;">
                        <li style="margin:0;font-size:25px;color:#0086c3;display:inline;float:right;">HTML</li>
                        <li style="margin:0;font-size:25px;color:#a7a8ab;display:inline;">460 h</li>
                    </ul>
                </div>

                <div class="skills-grid-item" style="margin:0;float:right;width:430px;border-bottom:1px solid #e8e8ea;margin-bottom:20px;padding-bottom:20px;">
                    <ul style="margin:0;padding:0;list-style-type:none;">
                        <li style="margin:0;font-size:25px;color:#0086c3;display:inline;float:right;">HTML</li>
                        <li style="margin:0;font-size:25px;color:#a7a8ab;display:inline;">460 h</li>
                    </ul>
                </div>

                <div class="skills-grid-item" style="margin:0;float:right;width:430px;border-bottom:1px solid #e8e8ea;margin-bottom:20px;padding-bottom:20px;">
                    <ul style="margin:0;padding:0;list-style-type:none;">
                        <li style="margin:0;font-size:25px;color:#0086c3;display:inline;float:right;">HTML</li>
                        <li style="margin:0;font-size:25px;color:#a7a8ab;display:inline;">460 h</li>
                    </ul>
                </div>

                <div class="skills-grid-item" style="margin:0;float:right;width:430px;border-bottom:1px solid #e8e8ea;margin-bottom:20px;padding-bottom:20px;">
                    <ul style="margin:0;padding:0;list-style-type:none;">
                        <li style="margin:0;font-size:25px;color:#0086c3;display:inline;float:right;">HTML</li>
                        <li style="margin:0;font-size:25px;color:#a7a8ab;display:inline;">460 h</li>
                    </ul>
                </div>

                <div class="skills-grid-item" style="margin:0;float:right;width:430px;border-bottom:1px solid #e8e8ea;margin-bottom:20px;padding-bottom:20px;">
                    <ul style="margin:0;padding:0;list-style-type:none;">
                        <li style="margin:0;font-size:25px;color:#0086c3;display:inline;float:right;">HTML</li>
                        <li style="margin:0;font-size:25px;color:#a7a8ab;display:inline;">460 h</li>
                    </ul>
                </div>

            </div>


        </div>
    </section>
</div>


</body>
</html>