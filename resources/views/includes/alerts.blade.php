<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if ($message = Session::get('success'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: '{{$message}}'
        })
    </script>
@endif
@if (count($errors) > 0)
    @php
        $message = '<ul>';
    @endphp
    @foreach ($errors->all() as $error)
        @if ($error != '')
            @php
                $message = $message."<li>".$error."</li>";
            @endphp
        @endif
    @endforeach
    @php
        $message = $message .'</ul>';
    @endphp
    <script>
        Swal.fire({
            title: '<strong>Alerta!</strong>',
            icon: 'error',
            html: '{!!$message!!}'
        })
    </script>
@endif