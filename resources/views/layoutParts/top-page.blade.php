@if(!isset($noTopBlock))
    <div class="content-header row">
        <div class="content-header-dark bg-img col-12" style="background-image: url('/app-assets/images/backgrounds/3.jpg'); background-size: cover; background-position-y: 32%;" >
            <div class="row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <h3 class="content-header-title white">{{$title}}</h3>

                    <div id="breadcrumbs" class="row breadcrumbs-top" >
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                @isset($breadcrumbs)
                                @foreach($breadcrumbs AS $text => $link)
                                    @if($loop->last)
                                        <li class="breadcrumb-item active">{{$text}}
                                        </li>
                                    @else
                                        <li class="breadcrumb-item"><a href="{{$link}}">{{$text}}</a>
                                        </li>
                                    @endif
                                @endforeach
                                @endisset
                            </ol>
                        </div>
                    </div>

                </div>
                <div class="content-header-right col-md-3 col-12">

                </div>
            </div>
        </div>
    </div>
@endif
