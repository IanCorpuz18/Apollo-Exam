<!DOCTYPE html>
<html>
    <head>
    </head>
    <body style="background-color:rgb(189, 235, 250)">
        <div>
            <form method="POST" action="{{ route('generate') }}">
                @csrf
                <button style="background-color:rgb(161, 241, 95);padding:5px;width:250px;height:40px" type="submit">Generate Random and Breakdown</button>    
            </form>
            <div style="display:flex">
                @if(!empty($randoms))
                @php
                    $spiral = [];
                @endphp
                    <div>
                        <h1 style="width:300px">Random names</h1>
                        <ol>
                        @foreach($randoms as $random)
                            
                                <li>{{$random->values}}</li>
                            
                            @foreach($random->breakdown as $breakdown)
                            @php
                                $spiral[] = $breakdown->values;
                            @endphp
                            @endforeach
                        @endforeach
                        </ol>
                    </div>
                    <div style="text-align: center">
                        <svg viewBox="-5 -10 1000 600" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <path id="MyPath" style="display:none" d="m272 512c-149.984375 0-272-122.015625-272-272 0-132.335938 107.664062-240 240-240s240 107.664062 240 240c0 114.6875-93.3125 208-208 208s-208-93.3125-208-208c0-97.039062 78.960938-176 176-176s176 78.960938 176 176c0 79.40625-64.609375 144-144 144s-144-64.59375-144-144c0-61.742188 50.238281-112 112-112s112 50.257812 112 112c0 44.113281-35.886719 80-80 80s-80-35.886719-80-80c0-26.464844 21.535156-48 48-48s48 21.535156 48 48v16h-32v-16c0-8.832031-7.183594-16-16-16s-16 7.167969-16 16c0 26.464844 21.535156 48 48 48s48-21.535156 48-48c0-44.113281-35.886719-80-80-80s-80 35.886719-80 80c0 61.742188 50.238281 112 112 112s112-50.257812 112-112c0-79.40625-64.609375-144-144-144s-144 64.59375-144 144c0 97.039062 78.960938 176 176 176s176-78.960938 176-176c0-114.6875-93.3125-208-208-208s-208 93.3125-208 208c0 132.335938 107.664062 240 240 240 85.40625 0 165.070312-45.984375 207.902344-120.015625l27.699218 16.03125c-48.53125 83.871094-138.800781 135.984375-235.601562 135.984375zm0 0" fill="#40a2e7"/>
                            </defs>
                            <use xlink:href="#MyPath" fill="none" stroke-width="0.1" stroke="black"  />
                            <text font-family="Verdana" font-size="5">
                            <textPath xlink:href="#MyPath">
                                {{  implode('  ',$spiral) }}
                            </textPath>
                            </text>
                        </svg>
                    </div>
                @endif
            </div>
        </div>
    </body>

<script>

</script>

</html>


