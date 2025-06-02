@props(['title' => 'Dashboard'])

<!DOCTYPE html>
<html lang="en">
    <x-dashboard-head :title="$title" />

    <body>
        <div id="global-loader">
            <div class="whirly-loader"> </div>
        </div>

        <div class="main-wrapper">
            <!-- Header -->
            <x-dashboard-header />

            <!-- Sidebar -->
            <x-sidebar />

            <!-- Page Content -->
            <div class="page-wrapper">
                <div class="content">
                    {{ $slot }}
                </div>
            </div>
        </div>

        {{ $modals ?? '' }}

        <!-- Scripts -->
        <script src="/assets/js/jquery-3.7.1.min.js"></script>
        <script src="/assets/js/feather.min.js"></script>
        <script src="/assets/js/jquery.slimscroll.min.js"></script>
        <script src="/assets/js/jquery.dataTables.min.js"></script>
        <script src="/assets/js/dataTables.bootstrap5.min.js"></script>
        <script src="/assets/js/moment.min.js"></script>
        <script src="/assets/js/bootstrap-datetimepicker.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/plugins/select2/js/select2.min.js"></script>
        <script src="/assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>
        <script src="/assets/js/theme-colorpicker.js"></script>
        <script src="/assets/js/script.js"></script>
    </body>
</html>
