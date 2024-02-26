@extends('modernLayout')

@section('content')
<div id="patterns_list" v-cloak >
    <section class="grid-with-label" >
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pattern Filter</h4>
                    </div>

                    <div class="card-content collapse show" >
                        <div class="card-body">
                            <form @submit.prevent.stop="getPattens" >
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" autocomplete="off" v-model="filter.search" class="form-control" placeholder="Search">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group" style="padding-top: 4.5px;" >
                                                <select v-model="filter.sort" class="form-control" v-on:change="getPattens" >
                                                    <option v-for="sort in sorts" v-bind:value="sort.sort_code" >@{{sort.sort_name}}</option>
                                                </select>
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

    <section>
        <div class="row">
            <div class="col-md-12" >
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">
                            Patterns List
                            <a href="{{route('patterns.addPage',['lang' => $lang])}}">
                                <button class="btn btn-success" >Add</button>
                            </a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-hover" >
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Trained</th>
                                <th>Repeat</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr v-for="pattern in patterns" >
                                <td>
                                    <a :href="getUrl(pattern.id)">@{{pattern.id}}</a>
                                </td>
                                <td>@{{pattern.number}}</td>
                                <td>@{{pattern.name}}</td>
                                <td>@{{pattern.training_count}}</td>
                                <td>@{{pattern.repeatt}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


</div>
@endsection


@section('script')
    <script>
        {{tojs([
    'lang' => $lang,
    'pattern_list_url' => route('patterns.pattern_list_action'),
])}}
    </script>


    <script src="/custom/vueComponents/pattens_list.vue.js"></script>
@endsection
