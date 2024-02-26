@extends('modernLayout')

@section('content')
    <div id="myapp">
        <sub-app title="Заголовок 1" ></sub-app>
        <sub-app title="Заголовок 2" ></sub-app>

        <slot-ex>
            Контент
            <template v-slot:header>
                Header
            </template>
        </slot-ex>
    </div>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-backdrop="false" data-target="#primary">
        Launch Modal
    </button>


    <button class="btn btn-outline-success mr-1 mb-1" id="position-top-end">Top End</button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary white">
                    <h4 class="modal-title white" id="myModalLabel8">Basic Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Check First Paragraph</h5>
                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot
                        cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy
                        cake.</p>
                    <hr>
                    <h5>Some More Text</h5>
                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish.
                        Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('script')

    <script>
        function showM() {
            $('#primary').modal({
                backdrop: false,
                keyboard: true,
                focus: true
            });
        }

        $('#position-top-end').on('click', function () {
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500,
                confirmButtonClass: 'btn btn-primary',
                buttonsStyling: false,
            })
        })

    </script>


    <script src="/custom/js/vue.test.js"></script>
@endsection
