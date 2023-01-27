@extends('admin.components.client-layout')

@section('content')
    <div id="container">
<div class="header" style="background-color:black; height:60px; " >
  <a class="logo">JOEL ACEDEMY</a>
  <a class="calculator" style="float:right;"><i class="fa fa-calculator"></i> calculator</a>
</div>
<div class="header-bg">
<h4 class="countdown_timer">20:00</h4>
<div id="divstyle">
    <div id="timer">
    <span id="hours">00:</span>
    <span id="mins">00:</span>
    <span id="seconds">00</span>
    </div>
    <div id="buttons">
    <button id="startbtn">Start</button>
    <button id="stopbtn">Stop</button>
    <button id="resetbtn">Reset</button>
    </div>
    </div>
</div>
    <nav id="qbody">
                    <div id="form"><form action="correct.php" name=form1 method="post"></div>
                        @php
                        $count=0;
                    @endphp
                        @foreach ($data as $data)
                   <div class="qcontainer">
               @php
                   ++$count;
               @endphp
               <div class="questions"><p><span>{{ $count }}</span>{{ $data->question }}</p></div>
               <div id="options">
                      <p><input type="radio" name="answer{{ $count }}" value="{{ $data->optionA }}" class="answer{{ $count }}">{{ $data->optionA }}</p>
                      <p><input type="radio" name="answer{{ $count }}" value="{{ $data->optionB }}" class="answer{{ $count }}">{{ $data->optionB }}</p>
                      <p><input type="radio" name="answer{{ $count }}" value="{{ $data->optionC }}" class="answer{{ $count }}">{{ $data->optionC }}</p>
                      <p><input type="radio" name="answer{{ $count }}" value="{{ $data->optionD }}" class="answer{{ $count }}">{{ $data->optionD }}</p>
              </div>
               </div> 
               @endforeach
            
            
           </nav>
  
<div class="question_nav">
                <div class="question_nav_container">
                    <p class="subject">PHYSICS</p>
                    <main>
                     <div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div><div>10</div>
                     <div>11</div><div>12</div><div>13</div><div>14</div><div>15</div><div>16</div><div>17</div><div>18</div><div>19</div><div>20</div>
                     <div>21</div><div>22</div><div>23</div><div>24</div><div>25</div><div>26</div><div>27</div><div>28</div><div>29</div><div>30</div>
                     <div>31</div><div>32</div><div>33</div><div>34</div><div>35</div><div>36</div><div>37</div><div>38</div><div>39</div><div>40</div>
                        
                    </main>
                </div>

            </div>

    <div class="header" id="butt">
    <span id="prev">&#10094;</span><span id="next">&#10095;</span>
  <div id="e_submit">
  <input id="submit" type="submit" name="submit" value="submit"></div>
   <!-- <div class="control_submit" style="width:100%;background-color:cadetblue; float:left; right:0">
    <div id="qcontrol"><div>
        <span id="prev">previous</span> &nbsp;&nbsp;&nbsp;<span id="next">next</span>
   </div>
    <div class="submit";>
        
        <input id="submit" type="submit" name="submit" value="submit">

    </div></div>-->
    
    </div>
    </form>
    </div>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
  
    @endsection