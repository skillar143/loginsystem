<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{asset('img/logo.png')}}" >
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style>
         html{
                font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
                line-height:1.5
            }
            body {
                background-color: white; color: #636b6f; font-family: 'Raleway';overflow: hidden;
            }
            .vertical {
            border-left: 6px solid maroon;
            height: 250px;
            left: 50%;
            border-radius: 5px;
            }
      
       .min-h-screen{min-height:100vh}
    
   @media (prefers-color-scheme:dark){
        .dark\:bg-gray-800{--bg-opacity:1;
            background-color:#2d3748;
            background-color:rgba(45,55,72,var(--bg-opacity))
        }
        .dark\:bg-gray-900{
            --bg-opacity:1;
            background-color:#1a202c;
            background-color:rgba(26,32,44,var(--bg-opacity))
        }.dark\:border-gray-700{
            --border-opacity:1;
            border-color:#4a5568;
            border-color:rgba(74,85,104,var(--border-opacity))
        }
        .dark\:text-white{
            --text-opacity:1;
            color:#fff;
            color:rgba(255,255,255,var(--text-opacity))
        }.dark\:text-gray-400{
            --text-opacity:1;
            color:#cbd5e0;
            color:rgba(203,213,224,var(--text-opacity))
        }.dark\:text-gray-500{
            --tw-text-opacity:1;
            color:#6b7280;
            color:rgba(107,114,128,var(--tw-text-opacity))
        }
    }
        
        
        </style>
    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous" defer></script>

    </head>
    <body onload="initClock()">
        <div class="relative d-flex items-top justify-content-center">
            <div class="w-100 position-fixed mt-auto mr-0 px-4 py-2" style="background-color: maroon;">
                <a href="{{ route('login') }}" class="text-sm text-light float-right"><i class="fas fa-user fa-fw mr-1 "></i>Log in</a>
            </div>
        </div>
        <div class="min-h-screen">
        <div class="text-center" style=" margin-top: 50px">
                    <div class="display-3 text-dark d-none d-sm-block ">
                        PUP CALAUAN CAMPUS
                    </div>
        </div>
                    
            <div class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <div class="d-flex justify-content-center align-items-center" style="width:1500px; margin: auto">

                    <div class="w-50 d-none d-sm-block">
                    <div class="w-100 m-auto">

                    <embed type="text/html" src="{{asset('Clock/index.html')}}" height="550px" width="100%">
                            <!-- <div class="h2">
                                <span id="month">month</span>
                                <span id="daynum">00</span>
                                <span>,</span>
                                <span id="year">0000</span>
                                <span id="day">(day)</span>  
                            </div>
                            <div class="display-2">
                                <span id="hour">00</span>
                                <span>:</span>
                                <span id="minute">00</span>
                                <span>:</span>
                                <span id="second">00</span>
                                <span id="period">pm</span>
                            </div> -->
                        </div>
                    </div>
                        
<!--  -->
                        <!-- <div class="vertical m-1 position-static d-none d-sm-block"></div> -->

                        <div class="w-50">
                        <div class="card position-static w-50 m-auto  shadow-sm border-0" >
                            <div class="card-header bg-transparent">
                            <div class="h1">
                                    <span id="hour">00</span>
                                    <span>:</span>
                                    <span id="minute">00</span>
                                    <span>:</span>
                                    <span id="second">00</span>
                                    <span id="period">pm</span>
                                </div>
                                <div class="h3">
                                    <span id="month">month</span>
                                    <span id="daynum">00</span>
                                    <span>,</span>
                                    <span id="year">0000</span>
                                    <span id="day">(day)</span>  
                                </div>

                                    
                            </div>
                            <div class="card-body border-0 bg-transparent">
                                <div class="">
                                    <form>
                                        <div class="form-group ">
                                            <label for="exampleInputId1" class="float-left">ID number</label>
                                            <input type="text" class="form-control" id="exampleInputId1" placeholder="Employee ID">
                                            <small  class="form-text text-muted">We need your I.D. to process your time in.</small>
                                        </div>
                                        <button type="submit" class="btn btn-outline-primary">Time In</button>
                                    </form>
                                </div>
                                <!-- <a href="#">Do manual Login</a> -->
                            </div>
                        </div>
                        </div>
<!--  --> 
                        
                        <!-- small -->
                        
                        
     



                    </div>      
                </div> 
            </div>
        </div>

        
   <script type="text/javascript">
  function updateClock() {
    var now = new Date();
    var mo = now.getMonth(),
        dnum = now.getDate(),
        dname = now.getDay(),
        yr = now.getFullYear(),
        hou = now.getHours(),
        min = now.getMinutes(),
        sec = now.getSeconds(),
        pe = "AM";
        
        if(hou == 0){
            hou = 12;
        }
        if(hou > 12){
            hou = hou - 12;
            pe = "PM";
        }

        Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
        }

    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var week = ["(Sunday)", "(Monday)", "(Tuesday)", "(Wenesday)", "(Thursday)" , "(Friday)", "(Saturday)"];
    var ids = ["month", "daynum", "year", "day", "hour", "minute", "second", "period"];
    var values = [months[mo], dnum.pad(2), yr, week[dname], hou.pad(2), min.pad(2), sec.pad(2), pe]; 

    for(var i = 0; i < ids.length; i++) 
    document.getElementById(ids[i]).firstChild.nodeValue = values[i];
  }
  function initClock(){
      updateClock();
      window.setInterval("updateClock()",1);
  }

  
</script>
    </body>
</html>
