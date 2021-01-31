@extends('admin.layout.dashboard')
@section('title','الرسائل')
@section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">الرسائل</h4><br>
                                    <p class="category"></p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    @if (isset($contacts) && $contacts->count() > 0)
                                    <table class="table table-hover table-striped" id="patient">
                                        @if (Session()->has('deleted'))
                                            <div class="alert alert-info">
                                                {{Session()->get('deleted')}}
                                            </div>

                                        @endif

                                        <thead>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">الإسم </th>
                                            <th class="text-center">البريد الالكتروني</th>
                                            <th class="text-center">الموضوع</th>
                                            <th class="text-center">الرساله</th>
                                            <th class="text-center">وقت الإنشاء</th>
                                            <th class="text-center">وقت التعديل</th>
                                            <th class="text-center">العمليات</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $contact)
                                                    <tr>
                                                        <td class="text-center">{{ $contact->id}}</td>
                                                        <td class="text-center">{{ $contact->name}}</td>
                                                        <td class="text-center">{{ $contact->email}}</td>
                                                        <td class="text-center">{{ $contact->subject}}</td>
                                                        <td class="text-center">{{ $contact->message}}</td>
                                                        <td class="text-center">{{ $contact->created_at}}</td>
                                                        <td class="text-center">{{ $contact->updated_at}}</td>
                                                        <td class="text-center">
                                                            <a href="{{ Route('delete.contact',$contact->id) }}" class="btn btn-warning btn-sm">حذف</a>
                                                        </td>
                                                    </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                      <div class="alert alert-danger">
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
