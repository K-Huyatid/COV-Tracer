<!DOCTYPE html>
<html>
    <head>
        <title>Cov Tracer PH</title> 
    </head>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <body>           
        <div>
            <img id = "hooh" src="{{ asset('images/hooh.png') }}" alt="pokemon">
            <div id = "div1" style = "border-radius: 40px;">
                <h1 style = "font-size: 50px; margin-top: 10px; text-align: center;">Cov Tracer PH</h1>
            </div>
        </div>
                <!------- left container --------->
        <div id = "div2" style = "width: 32%; float: left; margin-left: 10%; border-right: 5px solid; background-color: #636E72; border-left: 5px solid;  ">
            <form action ="region" method = "POST">
                @csrf
                    <!------- dropdown box ----------->
                <label for = "region" id = "region_select">Region:</label>
                <select name = "cityOption" style = "font-size: 13px; height: 30px; margin-top: 5px;" required>
                    <option value = "" disabled selected hidden>Select a region</option>
                    <option value = "BARMM">BARMM</option>
                    <option value = "CAR">CAR</option>
                    <option value = "CARAGA">CARAGA</option>
                    <option value = "NCR">NCR</option>
                    <option value = "Region I: Ilocos Region">Region I: Ilocos Region</option>
                    <option value = "Region II: Cagayan Valley">Region II: Cagayan Valley</option>
                    <option value = "Region III: Central Luzon">Region III: Central Luzon</option>
                    <option value = "Region IV-A: CALABARZON">Region IV-A: CALABARZON</option>
                    <option value = "Region IV-B: MIMAROPA">Region IV-B: MIMAROPA</option>
                    <option value = "Region V: Bicol Region">Region V: Bicol Region</option>
                    <option value = "Region VI: Western Visayas">Region VI: Western Visayas</option>
                    <option value = "Region VII: Central Visayas">Region VII: Central Visayas</option>
                    <option value = "Region VIII: Eastern Visayas">Region VIII: Eastern Visayas</option>
                    <option value = "Region IX: Zamboanga Peninsula">Region IX: Zamboanga Peninsula</option>
                    <option value = "Region X: Northern Mindanao">Region X: Northern Mindanao</option>
                    <option value = "Region XI: Davao Region">Region XI: Davao Region</option>
                    <option value = "Region XII: SOCCSKSARGEN">Region XII: SOCCSKSARGEN</option>
                </select>
                    <input type = "submit" id = "enter" name = "enter" value = "Enter">
                <br><br><br><br><br><br><br>
                    <!------- date and region ------->
                <h1 id = "date" style = "margin-left: 40%;">Region:</h1>
                <h2 id = "city" style = "text-align: center;"> @isset($cityToUpper)
                    {{ $cityToUpper}}
                @endisset</h2>
                <br><br><br><br>
                <h1 id = "date" style = "margin-left: 32%;">Date Updated:  
                </h1>
                <h1 id = "last_update" style = "text-align: center;"> @isset($last_update)
                    {{ $last_update}}
                @endisset</h1>
            </form>
        </div>
                <!------- right container ------>
        <div id = "div2" style = "width: 50%; height: 500px; float: left; padding-top: 18px; padding-left: 15px;">
                    <!---------- columns showing stastics----------->
            <div class = "column" style = "text-align: center; height: 30%; border-radius: 10px; background-color: rgba(200, 31, 40, 0.8);">
                    <h2> Active cases:</h2>
                    <h3 id = "active_cases" style = "text-align: center;">@isset($active_cases)
                    {{ $active_cases}}
                @endisset</h3>
                </div>
                <div class = "column" style = "text-align: center; height: 30%; border-radius: 10px; background-color: rgba(128, 128, 128, 0.8);">
                    <h2 style = "color: black;">Deaths:</h2>
                    <h3 id = "deaths" style = "text-align: center; color: black;">@isset($deaths)
                    {{ $deaths}}
                @endisset</h3>
                </div>
                <div class = "column" style = "text-align: center; height: 30%; border-radius: 10px; background-color:rgb(139, 231, 139, 0.8);">
                    <h2 style = "color: #2D3436;">Recovery Rate:</h2>
                    <h3 id = "recovery_rate" style = "text-align: center; color: #2D3436;">@isset($recovery_rate)
                    {{ $recovery_rate}}
                @endisset%</h3>
                </div>
                <div class = "column" style = "text-align: center; height: 30%; border-radius: 10px; background-color: rgb(98, 0, 11, 0.8);">
                    <h2>Total Cases:</h2>
                    <h3 id = "total" style = "text-align: center;">@isset($total)
                    {{ $total}}
                @endisset</h3>   
                </div>
                <div class = "column" style = "text-align: center; height: 30%; border-radius: 10px; background-color: rgb(34, 34, 34, 0.8);">
                    <h2>Fatality Rate:</h2>
                    <h3 id = "fatality_rate" style = "text-align: center;">@isset($fatality_rate)
                    {{ $fatality_rate}}
                @endisset%</h3>
                </div>
                <div class = "column" style = "text-align: center; height: 30%; border-radius: 10px; background-color: rgb(76, 94, 32, 0.8);">
                    <h2>Recoveries:</h2>
                    <h3 id = "recoveries" style = "text-align: center;">@isset($recoveries)
                    {{ $recoveries}}
                @endisset</h3>
                </div>
            </div>
        <footer>
            <p id = "about_footer">© Team Ho-Oh 2021-2022 | <a href="{{url('/about')}}">About Cov Tracer PH</a></p>
        </footer>
    </body> 
</html>