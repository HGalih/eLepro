
<x-app-layout>
    <x-slot name="header">
      <a href="{{url()->previous()}}"> <button type="button" class="inline-block mr-2 items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Back</button></a>

        <h2 class="font-semibold text-xl inline-block text-gray-800 leading-tight">
            {{ __($project->project_title) }}
        </h2>
    </x-slot>
    
        
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">Project Information</h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">{{$project->course->course}}</p>
  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Project Name</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$project->project_title}}</dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Project Description</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$project->description}}</dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Project Example URL</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$project->example_url}}</dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Application</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$project->application}}</dd>
      </div>
    
    </dl>
  </div>
  
  
</div>
@if(Auth::user()->role==2)
<div class="flex flex-col mt-12">
  
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Milestone</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Point</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Open Detail</th>

            </tr>
          </thead>
          <tbody>
@endif
    @foreach($milestoneList as $milestone)
    @if(request()->get('edit') == $milestone->id)
    <form method="POST" id="goHere" action="{{route('milestone.update',$milestone->id)}}">
      @method('PUT')
      @csrf
    <div class="bg-white mt-3 overflow-hidden shadow rounded-lg  divide-gray-200">
  <div class="px-4 py-5 sm:px-6">
    

  <label for="email" class="block text-sm font-medium text-gray-700">Milestone Name</label>
  <div class="mt-1">
    <input type="text" name="milestone" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{$milestone->milestone    }}" aria-describedby="email-description">
  </div>
  <label for="email" class="block mt-2 text-sm font-medium text-gray-700">Milestone Description</label>
  <div class="mt-1">
  <textarea name="milestone" id="email" class="shadow-sm  focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{$milestone->description}}
</textarea>  

  </div>
  <div class="mt-2">
  <label for="email" class="block text-sm font-medium text-gray-700">Video URL</label>
  <div class="">
    <input type="text" name="videourl" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{$milestone->video_url}}" aria-describedby="email-description">
  </div>

    
  <div class="sm:col-span-2 mt-2 mb-5">
        <dt class="text-sm font-medium text-gray-500">Student Resource</dt>
        <dd class="mt-1 text-sm text-gray-900">
          <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
              <div class="w-0 flex-1 flex items-center">
                <!-- Heroicon name: solid/paper-clip -->
                <input type="text" name="studentresource" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{$milestone->studentmodul_url}}" aria-describedby="email-description">
              </div>
              <div class="ml-4 flex-shrink-0">
    
                <a href="{{$milestone->studentmodul_url}}" target="_blank" download class="font-medium text-indigo-600 hover:text-indigo-500"> Download </a>
              </div>
            </li>
           
          </ul>
        </dd>
      </div>
      <button type="submit" class=" mb-5 bg-indigo-500 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">Apply Changes</button>   
    </button>
  </div>
