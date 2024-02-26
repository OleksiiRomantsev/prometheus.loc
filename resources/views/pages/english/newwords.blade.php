@extends('modernLayout')

@section('content')
    <div id="edit_english_word" >
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="row-separator-colored-controls">{{$title}}</h4>
                    </div>

                    <div class="card-content collapse show">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Word</th>
                                    <th>Traslation</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($newwords AS $new_word)
                                    <tr>
                                        <td>
                                            <a href="{{route('english.word_page', ['id' => $new_word->id])}}">{{$new_word->id}}</a>
                                        </td>
                                        <td>{{$new_word->word->spelling}}</td>
                                        <td>{{$new_word->meaning}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
