@extends('modernLayout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h3>Слова</h3>

                <table class="table table-hover" >
                    <thead class="thead-default" >
                    <tr>
                        <th>Слово на английском</th>
                        <th>Перевод</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($wordsMeaning AS $word)
                        <tr>
                            <td>{{$word->word->spelling}}</td>
                            <td>{{$word->meaning}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('script')

@endsection
