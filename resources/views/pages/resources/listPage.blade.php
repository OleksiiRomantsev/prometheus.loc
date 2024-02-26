@extends('modernLayout')

@section('content')
    <div id="resources_list" v-cloak >
        <section class="grid-with-label" >
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Resources filter</h4>
                            <a href="{{route('resources.create')}}">
                                <button class="btn btn-success" style="float: right;" >Add new resource</button>
                            </a>
                        </div>

                        <div class="card-content collapse show" >
                            <div class="card-body">
                                <form @submit.prevent.stop="getResources" >
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" autocomplete="off" v-model="filter.search" class="form-control" placeholder="Search">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group" style="padding-top: 4.5px;" >
                                                    <select v-model="filter.sort" class="form-control" v-on:change="getResources" >
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
                            <h4 class="card-title">Resources List</h4>
                        </div>

                        <div class="card-body">
                            <table class="table table-hover" >
                                <thead>
                                <tr>

                                </tr>
                                </thead>

                                <tbody>
                                <tr>

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
    <script src="/custom/vueComponents/resources/resources_list.vue.js"></script>
@endsection
