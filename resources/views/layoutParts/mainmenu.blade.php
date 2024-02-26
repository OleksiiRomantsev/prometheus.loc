<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">


            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="material-icons">translate</i><span>English</span></a>
                <ul class="dropdown-menu">

                    <li data-menu="">
                        <a class="dropdown-item" href="{{route('english.createWordPage')}}" data-toggle="">
                            <i class="material-icons">plus_one</i>
                            <span data-i18n="Contacts">Create word</span>
                        </a>
                    </li>

                    <li data-menu="">
                        <a class="dropdown-item" href="{{route('words-list.listPage')}}" data-toggle="">
                            <i class="material-icons">data_usage</i>
                            <span data-i18n="Contacts">Words list</span>
                        </a>
                    </li>

                    <li data-menu="">
                        <a class="dropdown-item" href="{{route('english.irregular-verbs')}}" data-toggle="">
                            <i class="material-icons">error_outline</i>
                            <span data-i18n="Contacts">Irregular Verbs</span>
                        </a>
                    </li>


                    <li data-menu="">
                        <a class="dropdown-item" href="{{route('english.newLearnedWordsPage')}}" data-toggle="">
                            <i class="material-icons">fiber_new</i>
                            <span data-i18n="Contacts">New learned words</span>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="dropdown nav-item" data-menu="dropdown">
                <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">
                    <i class="material-icons">arrow_upward</i>
                    <span>Workouts</span>
                </a>
                <ul class="dropdown-menu">

                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">autorenew</i><span data-i18n="Horizontal">Voronka</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="{{route('voronka.voronka_list', ['lang' => 'en'])}}" data-toggle=""><span data-i18n="Classic">English</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="material-icons">cached</i><span data-i18n="Horizontal">Patterns</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="{{route('patterns.listPage', ['lang' => 'en'])}}" data-toggle=""><span data-i18n="Classic">English</span></a>
                            </li>
                        </ul>
                    </li>


{{--                    <li data-menu="">--}}
{{--                        <a class="dropdown-item" href="{{route('resources.listPage')}}" data-toggle="">--}}
{{--                            <i class="material-icons">grade</i>--}}
{{--                            <span data-i18n="Contacts">Resources</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                    <li data-menu="">--}}
{{--                        <a class="dropdown-item" href="{{route('mainPage')}}" data-toggle="">--}}
{{--                            <i class="material-icons">grade</i>--}}
{{--                            <span data-i18n="Contacts">Verbal counting</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}

                </ul>
            </li>



            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="material-icons">mic</i><span>Pronunciation</span></a>
                <ul class="dropdown-menu">

                    <li data-menu="">
                        <a class="dropdown-item" href="{{route('pronunciation.english')}}" data-toggle="">
                            <i class="material-icons">mic</i>
                            <span data-i18n="Contacts">English</span>
                        </a>
                    </li>

                    <li data-menu="">
                        <a class="dropdown-item" href="{{route('pronunciation.german')}}" data-toggle="">
                            <i class="material-icons">mic</i>
                            <span data-i18n="Contacts">German</span>
                        </a>
                    </li>

                    <li data-menu="">
                        <a class="dropdown-item" href="{{route('pronunciation.france')}}" data-toggle="">
                            <i class="material-icons">mic</i>
                            <span data-i18n="Contacts">French</span>
                        </a>
                    </li>

                </ul>
            </li>


{{--            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="material-icons">fast_forward</i><span>Instruments</span></a>--}}
{{--                <ul class="dropdown-menu">--}}

{{--                </ul>--}}
{{--            </li>--}}


            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="material-icons">trending_up</i><span>Statistics</span></a>
                <ul class="dropdown-menu">
                    <li data-menu="">
                        <a class="dropdown-item" href="{{route('statistic.english_words')}}" data-toggle="">
                            <i class="material-icons">star</i>
                            <span data-i18n="Contacts">English stat</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
