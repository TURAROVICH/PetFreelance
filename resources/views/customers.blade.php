@extends('layouts.all')
@section('title')
customers
@endsection

@section('content')
@foreach($all as $el)
<table class="table table-centered dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed" id="products-datatable" role="grid" aria-describedby="products-datatable_info" style="width: 710px;">
                                                <thead class="table-light">
                                                    <tr role="row">
                                                    <th >foto</th>
                                                    <th >name</th>
                                                    <th >price</th>
                                                    <th>date</th>
                                                    <th></th>
                                                </thead>
                                                <tbody>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                            <tr role="row" class="even">
                                                     
                                                        <td class="sorting_1">
                                                            <div class="d-flex">
                                                                <img src="{{asset('/storage/'.$el->img)}}" alt="table-user" class="me-3 rounded-circle avatar-sm">
                                    
                                                            </div>
                                                        </td>
                                                        <td>
                                                        
                                                        <div class="flex-1">
                                                                    <h5 class="mt-0 mb-1"><a href="javascript:void(0);" class="text-dark">{{$el->firstName}} {{$el->lastName}}</a></h5>
                                                                    <p class="mb-0 font-13">ID : {{$el->id}}</p>
                                                                </div>
                                                        
                                                        </td>
                                                        <td>{{$el->price}}{{$el->price_type}}</td>
                                                        <td>
                                                           {{$el->created_at}}
                                                        </td>
                                                        <td>
                                                            <a href="/vacance/{{$el->firstName}}/{{$el->id}}/{{(int) $id}}"><button id="visited" class="btn btn-success">откликнутся</button></a>
                                                        </td>
                                                        
                                                    </tr></tbody>
                                            </table>

                                            <script>
                                             $('#visited').click(()=>{
                                                $('#visited').addClass('btn-info')
                                                $('#visited').text('посещен')
                                               
                                             })
                                            
                                            </script>
                            @endforeach
@endsection