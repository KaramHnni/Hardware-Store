    @switch($type)
     
     @case('success') 
      
<p class="  py-4 rounded px-2 text-md text-blue font-semibold ">

@break
@case('danger')
<p class="  py-4 rounded px-2 font-semibold text-red  text-md ">
@break
@default
<p class="bg-grey">
@break
@endswitch
{{$content}} </p>



