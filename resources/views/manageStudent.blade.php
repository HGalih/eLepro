<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
    Add Student
    </button>
            <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
			<thead class="text-white">
				<tr class="bg-red-600 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
					<th class="p-3 text-left">Name</th>
					<th class="p-3 text-left">School</th>
                    <th class="p-3 text-left">Status</th>
					<th class="p-3 text-left" width="110px">Actions</th>
				</tr>
				<tr class="bg-red-600 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                <th class="p-3 text-left">Name</th>
					<th class="p-3 text-left">School</th>
                    <th class="p-3 text-left">Status</th>
					<th class="p-3 text-left" width="110px">Actions</th>
				</tr>
                <tr class="bg-red-600 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                <th class="p-3 text-left">Name</th>
					<th class="p-3 text-left">School</th>
                    <th class="p-3 text-left">Status</th>
                  <th class="p-3 text-left" width="110px">Actions</th>
              </tr>
                <tr class="bg-red-600 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                <th class="p-3 text-left">Name</th>
					<th class="p-3 text-left">School</th>
                    <th class="p-3 text-left">Status</th>
                  <th class="p-3 text-left" width="110px">Actions</th>
              </tr>
			</thead>
			<tbody class="flex-1 sm:flex-none">
                
        @foreach($studentList as $student)
				<tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
					<td class="border-grey-light border hover:bg-gray-100 p-3">{{$student->name}}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$student->school->school}}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$student->status_id}}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">Edit</td>
				</tr>
        @endforeach
			</tbody>
		</table>
        </div>
</body>
    </div>
</x-app-layout>


<style>
  html,
  body {
    height: 100%;
  }

  @media (min-width: 640px) {
    table {
      display: inline-table !important;
    }

    thead tr:not(:first-child) {
      display: none;
    }
  }

  td:not(:last-child) {
    border-bottom: 0;
  }

  th:not(:last-child) {
    border-bottom: 2px solid rgba(0, 0, 0, .1);
  }
</style>