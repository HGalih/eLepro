<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $class->classname }}
        </h2>
    </x-slot>
    
        
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Project</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progress</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Point Earned</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>

                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @if(Auth::user()->role==3)
                      @foreach($class->course->projects as $project)
                      @if($project->milestones->first() != null)
                      @if(Auth::user()->progresses->where('milestone_id','=',$project->milestones->first()->id)->first() != null)
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                              <img class="h-10 w-10 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="">
                            </div>
                            <div class="ml-4">
                              <div class="text-sm font-medium text-gray-900">{{$project->project_title}}</div>
                              <div class="text-sm text-gray-500">{{$project->description}}</div>
                            </div>
                          </div>
                        </td>
             
                   
                      
                        @if(Auth::user()->progresses->where('milestone_id','=',$project->milestones->sortBy('orderno')->last()->id)->first() != null)
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="px-2 inline-flex py-2 text-lg leading-5 font-semibold rounded-full bg-green-100 text-green-600"> Done </span>
                        </td>
                        @elseif(Auth::user()->progresses->where('milestone_id','=',$project->milestones->sortBy('orderno')->first()->id)->first() != null)
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="px-2 inline-flex py-2 text-lg leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-600"> On Progress </span>
                        </td>
                        @endif
                      
                        <td class="px-6 py-4 whitespace-nowrap">
                         
                          <div class="text-sm text-gray-900">{{array_sum(collect($project->milestones->whereIn('id',(Auth::user()->progresses->pluck('milestone_id')->toArray())))->pluck('point')->toArray())}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                         
                         <a href="{{route('project.show',$project->id)}}"> <div class="text-sm text-blue-700">Open Project</div></a>
                        </td>
                      
                      </tr>
                      @endif
                      @endif
                      @endforeach
                      @elseif(Auth::user()->role==2)
                      @foreach($class->course->projects as $project)
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                              <img class="h-10 w-10 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="">
                            </div>
                            <div class="ml-4">
                              <div class="text-sm font-medium text-gray-900">{{$project->project_title}}</div>
                              <div class="text-sm text-gray-500">{{$project->description}}</div>
                            </div>
                          </div>
                        </td>
             
                   
                      
                       
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="px-2 inline-flex py-2 text-lg leading-5 font-semibold rounded-full bg-green-100 text-green-600"> Done </span>
                        </td>
                       
                      
             
                      
                        <td class="px-6 py-4 whitespace-nowrap">
                         
                          <div class="text-sm text-gray-900">{{array_sum(collect($project->milestones->whereIn('id',(Auth::user()->progresses->pluck('milestone_id')->toArray())))->pluck('point')->toArray())}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                         
                         <a href="{{route('project.show',$project->id)}}?class={{$class->id}}"> <div class="text-sm text-blue-700">Open Project</div></a>
                        </td>
                      
                      </tr>
                      @endforeach
                      @endif
                      <!-- More people... -->
                    </tbody>
                  </table>
                </div>
                  <h3 class="mt-5">Registered Student</h3>
                    


                </div>
              </div>
            </div>
          </div>
        </div>
</body>
    </div>
    
</x-app-layout>


