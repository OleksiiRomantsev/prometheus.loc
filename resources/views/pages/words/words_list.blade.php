@extends('modernLayout')

@section('content')
<div id="words_list" v-cloak >
    <section class="grid-with-label" >
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Words Filter</h4>
                    </div>

                    <div class="card-content collapse show" >
                        <div class="card-body">
                            <form @submit.prevent.stop="getWords" >
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" autocomplete="off" v-model="filter.search" class="form-control" placeholder="Search">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group" style="padding-top: 4.5px;" >
                                                <select v-model="filter.sort" class="form-control" v-on:change="getWords" >
                                                    <option v-for="sort in sorts" v-bind:value="sort.dir" >@{{sort.dir}}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <fieldset style="padding-top: 16px;" >
                                                <div class="custom-control custom-checkbox">
                                                    <input type="radio" class="custom-control-input" name="customCheck" id="customCheck3" v-model="filter.ready" value="all" @change="getWords" >
                                                    <label class="custom-control-label" for="customCheck3">All</label>
                                                </div>

                                                <div class="custom-control custom-checkbox">
                                                    <input type="radio" class="custom-control-input" name="customCheck" id="customCheck1" v-model="filter.ready" value="ready" @change="getWords" >
                                                    <label class="custom-control-label" for="customCheck1">Ready for start training</label>
                                                </div>

                                                <div class="custom-control custom-checkbox">
                                                    <input type="radio" class="custom-control-input" name="customCheck" id="customCheck2" v-model="filter.ready" value="not ready" @change="getWords" >
                                                    <label class="custom-control-label" for="customCheck2">Not ready for training</label>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="col-md-3">
                                            <select v-model="filter.form" class="form-control" v-on:change="getWords" >
                                                <option v-for="form in forms" v-bind:value="form" >@{{form}}</option>
                                            </select>
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
                        <h4 class="card-title">Words List</h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-hover" >
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Word</th>
                                <th>Translate</th>
                                <th>Status</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr v-for="word in words" :class="word.status" >
                                <td>
                                    <a :href="getUrl(word.id)" target="_blank" >@{{word.id}}</a>

                                </td>
                                <td>@{{word.spelling}}</td>
                                <td>@{{word.meaning}}</td>
                                <td>@{{word.status}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- pagination -->
    <div class="vue-pagination" >
        <div class="btn-group m-b-10">
            <button type="button" v-if="pagination.showFistButton" v-on:click="toPage(0)" class="btn btn-secondary waves-effect">First</button>
            <button type="button" v-if="pagination.showPrevButton" v-on:click="toPage(pagination.pageNumber - 1)" class="btn btn-secondary waves-effect">Prev</button>

            <button type="button"
                    v-for="page in pagination.showPages"
                    v-bind:class="{ current: page.active }" class="btn btn-secondary waves-effect"
                    v-on:click="toPage(page.number)" >
                @{{page.number + 1}}
            </button>

            <button type="button" v-on:click="toPage(pagination.pageNumber + 1)" v-if="pagination.showNextButton" class="btn btn-secondary waves-effect">Next</button>
            <button type="button" v-if="pagination.showLastButton" v-on:click="toPage(pagination.pageCount - 1)" class="btn btn-secondary waves-effect">Last</button>
        </div>
    </div>
    <!-- / pagination -->

</div>
@endsection


@section('script')
    <script src="/custom/vueComponents/wordsList.vue.js"></script>
@endsection
