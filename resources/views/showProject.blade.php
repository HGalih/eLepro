
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
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

    @foreach($milestoneList as $milestone)
    @if(request()->get('edit') == $milestone->id)
    <form method="POST" id="goHere" action="{{route('milestone.update',$milestone->id)}}">
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
    @if(Auth::user()->progresses->where('milestone_id','=',$milestone->id)->first() != null and Auth::user()->role == 3)
    <div class="bg-white mt-3 overflow-hidden shadow rounded-lg  divide-gray-200">
  <div class="px-4 py-5 sm:px-6">
    
    <h3 class="text-lg leading-6 font-medium text-gray-900">{{$milestone->milestone}}</h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500"> {{$milestone->description}} </p>
  </div>
  <div class="px-6">
  {{-- <div class="px-4 py-5 sm:p-6 containerIframe">
    <iframe class="responsive-iframe" width=800px height=450 src="{{$milestone->video_url}}" frameborder="0"></iframe>
  </div> --}}
  {{-- <div class="px-4 py-4 sm:px-6">
</div> --}}
    
  <div class="sm:col-span-2 mb-5">
        <dt class="text-sm font-medium text-gray-500">Student Resource</dt>
        <dd class="mt-1 text-sm text-gray-900">
          <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
              <div class="w-0 flex-1 flex items-center">
                <!-- Heroicon name: solid/paper-clip -->
                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                </svg>
                
                <span class="ml-2 flex-1 w-0 truncate">{{$milestone->studentmodul_url}}</span>          
              </div>
              <div class="ml-4 flex-shrink-0">
    
                <a href="{{$milestone->studentmodul_url}}" target="_blank" download class="font-medium text-indigo-600 hover:text-indigo-500"> Download </a>
              </div>
            </li>
           
          </ul>
        </dd>
      </div>
      <a href="{{route('milestone.show',$milestone->id)}}"> <button  class=" mb-5 inline-block bg-indigo-500 border border-transparent rounded-md py-2 px-4  items-center justify-center text-base font-medium text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">Detail</button>   
      </button></a>
      @if(Auth::user()->role == 1)<a href="{{route('project.show',$project->id)}}?edit={{$milestone->id}}#goHere"> <button  class=" mb-5 bg-indigo-500 border border-transparent rounded-md py-2 px-4 inline-block items-center justify-center text-base font-medium text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">Edit Milestone</button>   
    </button></a>@endif


  </div>
  @endif
  @endif

  @endforeach
</div>

        </div>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
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


