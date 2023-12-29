<x-app-layout>

        <div class= 'text-gray-300' >
        <table class= 'table-fixed bg-white dark:bg-gray-800'>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Date Created</th>
    <th>Last Updated</th>
    <th>
  </tr>
  @foreach ($users as $user)
    <tr>
            <td>{{$user['name']}}</td>   
            <td>{{$user['email']}}</td>
            <td>{{$user['created_at']}}</td>
            <td>{{$user['updated_at']}}</td>
    </tr>
    @endforeach
        </table>
        </div>
<!-- probably have to implement by pages or numbers to no display too much at a time nanti lag -->

</x-app-layout>