@extends('doctors.layout.dashboard')
@section('title','المرضى')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">بيانات المرضى</h4><br>
                        {{--  <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
                        <input class="category form-control" id="search" type="text" placeholder="بحث...">
                        <div class="show-reasualt"></div>--}}
                    </div>
                    <div class="content table-responsive table-full-width">
                        @if (isset($ills) && $ills->count() > 0)
                        <table class="table table-hover table-striped" id="doctor">
                            <thead>
                                <th class="text-center">ID</th>
                                <th class="text-center">الإسم الكامل</th>
                                <th class="text-center">رقم التلبفون</th>
                                <th class="text-center">السن</th>
                                <th class="text-center">الطول</th>
                                <th class="text-center">الوزن</th>
                                <th class="text-center">الأعراض</th>
                                <th class="text-center">المرفقات</th>
                                <th class="text-center">العمليات</th>
                            </thead>
                            <tbody >
                                @foreach ($ills as $ill)
                                        <tr class="ills">
                                            <td class="text-center">{{ $ill->id}}</td>
                                            <td class="text-center">{{ $ill->fullname}}</td>
                                            <td class="text-center">
                                                <a href="tel:{{ $ill->phone_number}}">{{ $ill->phone_number}}</a>
                                                <li class="pe-7s-call"></li>
                                            </td >
                                            <td class="text-center">{{ $ill->age}}</td>
                                            <td class="text-center">{{ $ill->Length}}</td>
                                            <td class="text-center">{{ $ill->weight}}</td>
                                            <td class="text-center">{{ $ill->symptoms}}</td>
                                            <td class="text-center">
                                                @if ($ill->uploaded ==NULL)
                                                    <span>لايوجد مرفقات</span>
                                                @else
                                                    <a href="/uploaded/images/{{ $ill->uploaded}}" target="blank">{{ $ill->uploaded}}</a>
                                                @endif
                                            </td>
                                            <td class="text-center"><a href="{{Route('add.patients',$ill->id)}}" class="btn btn-warning btn-sm" class="add">أضف</a></td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-warning">
                            <h4>لا يوجد بيانات حتي الآن...</h4>
                        </div>
                      @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">

        </nav>
        <p class="copyright pull-right">
        </p>
    </div>
</footer>
@endsection

{{-- <script src="{{asset('assets1/js/jquery.js')}}" type="text/javascript"></script>

<script>
        $(document).ready(function(){
            $('#search').keyup(function(){
                var key = $(this).val();
                if (key != '') {
                    // Ajax
                    $.ajax({

                        url: "{{ Route('search.patients') }}",
                        method: "POST" ,
                        data:{
                                '_token' : "{{ csrf_token() }}",
                                'K' : key
                        },
                        success:function(response){
                            $('.show-reasualt').show();
                            $('.show-reasualt').html(response);
                        }
                        });
                }
                else{
                    $('.show-reasualt').hide();
                };
            });
        });
</script> --}}
