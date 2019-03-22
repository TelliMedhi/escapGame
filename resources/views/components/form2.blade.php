<div class="col-lg-6 col-sm-6">
  <div class=" ecran">
<form method="post" action="{{ asset('/firstvue') }}">
      {{csrf_field()}}
      <audio controls autoplay> <source src="{{asset('Fake/Solution.mp3')}}"> </audio>

	      <div id="input1">
                <input  type="text" id="input" name="number" placeholder="super !!!">
          </div>
        <div class="col-12 row">
	      <div class="col-4">
		
			<button type="button" class="btn  btn-light col-12 " id="b1">1</button>
		
            <button type="button" class="btn  btn-light col-12 " id="b2">4</button>
        
            <button type="button" class="btn  btn-light col-12 " id="b3">7</button>
        
            <button type="button" class="btn  btn-light col-12 " id="b4">*</button>
        </div>
   
	      <div class="col-4">
	  	
			<button type="button" class="btn btn-light col-12 " id="b5">2</button>
	
		
            <button type="button" class="btn btn-light col-12 " id="b6">5</button>
       
       
            <button type="button" class="btn btn-light col-12 " id="b7">8</button>
      
            <button type="button" class="btn  btn-light col-12 " id="b8">0</button>
          
            <a href ="{{asset ('/firstvue')}}" type="button" class="btn btn-danger col-12 " id="btn2"><img class="btnCall" src="../public/img/telephone.png"></a>
         </div>
        
         
   
	     <div class="col-4">
	
			<button type="button" class="btn btn-light col-12 " id="b9">3</button>
		
		
            <button type="button" class="btn btn-light col-12 " id="b10">6</button>
       
   
            <button type="button" class="btn btn-light col-12 " id="b11">9</button>
     
     
            <button type="button" class="btn  btn-light col-12 " id="b12">#</button>
    
         
            <button type="button" class="btn  col-12 "id="b14">c</button>
   
        </div>
      </form>
      </div>
     </div>
      </div>