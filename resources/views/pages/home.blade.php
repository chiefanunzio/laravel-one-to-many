@extends('layouts.main-layout')
@section('content')
       
<body>
       
    <h2>Post generator</h2>   
        
        <ul>
            @foreach ($posts as $post)      
            <li>
                   <h1>titolo:{{$post -> title}}</h1>
                    <h2>testo:{{$post -> text}}</h2>
                     <h3>tag name:{{$post -> tag -> name}}</h3>
                     <h3>tag desc:{{$post -> tag -> description}}</h3>
   
                     <p>like:{{$post -> detail -> likes}}</p>      
                     <p>argum:{{$post -> detail -> argument}}</p>   
            </li>         
            @endforeach            
        </ul>                            
</body>            
@endsection                                       