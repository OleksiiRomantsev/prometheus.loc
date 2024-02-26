@extends('modernLayout')

@section('content')
    <section id="one_pattern" >
        <div class="row">
            <div class="col-md-12" >
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Patterns items
                            ({{$items_count}})
                        </h4>
                    </div>

                    <div class="card-body">

                        <button class="btn btn-primary waves-effect waves-light" @click="showCreateModal" >Add new item</button>

                        <a href="{{route('patterns.training', ['id' => $pattern->id])}}">
                            <button class="btn btn-success waves-effect waves-light ml-1 mr-1"  >Training</button>
                        </a>


                        <table class="table table-hover" >
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Task</th>
                                <th>Answer</th>
                                <th>Actions</th>

                            </tr>
                            </thead>

                            <tbody>

                            <tr v-for="item in items">
                                <td>@{{item.item_id}}</td>
                                <td>@{{item.eng}}</td>
                                <td>@{{item.rus}}</td>
                                <td>
                                    <button :data-id="item.item_id"  class="btn btn-primary waves-effect waves-light" @click="showEditPopup($event)" >Edit</button>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                        <edit-pattern-item
                            :item_id="edit.item_id"
                            :eng="edit.eng"
                            :rus="edit.rus"
                            @edit="editItemEventHandler"
                        ></edit-pattern-item>

                        <create-pattern-item
                            @create="addItemEventHandler"
                        >
                        </create-pattern-item>

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
    'edit_add_item_url' => route('patterns.add_edit_item'),
    'pattern_id' => $pattern->id
])}}

</script>

<script src="/public/custom/vueComponents/modals/edit_pattern_item.js" ></script>
<script src="/public/custom/vueComponents/modals/create_pattern_item.js" ></script>
<script src="/public/custom/vueComponents/patterns/one_pattern.js" ></script>
@endsection
