@extends('layout.app')
@section('content')
    @if($applicants->count()!=0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">name</th>
                <th scope="col">surname</th>
                <th scope="col">actions</th>

            </tr>
            </thead>
            <tbody>
            @foreach($applicants as $applicant)
                <tr>

                    <td>{{$applicant->id}}</td>
                    <td>{{$applicant->name}}</td>
                    <td>{{$applicant->surname}}</td>

                    <td>
                        <a class="nav-link disabled" href="{{route('applicants.edit',$applicant->id)}}">edit</a>
                        <a class="nav-link disabled"  >{{old('name',$applicant->is_hired)}}</a>
                        <a class="nav-link disabled" href="{{route('applicants.delete',$applicant->id)}}" >delete</a>
                    </td>




                </tr>
            @endforeach
            </tbody>

        </table>
        {{$applicants->links()}}
    @else
         Applicant not found
    @endif





@endsection

