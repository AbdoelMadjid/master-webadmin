@auth
    <!--begin::Global Idle Timeout Form & Script-->
    <form id="global_idle_logout_form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        <input type="hidden" name="reason" value="idle">
    </form>

    <script>
        (function() {
            var idleTimeoutDuration = 15 * 60 * 1000; // 15 menit (900.000 ms)
            var idleTimer;
            var isLoggedOut = false;

            function triggerIdleLogout() {
                if (isLoggedOut) return;
                isLoggedOut = true;

                var form = document.getElementById('global_idle_logout_form');
                if (form) {
                    form.submit();
                } else {
                    window.location.href = "{{ route('login') }}?reason=idle";
                }
            }

            function resetIdleTimer() {
                if (isLoggedOut) return;
                clearTimeout(idleTimer);
                idleTimer = setTimeout(triggerIdleLogout, idleTimeoutDuration);
            }

            // Events yang dianggap sebagai aktivitas user
            var activityEvents = ['mousemove', 'mousedown', 'keydown', 'scroll', 'touchstart', 'click'];
            activityEvents.forEach(function(eventName) {
                window.addEventListener(eventName, resetIdleTimer, { passive: true });
            });

            // Inisialisasi timer awal saat halaman siap
            resetIdleTimer();
        })();
    </script>
    <!--end::Global Idle Timeout Form & Script-->
@endauth