</form>




    @else
    
    @if(Auth::user()->progresses->where('milestone_id','=',$milestone->id)->first() != null and Auth::user()->role == 2)
    <tr class="bg-white">
      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{($loop->index )+1}}. {{$milestone->milestone}}</td>
      <td class="px-6 py-4 whitespace-nowrap text-sm text-green-700">{{$milestone->point}}</td>

      <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
        <a href="{{route('milestone.show',$milestone->id)}}" class="text-indigo-600 hover:text-indigo-900">Open</a>
      </td>
    </tr>
  @else
  
  @endif

  @endif

  @endforeach
  @if(Auth::user()->role==2)
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endif
        </div>
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-12">
          @if(Auth::user()->role==1)
         
          <div class="flex flex-col mb-12">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Milestone</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Point</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Open Detail</th>

                      </tr>
                    </thead>
                    <tbody>
                      <!-- Odd row -->
                      @foreach ($milestoneList as $milestone)
                      <tr class="bg-white">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{($loop->index )+1}}. {{$milestone->milestone}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-700">{{$milestone->point}}</td>

                        <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                          <a href="{{route('milestone.show',$milestone->id)}}" class="text-indigo-600 hover:text-indigo-900">Open</a>
                        </td>
                      </tr>
          
                      <!-- Even row -->
                      @endforeach
          
                      <!-- More people... -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         
          @endif
          @if( request()->get('class') !=null && Auth::user()->role==1)
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table id="goHere" class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Student</th>
                        @foreach($milestoneList as $milestone)
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{$milestone->milestone}}</th>
                        @endforeach
                       
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @foreach($studentList as $student)
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                              <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                            </div>
                            <div class="ml-4">
                              <div class="text-sm font-medium text-gray-900">{{$student->name}}</div>
                              <div class="text-sm text-gray-500">{{$student->email}}</div>
                            </div>
                          </div>
                        </td>
                        @foreach($milestoneList as  $milestone)
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900"></div>
                          <div class="text-sm text-gray-500">
                            
                            @if($student->progresses->where('milestone_id','=',$milestone->id)->first() != null)
                            <form method="POST" action="{{route('studentprogress.destroy',$student->progresses->where('milestone_id','=',$milestone->id)->first()->id)}}">
                              <input type="hidden" name="_method" value="DELETE">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             <input type="hidden" name="point" value="{{$milestone->point}}">
                            <button type="submit" class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800"> Opened </span></button>
                            @else
                            <form method=POST action="{{route('studentprogress.store')}}">
                              @csrf
                              <input type="hidden" name="milestone_id" value="{{$milestone->id}}">
                              <input type="hidden" name="student_id" value="{{$student->id}}">
                              <input type="hidden" name="point" value="{{$milestone->point}}">
                            <button type="submit" class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-gray-100 text-gray-800"> Closed </span></button>
                            </a>
                            @endif
                          </form>
                          </div>
                        </td>
                        @endforeach
                       
                      </tr>
                      @endforeach
                      <!-- More people... -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          @endif
          @if(Auth::user()->role == 1)
          <button id="myBtn"  class=" mb-5 mt-5 bg-indigo-500 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">Add Milestone</button> 
          @endif
        </div>
        
</body>

    </div>
 
</x-app-layout>

<style>
    .responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}
.containerIframe {
  position: relative;
  overflow: hidden;
  width: 100%;
  padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
}
    </style>


<div id="myModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" style="display: none" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div id="" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span id="" class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

    <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
    <div id="" class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
          <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
            <!-- Heroicon name: outline/exclamation -->
            <svg  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-700" viewBox="0 0 20 20" fill="currentColor">
              <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
            </svg>
          </div>
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Add Milestone to {{$project->project_title}}</h3>
            <div class="mt-2">
              <div class="bg-white sm:rounded-lg ">
                <div class="">
                  <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{route('milestone.store')}}" method="POST">
                      @csrf
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-6">
                          <label for="first-name" class="block text-sm font-medium text-gray-700">Milestone Title</label>
                          <input type="text" name="milestone" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
            
                        <div class="col-span-6 sm:col-span-6">
                          <label for="last-name" class="block text-sm font-medium text-gray-700">Description</label>
                          <input type="text" name="description" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
            
                        <div class="col-span-6 sm:col-span-2">
                          <label for="email-address" class="block text-sm font-medium text-gray-700">Point</label>
                          <input type="number" name="point" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                          <label for="email-address" class="block text-sm font-medium text-gray-700">Student Modul</label>
                          <input type="text" name="studentmodul_url" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                          <label for="email-address" class="block text-sm font-medium text-gray-700">Video URL</label>
                          <input type="text" name="video_url" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                          <label for="email-address" class="block text-sm font-medium text-gray-700">Order Number</label>
                          <input type="number" name="orderno" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                          <label for="email-address" class="block text-sm font-medium text-gray-700">Project</label>
                          <input type="hidden" value="{{$project->id}}" name="project_id">
                          <input type="text" readonly name="" id="email-address" value="{{$project->project_title}}" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
   
            
                       
                      </div>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">Add</button>
      </form>

        <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm close">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
  // Get the modal
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");


// Get the button that opens the modal
var addBtn = document.getElementById("myBtn");
var addBtn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks on the button, open the modal
addBtn.onclick = function() {
  modal.style.display = "block";

}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>