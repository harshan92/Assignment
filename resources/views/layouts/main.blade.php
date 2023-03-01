<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5/css/bootstrap.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('metas')
</head>

<body>

    @include('components.nav')

    <div class="container">
        @yield('contents')
    </div>


    <!-- Ask Logout Modal -->
    <div class="modal fade" tabindex="-1" id="askLogout">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Do you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="logoutProcess()">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/jquery/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-5/js/bootstrap.min.js') }}"></script>

    <script>
        console.log("Scripts Loading");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function logout() {

            var myModal = new bootstrap.Modal(document.getElementById("askLogout"), {});

            myModal.show();

        }

        function logoutProcess() {

            $.ajax({
                url: "/logout",
                method: "post",
                data: {},
                success: function(response) {
                    location.reload();
                }
            })

        }
    </script>
    @yield('scripts')
</body>

</html>
