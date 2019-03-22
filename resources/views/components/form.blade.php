
<div class="col-sm-6 col-lg-6">
  <div class=" ecran">
<form method="post" action="{{ asset('/firstvue') }}">
      {{csrf_field()}}

	      <div id="input1">
                <input  type="text" id="input" name="number" placeholder="">
                  
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
          
            <button type="submit" class="btn  btn-success col-12 "id="btnCall"><img class="btnCall" src="../public/img/telephone.png"></button>
         </div>
        
         
   
	     <div class="col-4">
	
			<button type="button" class="btn btn-light col-12 " id="b9">3</button>
		
		
            <button type="button" class="btn btn-light col-12 " id="b10">6</button>
       
   
            <button type="button" class="btn btn-light col-12 " id="b11">9</button>
     
     
            <button type="button" class="btn  btn-light col-12 " id="b12">#</button>
    
         
            <button type="button" class="btn  col-12  "id="b14"><img class="btnCall" >c</button>
   
        </div>
      </form>
      </div>
     </div>
      </div>