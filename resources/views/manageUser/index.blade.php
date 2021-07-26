@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">            
                   <table id="example" class="table table-striped display nowrap">
                        <thead class="text-center" style="background-color: #FEFCFF">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Status</th>
                                <th scope="col">Role Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user )
                            <tr class="text-center">
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->phone}}</td>
                                @if ($user->status == '1')
                                   <td class="text-center"><span class="badge bg-success">Activate</span></td> 
                                @endif
                                @if ($user->status == '0')
                                   <td class="text-center"><span class="badge badge-danger">Deactivate</span></td> 
                                @endif
                                
                                @if($user->role_name == 'admin')
                                <td class="text-center"><span class="badge badge-primary">{{$user->role_name}}</span></td>
                                @endif
                                @if($user->role_name == 'user')
                                <td class="text-center"><span class="badge bg-warning">{{$user->role_name}}</span></td>
                                @endif
                                <td class="text-center">
                                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">

                                    {{-- <a href="{{ route('car.show' ,$user->id) }}" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a> --}}                                    
                                    <a href="{{ route('user.edit', $user->id ) }}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-pencil"></i>
                                        Edit
                                    </a>

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick = "return confirm ('คุณต้องการลบข้อมูลหรือไม่ ?')">
                                        <i class="fa fa-trash"> </i>
                                        Delete
                                    </button>                                   
                                    </form>
                                 </td>
                          @endforeach                           
                        </tbody>
                    </table>
            
        </div>
    </div>        
</div>
@endsection

@section('scripts')
    <script>
       $(document).ready(function() {
            var table = $('#example').DataTable( {
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
             responsive: true
            } );
        } );
    </script>
@endsection



