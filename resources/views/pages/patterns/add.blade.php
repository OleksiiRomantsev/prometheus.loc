@extends('modernLayout')

@section('content')
    <div id="patterns_add"  >
        <section class="grid-with-label" >
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{$title}}</h4>
                        </div>

                        <div class="card-content collapse show" >
                            <div class="card-body">
                                <form action="{{route('patterns.addAction')}}" method="POST" >
                                    <input type="hidden" name="lang" value="{{$lang}}" >
                                    @csrf

                                    <div class="form-body">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="number" required class="form-control" placeholder="Number">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" required class="form-control" placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success" >Create</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection


@section('script')

@endsection
