@extends('admin.components.client-layout')

@section('content')
<nav id="correction" style="display:none;">
<div id="container">
       <nav id="top">
       <div class="header" style="background-color:black; height:60px; " >
       <a class="logo">JOEL ACEDEMY</a>
     </div>
     
       </nav>
              
               <nav id="qbody">
                  
                  <div class="qcontainer">
                    <p style="font-weight:bold;">Question:<span>'.++$count.'</span></p>
                <div class="questions"><p>'.$test[$i][1].'</p></div>
                <div id="options">
               
                      <p><input type="radio" name="answer'.$count.'" value="'.  $test[$i][$t].'" id="options"> '. $test[$i][$t].'</p>';
                   
            </div>
           </div> 
            
      
         </nav>
       <div class="question_nav">
                <div class="question_nav_container">
                    <p class="subject"style="text-transform: capitalize;">'.$r['course_name'].'</p>
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
          <div id="e_submit"><input id="submit" class="backbt" type="submit" name="submit" value="Back">
          </div>
           <!-- <div class="control_submit" style="width:100%;background-color:cadetblue; float:left; right:0">
            <div id="qcontrol"><div>
                <span id="prev">previous</span> &nbsp;&nbsp;&nbsp;<span id="next">next</span>
           </div>
            <div class="submit";>
                
                <button>back</button>
        
            </div></div>-->
            </div>
            </div>
      </nav>
   
   <nav id="result_box" style="margin:50px auto;">
        <div class="panel" id="result">
<center><h1 class="title" style="color:#660033">Result</h1><center><br /><table id="title2" class="table table-striped title1" style="font-size:20px;">
<tr style="color:green"><td>course<i class="" ></i></td><td class="value" style="text-transform: capitalize;">physics</td></tr>
<tr style="color:blue"><td>Total question<i class="" ></i></td><td class="value">20</td></tr>
<tr style="color:yellow"><td>Right answer <i class="" ></i></td><td class="value">10</td></tr>
<tr style="color:red"><td>Wrong answer<i class=""></i></td><td class="value">10</td></tr>
<tr style="color:#66CCFF"><td>Rating <i class=""></i></td><td class="value">505</td></tr>
</table></div><div id="switch" style="margin:auto; width:50%;">
<button id="trydb">Correction</button>
<a href="course_view.php?id='.$id.'" ><button id="correctdb">Go Back</button></a>
</div>
 </nav>
        
   </nav>
   <script type="text/javascript" src="jquery.js"></script>
   <script type="text/javascript" src="script.js"></script>
@endsection