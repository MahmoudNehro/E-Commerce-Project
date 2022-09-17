<script>
    var hostUrl = "assets/";
</script>
<script type="text/javascript">
    var plugin_path = '{{ asset('assets/js') }}/';
</script>

<script src="{{ URL::asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/js/scripts.bundle.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/js/custom/widgets.js') }}"></script>
<script src="{{ URL::asset('assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ URL::asset('assets/js/custom/modals/create-app.js') }}"></script>
<script src="{{ URL::asset('assets/js/custom/modals/upgrade-plan.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
@yield('js')
