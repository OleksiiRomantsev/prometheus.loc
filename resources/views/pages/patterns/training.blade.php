@extends('modernLayout')

@section('content')
    <section id="trainingPattern" v-cloak >
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content collapse show" >
                        <div class="card-body text-center" >
                            <h3 class="info mb-2 rus-text" >@{{item.rus}}</h3>

                            <div>
                                <h1 class="display-inline-block mb-1 lfont pattern_answer_block mb-2"
                                    v-for="part in item.parts"
                                    onclick="this.classList.add('primary')"
                                >
                                    @{{part}}
                                </h1>
                            </div>

                            <div>
                                <button class="btn btn-success waves-effect waves-light"  @click="checkTheAnswer" >Go! Ahead!</button>
                            </div>

                            <div class="position-absolute" style="top: 10px; left: 10px;" >@{{ iCounter.toString() }} of {{$items_count}}</div>

                            <div class="row mt-2" >
                                <div class="col-2">
                                <select v-model="isSimple" class="form-control" >
                                    <option :value="true">Simple</option>
                                    <option :value="false">Hard</option>
                                </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')
<script>

    let items = [
        @foreach($items AS $item)
        {
            item_id: {{$item->id}},
            eng: `{{str_replace('`', "\`", $item->eng)}}`,
            rus: `{{$item->rus}}`
        },
        @endforeach
    ];

    {{tojs([
    'pattern_id' => $pattern->id,
    'pattern_list_url' => route('patterns.listPage', ['lang' => $pattern->lang]),
    'pattern_training_success_url' => route('patterns.training-success')
])}}



</script>

<script src="/public/custom/vueComponents/patterns/training.js" ></script>

@endsection
